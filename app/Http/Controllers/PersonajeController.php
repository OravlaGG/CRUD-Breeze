<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajeStoreRequest;
use App\Http\Requests\PersonajeUpdateRequest;
use App\Http\Resources\PersonajeCollection;
use App\Http\Resources\PersonajeResource;
use App\Models\Personaje;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonajeController extends Controller
{
    public function index(Request $request): PersonajeCollection
    {
        $personajes = Personaje::all();

        return new PersonajeCollection($personajes);
    }

    public function store(PersonajeStoreRequest $request): PersonajeResource
    {
        $personaje = Personaje::create($request->validated());

        return new PersonajeResource($personaje);
    }

    public function show(Request $request, Personaje $personaje): PersonajeResource
    {
        return new PersonajeResource($personaje);
    }

    public function update(PersonajeUpdateRequest $request, Personaje $personaje): PersonajeResource
    {
        $personaje->update($request->validated());

        return new PersonajeResource($personaje);
    }

    public function destroy(Request $request, Personaje $personaje): Response
    {
        $personaje->delete();

        return response()->noContent();
    }
}
