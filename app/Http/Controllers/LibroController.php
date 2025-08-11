<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    // Mostrar todos los libros
    public function index()
    {
        $libros = Libro::with('autor')->get(); // Carga los autores relacionados
        return view('libros.index', compact('libros'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        $autores = Autor::all();
        return view('libros.create', compact('autores'));
    }

    // Guardar un nuevo libro
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor_id' => 'required|exists:autores,id',
        ]);

        Libro::create([
            'titulo' => $request->titulo,
            'autor_id' => $request->autor_id,
        ]);

        return redirect()->route('libros.index')->with('success', 'Libro creado correctamente.');
    }

    // Mostrar detalles de un libro
    public function show($id)
    {
        $libro = Libro::with('autor')->findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $autores = Autor::all();
        return view('libros.edit', compact('libro', 'autores'));
    }

    // Actualizar libro
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor_id' => 'required|exists:autores,id',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update([
            'titulo' => $request->titulo,
            'autor_id' => $request->autor_id,
        ]);

        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente.');
    }

    // Eliminar libro
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente.');
    }
}
