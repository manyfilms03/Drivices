<form method="POST" action="{{ route('two-factor.login') }}">
    @csrf
    <input type="text" name="code" placeholder="Código do App">
    <input type="text" name="recovery_code" placeholder="Código de Recuperação">
    
    <button type="submit">Autenticar</button>
</form>