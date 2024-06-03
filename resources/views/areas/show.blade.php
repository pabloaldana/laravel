@extends('layouts.app')

@section('content')
<h1>{{ $area->nombre }}</h1>
<a href="{{ route('areas.edit', $area) }}">Editar</a>
<form method="POST" action="{{ route('areas.destroy', $area) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
@endsection