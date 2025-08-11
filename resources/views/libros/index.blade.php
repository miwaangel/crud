@extends('layouts.app')

@section('content')
    <h1>Lista de Libros</h1>
    <a href="{{ route('libros.create') }}">Crear nuevo libro</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor->nombre }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro->id) }}">Ver</a>
                        <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection