@extends('layouts.app')

@section('content')
    <h1>Detalles del Libro</h1>

    <p><strong>Título:</strong> {{ $libro->titulo }}</p>
    <p><strong>Autor:</strong> {{ $libro->autor->nombre }}</p>

    <a href="{{ route('libros.index') }}">Volver a la lista</a>
@endsection
