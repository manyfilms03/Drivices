<h1>Verifique seu email</h1>
<form action="{{ route('verification.send') }}" method="POST">
    <button type="submit">enviar novamente</button>
</form>
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
@endif