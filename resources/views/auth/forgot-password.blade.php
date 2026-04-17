<form action="{{ route('password.email') }}" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="E-mail">
    <button type="submit">enviar</button>
</form>
@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif