@extends('layouts.app')

@section('content')
    <h1>Crear Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="autor_id">Autor:</label>
        <select name="autor_id" required>
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('libros.index') }}">Volver</a>
@endsection
