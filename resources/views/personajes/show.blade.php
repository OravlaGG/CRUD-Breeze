<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ $personaje->nombre }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">

            <p><strong>Clase:</strong> {{ $personaje->clase }}</p>
            <p><strong>Raza:</strong> {{ $personaje->raza }}</p>
            <p><strong>Nivel:</strong> {{ $personaje->nivel }}</p>
            <p><strong>Alineamiento:</strong> {{ $personaje->aliniamiento }}</p>

            <p class="mt-4"><strong>Historia:</strong></p>
            <p>{{ $personaje->historia }}</p>

            <a href="{{ route('personajes.index') }}"
               class="mt-4 inline-block text-blue-600">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>
