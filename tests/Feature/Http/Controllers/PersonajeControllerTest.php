<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PersonajeController
 */
final class PersonajeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_behaves_as_expected(): void
    {
        $personajes = Personaje::factory()->count(3)->create();

        $response = $this->get(route('personajes.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonajeController::class,
            'store',
            \App\Http\Requests\PersonajeStoreRequest::class
        );
    }

    #[Test]
    public function store_saves(): void
    {
        $nombre = fake()->word();
        $nivel = fake()->numberBetween(-10000, 10000);
        $clase = fake()->word();
        $raza = fake()->word();
        $aliniamiento = fake()->word();
        $historia = fake()->text();

        $response = $this->post(route('personajes.store'), [
            'nombre' => $nombre,
            'nivel' => $nivel,
            'clase' => $clase,
            'raza' => $raza,
            'aliniamiento' => $aliniamiento,
            'historia' => $historia,
        ]);

        $personajes = Personaje::query()
            ->where('nombre', $nombre)
            ->where('nivel', $nivel)
            ->where('clase', $clase)
            ->where('raza', $raza)
            ->where('aliniamiento', $aliniamiento)
            ->where('historia', $historia)
            ->get();
        $this->assertCount(1, $personajes);
        $personaje = $personajes->first();

        $response->assertCreated();
        $response->assertJsonStructure([]);
    }


    #[Test]
    public function show_behaves_as_expected(): void
    {
        $personaje = Personaje::factory()->create();

        $response = $this->get(route('personajes.show', $personaje));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonajeController::class,
            'update',
            \App\Http\Requests\PersonajeUpdateRequest::class
        );
    }

    #[Test]
    public function update_behaves_as_expected(): void
    {
        $personaje = Personaje::factory()->create();
        $nombre = fake()->word();
        $nivel = fake()->numberBetween(-10000, 10000);
        $clase = fake()->word();
        $raza = fake()->word();
        $aliniamiento = fake()->word();
        $historia = fake()->text();

        $response = $this->put(route('personajes.update', $personaje), [
            'nombre' => $nombre,
            'nivel' => $nivel,
            'clase' => $clase,
            'raza' => $raza,
            'aliniamiento' => $aliniamiento,
            'historia' => $historia,
        ]);

        $personaje->refresh();

        $response->assertOk();
        $response->assertJsonStructure([]);

        $this->assertEquals($nombre, $personaje->nombre);
        $this->assertEquals($nivel, $personaje->nivel);
        $this->assertEquals($clase, $personaje->clase);
        $this->assertEquals($raza, $personaje->raza);
        $this->assertEquals($aliniamiento, $personaje->aliniamiento);
        $this->assertEquals($historia, $personaje->historia);
    }


    #[Test]
    public function destroy_deletes_and_responds_with(): void
    {
        $personaje = Personaje::factory()->create();

        $response = $this->delete(route('personajes.destroy', $personaje));

        $response->assertNoContent();

        $this->assertModelMissing($personaje);
    }
}
