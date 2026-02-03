<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-[#F8D5B5]">
            {{ $personaje->nombre }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded-lg shadow p-6">

            <p><strong>Clase:</strong> {{ $personaje->clase }}</p>
            <p><strong>Raza:</strong> {{ $personaje->raza }}</p>
            <p><strong>Nivel:</strong> {{ $personaje->nivel }}</p>
            <p><strong>Alineamiento:</strong> {{ $personaje->aliniamiento }}</p>

            <p class="mt-4 font-semibold">Historia:</p>
            <p>{{ $personaje->historia }}</p>

            <a href="{{ route('personajes.index') }}"
               class="mt-4 inline-block text-[#D32430] hover:text-[#582D30] font-semibold">
                Volver
            </a>

        </div>
    </div>
</x-app-layout>
