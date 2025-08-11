@extends('layouts.app')

@section('content')
    <h1>Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="{{ $libro->titulo }}" required>

        <label for="autor_id">Autor:</label>
        <select name="autor_id" required>
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}" {{ $autor->id == $libro->autor_id ? 'selected' : '' }}>
                    {{ $autor->nombre }}
                </option>
            @endforeach
        </select>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('libros.index') }}">Volver</a>
@endsection
