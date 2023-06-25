<?php

namespace App\Http\Controllers;

use App\Models\Alta;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AltaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $altas = Alta::get();

        $data = $altas->map(function($altas){
            return [
                'nombre_usuario' => $altas->nombre,
                'correo' => $altas->correo,
                'telefono' => $altas->telefono,
                'mensaje' => $altas->mensaje,
            ];
        });

        return response()->json([
            'informe' => 'Mensajes de usuarios',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'alpha:ascii'],
            'correo' => ['required', 'email'],
            'telefono' => ['required', 'alpha:ascii'],
            'mensaje' => ['required', 'alpha:ascii']
        ]);

        $alta = Alta::create([
            'nombre' => ['required', 'alpha:ascii'],
            'correo' => ['required', 'email'],
            'telefono' => ['required', 'alpha:ascii'],
            'mensaje' => ['required', 'alpha:ascii']
        ]);

        return response()->json([
            'mensaje' => 'La persona se registro correctamente',
            'alta' => $alta
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alta $alta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alta $alta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alta $alta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alta $alta)
    {
        //
    }
}
