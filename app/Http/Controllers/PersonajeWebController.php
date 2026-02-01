<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeWebController extends Controller
{
    /**
     * Mostrar listado de personajes.
     */
    public function index()
    {
        $personajes = Personaje::all();
        return view('personajes.index', compact('personajes'));
    }

    /**
     * Mostrar formulario de creación.
     */
    public function create()
    {
        return view('personajes.create');
    }

    /**
     * Guardar un nuevo personaje.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'nivel' => 'required|integer',
            'clase' => 'required|string',
            'raza' => 'required|string',
            'aliniamiento' => 'required|string',
            'historia' => 'required|string',
        ]);

        Personaje::create($request->all());

        return redirect()->route('personajes.index')
                         ->with('success', 'Personaje creado correctamente');
    }

    /**
     * Mostrar un personaje concreto.
     */
    public function show(Personaje $personaje)
    {
        return view('personajes.show', compact('personaje'));
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit(Personaje $personaje)
    {
        return view('personajes.edit', compact('personaje'));
    }

    /**
     * Actualizar un personaje.
     */
    public function update(Request $request, Personaje $personaje)
    {
        $request->validate([
            'nombre' => 'required|string',
            'nivel' => 'required|integer',
            'clase' => 'required|string',
            'raza' => 'required|string',
            'aliniamiento' => 'required|string',
            'historia' => 'required|string',
        ]);

        $personaje->update($request->all());

        return redirect()->route('personajes.index')
                         ->with('success', 'Personaje actualizado correctamente');
    }

    /**
     * Eliminar un personaje.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();

        return redirect()->route('personajes.index')
                         ->with('success', 'Personaje eliminado correctamente');
    }
}
