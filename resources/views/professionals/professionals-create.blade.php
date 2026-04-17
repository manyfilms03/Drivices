<form action="{{ route('professionals.store') }}" method="POST">
    @csrf
    <input type="text" hidden name="user_id" value="{{ auth()->user()->id }}">
    <input type="text" name="biografia" placeholder="biografia">
    <button type="submit">Enviar</button>
</form>