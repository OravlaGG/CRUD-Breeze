<div class="grid grid-cols-1 gap-4">

    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" class="w-full border rounded"
               value="{{ old('nombre', $personaje->nombre ?? '') }}">
    </div>

    <div>
        <label>Nivel</label>
        <input type="number" name="nivel" class="w-full border rounded"
               value="{{ old('nivel', $personaje->nivel ?? '') }}">
    </div>

    <div>
        <label>Clase</label>
        <input type="text" name="clase" class="w-full border rounded"
               value="{{ old('clase', $personaje->clase ?? '') }}">
    </div>

    <div>
        <label>Raza</label>
        <input type="text" name="raza" class="w-full border rounded"
               value="{{ old('raza', $personaje->raza ?? '') }}">
    </div>

    <div>
        <label>Alineamiento</label>
        <input type="text" name="aliniamiento" class="w-full border rounded"
               value="{{ old('aliniamiento', $personaje->aliniamiento ?? '') }}">
    </div>

    <div>
        <label>Historia</label>
        <textarea name="historia" class="w-full border rounded" rows="5">
            {{ old('historia', $personaje->historia ?? '') }}
        </textarea>
    </div>

</div>
