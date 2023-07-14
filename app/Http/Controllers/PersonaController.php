<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

// hola

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $existingEmail = Persona::where('correo', $request->correo)->exists();

        if ($existingEmail) {
            return response()->json([
                'message' => 'El correo electrónico ya está en uso'
            ], 400);
        }
        $request->validate([
            'nombre' => ['required', 'regex:/^[A-Za-z\sñáéíóú,]+$/u'],
            'correo' => ['required', 'email'],
            'telefono' => ['required'],
            'mensaje' => ['required', 'regex:/^[A-Za-z\sñáéíóú!?¿,]+$/u']
        ]);


        $persona = Persona::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje
        ]);

        $details = [
            'nombre' => $request['nombre'],
            'correo' => $request['correo'],
            'telefono' => $request['telefono'],
            'mensaje' => $request['mensaje']
        ];

       Mail::to('rubendariotriana@gmail.com')->send(new SendPost($details));



        return response()->json([
            'mensaje' => 'La persona se registró correctamente',
            'persona' => $persona
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
