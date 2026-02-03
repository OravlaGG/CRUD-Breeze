<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-[#F8D5B5]">
            Personajes
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('personajes.create') }}"
               class="bg-[#D32430] text-[#FFEFF4] px-4 py-2 rounded border border-[#BBBCAC] hover:bg-[#582D30] hover:text-[#F8D5B5] transition font-semibold">
                Crear Personaje
            </a>

            <div class="mt-6 bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded-lg shadow p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-[#BBBCAC]">
                            <th class="py-2 text-left">Nombre</th>
                            <th class="py-2 text-left">Clase</th>
                            <th class="py-2 text-left">Nivel</th>
                            <th class="py-2 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personajes as $personaje)
                            <tr class="border-b border-[#BBBCAC]">
                                <td class="py-2">{{ $personaje->nombre }}</td>
                                <td>{{ $personaje->clase }}</td>
                                <td>{{ $personaje->nivel }}</td>
                                <td class="flex gap-3 py-2">

                                    <a href="{{ route('personajes.show', $personaje) }}"
                                       class="text-[#D32430] hover:text-[#582D30] font-semibold">
                                        Ver
                                    </a>

                                    <a href="{{ route('personajes.edit', $personaje) }}"
                                       class="text-[#582D30] hover:text-[#D32430] font-semibold">
                                        Editar
                                    </a>

                                    <form action="{{ route('personajes.destroy', $personaje) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-[#D32430] hover:text-[#582D30] font-semibold"
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
