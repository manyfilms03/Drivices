<x-header />
<x-page_content>
    <div class="w3-container">
        <h5>Pedidos</h5>
        <a href="{{ route('pedidos.create') }}">Fazer Pedido</a>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Descrição</th>
                    <th>Cupom</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->user->name }}</td>
                        <td>{{ $pedido->descricao }}</td>
                        <td>{{ $pedido->cupon ? $pedido->cupon->nome : 'Sem Cupom' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table><br>

        <button class="w3-button w3-dark-grey">Mais Pedidos<i class="fa fa-arrow-right"></i></button>
    </div>
</x-page_content>
<x-footer />
