<h1>Editar área</h1>
<form method="POST" action="{{ route('areas.update', $area) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $area->nombre }}" required>
    <button type="submit">Actualizar</button>
</form>