<div class="grid grid-cols-1 gap-4">

    <div>
        <label class="font-semibold">Nombre</label>
        <input type="text" name="nombre"
               class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]"
               value="{{ old('nombre', $personaje->nombre ?? '') }}">
    </div>

    <div>
        <label class="font-semibold">Nivel</label>
        <input type="number" name="nivel"
               class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]"
               value="{{ old('nivel', $personaje->nivel ?? '') }}">
    </div>

    <div>
        <label class="font-semibold">Clase</label>
        <input type="text" name="clase"
               class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]"
               value="{{ old('clase', $personaje->clase ?? '') }}">
    </div>

    <div>
        <label class="font-semibold">Raza</label>
        <input type="text" name="raza"
               class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]"
               value="{{ old('raza', $personaje->raza ?? '') }}">
    </div>

    <div>
        <label class="font-semibold">Alineamiento</label>
        <input type="text" name="aliniamiento"
               class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]"
               value="{{ old('aliniamiento', $personaje->aliniamiento ?? '') }}">
    </div>

    <div>
        <label class="font-semibold">Historia</label>
        <textarea name="historia" rows="5"
                  class="w-full bg-[#FFEFF4] text-[#582D30] border border-[#BBBCAC] rounded p-2 focus:ring-2 focus:ring-[#D32430]">{{ old('historia', $personaje->historia ?? '') }}</textarea>
    </div>

</div>
