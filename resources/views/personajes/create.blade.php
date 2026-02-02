<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Crear Personaje
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            <form action="{{ route('personajes.store') }}" method="POST">
                @csrf

                @include('personajes.form')

                <button class="bg-blue-600 text-black px-4 py-2 rounded mt-4">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
