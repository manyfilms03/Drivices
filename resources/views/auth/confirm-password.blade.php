<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <p>Esta é uma área segura. Por favor, confirme sua senha antes de continuar.</p>
    
    <input type="password" name="password" required placeholder="Digite sua senha">
    
    <button type="submit">Confirmar Senha</button>
</form>