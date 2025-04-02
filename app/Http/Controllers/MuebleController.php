<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMuebleRequest;
use App\Http\Requests\UpdateMuebleRequest;
use App\Models\Fabricado;
use App\Models\Mueble;
use App\Models\Prefabricado;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $muebles = Mueble::with('muebleable')->get();

        return view('muebles.index', ['muebles' => $muebles]);
    }

    public function indexFabricado()
    {
        return view('muebles.createFabricado');
    }

    public function indexPrefabricado()
    {
        return view('muebles.createPrefabricado');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('muebles.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMuebleRequest $request)
    {

        if (is_null($request->alto) && is_null($request->ancho)) {

            $prefabricado = new Prefabricado();
            $prefabricado->save();
            $mueble = new Mueble();
            $mueble->fill($request->validated());
            $mueble->muebleable()->associate($prefabricado);
            $mueble->save();

        } else {

            $fabricado = new Fabricado();
            $fabricado->alto = $request->alto;
            $fabricado->ancho = $request->ancho;
            $fabricado->save();
            $mueble = new Mueble();
            $mueble->fill($request->validated());
            $mueble->muebleable()->associate($fabricado);
            $mueble->save();
        }

        return redirect()->route('muebles.index');
    }


    public function storeFabricado(StoreFabricadoRequest $request)
    {
        $fabricado = new Fabricado();
        $fabricado->alto = $request->alto;
        $fabricado->ancho = $request->ancho;
        $fabricado->save();

        $mueble = new Mueble();
        $mueble->precio = $request->precio;
        $mueble->denominacion = $request->denominacion;
        $mueble->muebleable_id = $fabricado->id;
        $mueble->muebleable_type = Fabricado::class;
        $mueble->save();

        $mueble->muebleable()->associate($fabricado);

        return redirect()->route('muebles.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mueble $mueble)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mueble $mueble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMuebleRequest $request, Mueble $mueble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mueble $mueble)
    {
        //
    }
}
