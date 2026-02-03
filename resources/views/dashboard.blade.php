<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-serif text-[#F8D5B5] tracking-wide">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-[#582D30] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Tarjeta de bienvenida --}}
            <div class="bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-serif text-[#582D30] mb-2 tracking-wide font-semibold">
                    Bienvenido aventurero
                </h3>
                <p class="text-[#582D30]">
                    {{ __("You're logged in!") }}
                </p>
            </div>

            {{-- Acceso al CRUD de Personajes --}}
            <div class="bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-serif text-[#582D30] mb-4 tracking-wide font-semibold">
                    Gestión de Personajes
                </h3>

                <p class="text-[#582D30] mb-4">
                    Administra tus héroes, villanos y criaturas del reino.
                </p>

                <a href="{{ route('personajes.index') }}"
                   class="inline-block bg-[#D32430] text-[#FFEFF4] px-5 py-2 rounded border border-[#BBBCAC] hover:bg-[#582D30] hover:text-[#F8D5B5] transition font-semibold tracking-wide shadow">
                    Ir al Bestiario de Personajes
                </a>
            </div>

            {{-- Sección futura opcional --}}
            <div class="bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-serif text-[#582D30] mb-4 tracking-wide font-semibold">
                    Próximas funciones
                </h3>
                <p class="text-[#582D30]">
                    Aquí podrás añadir módulos como inventarios, campañas, hechizos o bestiarios completos.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
