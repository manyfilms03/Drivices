<form action="{{ route('register')}}" method="POST">
    @csrf
    <input type="text" name="name" required placeholder="Nome">
    <input type="text" name="cpf" required placeholder="cpf">
    <input type="text" name="nascimento" required hidden value="{{date('Y-m-d')}}">
    <input type="email" name="email" required placeholder="E-mail">
    <input type="password" name="password" required placeholder="Senha">
    <input type="text" name="tipo" required hidden value="Usuario">
    <input type="password" name="password_confirmation" placeholder="Confirme a Senha">
    
    <button type="submit">enviar</button>
</form>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- 'name' => 'caio',
            'email' => 'caio@gmail.com',
            'password' => bcrypt('senha'),
            'cpf' => '12345678910',
            'nascimento' => date('Y-m-d'),
            'tipo' => 'Administrador', --}}