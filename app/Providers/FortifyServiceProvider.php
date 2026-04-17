<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        Fortify::redirectUserForTwoFactorAuthenticationUsing(RedirectIfTwoFactorAuthenticatable::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        // 1. Login
        Fortify::loginView(fn () => view('auth.login'));

        // 2. Registro
        Fortify::registerView(fn () => view('auth.register'));

        // 3. Esqueci minha senha
        Fortify::requestPasswordResetLinkView(fn () => view('auth.forgot-password'));

        // 4. Resetar a senha (o formulário real)
        Fortify::resetPasswordView(fn ($request) => view('auth.reset-password', ['request' => $request]));

        // 5. Verificação de E-mail
        Fortify::verifyEmailView(fn () => view('auth.verify-email'));

        // 6. Confirmação de senha (segurança extra)
        Fortify::confirmPasswordView(fn () => view('auth.confirm-password'));

        // 7. Dois Fatores (2FA)
        Fortify::twoFactorChallengeView(fn () => view('auth.two-factor-challenge'));

    }
};
