@extends('layouts.app')

@section('content')
<h1>Crear nueva área</h1>
<form method="POST" action="{{ route('areas.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <button type="submit">Guardar</button>
</form>
@endsection