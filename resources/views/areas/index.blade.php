@extends('layouts.app')

@section('content')
<h1>Áreas</h1>
<a href="{{ route('areas.create') }}">Crear nueva área</a>
<ul>
    @foreach($areas as $area)
    <li><a href="{{ route('areas.show', $area) }}">{{ $area->nombre }}</a></li>
    @endforeach
</ul>
@endsection