<form action="{{ route('password.update')}}" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="E-mail">
    <input type="text" name="token" required hidden value="{{ request()->route('token') }}" >
    <input type="password" name="password" required placeholder="Senha">
    <input type="password" name="password_confirmation" placeholder="Confirme a Senha">
    <button type="submit">enviar</button>
</form>
