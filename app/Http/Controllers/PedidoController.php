<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Cupon;
use Carbon\Carbon;

use function Symfony\Component\Clock\now;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pedidos = Pedido::all();
        return view('pedidos', [
            'pedidos' => $pedidos,
            // 'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePedidoRequest $request)
    {
        $cupon = Cupon::where('nome', '=', $request->cupon_id)->first();
        $pedido = Pedido::create([
            'descricao' => $request->descricao,
            'user_id' => $request->id,
            'cupon_id'  => $cupon ? $cupon->id : null,
            'orcamento' => $request->orcamento,
            'foto' => $request->foto,
            'emergencia' => $request->emergencia,
            'disponibilidade' => $request->disponibilidade,
            'data_preferida' => $request->data_preferida,
            'status' => 'Pendente',
        ]);

        $pedido->save();

        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
