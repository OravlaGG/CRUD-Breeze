<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-serif text-yellow-400 tracking-wide drop-shadow-lg">
            Editar Personaje
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-red-900/70 border border-yellow-600 shadow-lg shadow-yellow-500/20 rounded-lg p-6">

            <form action="{{ route('personajes.update', $personaje) }}" method="POST">
                @csrf
                @method('PUT')

                @include('personajes.form')

                <button class="mt-4 bg-red-800 border border-yellow-500 text-yellow-300 px-4 py-2 rounded hover:bg-red-700 hover:text-yellow-200 transition font-semibold tracking-wide">
                    Actualizar
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
