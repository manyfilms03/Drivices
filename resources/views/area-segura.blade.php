<h1>area protegida</h1>
@if (!auth()->user()->two_factor_secret)
    {{-- Botão para ATIVAR --}}
    <form method="POST" action="{{ route('two-factor.enable') }}">
        @csrf
        <button type="submit" class="btn">Ativar Autenticação de 2 Fatores</button>
    </form>
@else
    {{-- Se já ativou, precisamos mostrar o QR Code para ele escanear --}}
    <div>
        {!! auth()->user()->twoFactorQrCodeSvg() !!}
    </div>

    {{-- Mostre também os códigos de recuperação (RECOVERY CODES) --}}
    <ul>
        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
            <li>{{ $code }}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('two-factor.disable') }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Desativar 2FA</button>
    </form>
    {{-- Este formulário deve aparecer APENAS se o two_factor_secret existir, 
     mas o two_factor_confirmed_at for NULL --}}

    <form method="POST" action="{{ route('two-factor.confirm') }}">
        @csrf
        <p>Digite o código de 6 dígitos do seu aplicativo para confirmar a ativação:</p>
        <input type="text" name="code" required placeholder="000000">
        <button type="submit">Confirmar e Ativar 2FA</button>
    </form>
@endif

@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif
