<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Personajes
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('personajes.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                Crear Personaje
            </a>

            <div class="mt-6 bg-white shadow-sm rounded-lg p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2">Nombre</th>
                            <th class="text-left py-2">Clase</th>
                            <th class="text-left py-2">Nivel</th>
                            <th class="text-left py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personajes as $personaje)
                            <tr class="border-b">
                                <td class="py-2">{{ $personaje->nombre }}</td>
                                <td>{{ $personaje->clase }}</td>
                                <td>{{ $personaje->nivel }}</td>
                                <td class="flex gap-2 py-2">
                                    <a href="{{ route('personajes.show', $personaje) }}"
                                       class="text-blue-600">Ver</a>

                                    <a href="{{ route('personajes.edit', $personaje) }}"
                                       class="text-yellow-600">Editar</a>

                                    <form action="{{ route('personajes.destroy', $personaje) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600"
                                                onclick="return confirm('¿Seguro?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
