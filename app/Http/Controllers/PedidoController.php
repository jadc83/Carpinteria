<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Mueble;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Auth::user()->pedidos;
        return view('pedidos.index', ['pedidos' => $pedidos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $muebles = Mueble::all();
        return view('pedidos.create', [ 'muebles' => $muebles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $pedido = new Pedido();
       $pedido->user_id = Auth::id();
       $pedido->mueble_id = $request->mueble_id;
       $pedido->cantidad = $request->cantidad;
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
