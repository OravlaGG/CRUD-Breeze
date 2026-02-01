<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonajeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'nivel' => $this->nivel,
            'clase' => $this->clase,
            'raza' => $this->raza,
            'aliniamiento' => $this->aliniamiento,
            'historia' => $this->historia,
        ];
    }
}
