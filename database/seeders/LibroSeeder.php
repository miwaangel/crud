<?php


namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    public function run()
    {
        Libro::create([
            'titulo' => 'Cien años de soledad',
            'autor_id' => 1 // Gabriel García Márquez
        ]);
        Libro::create([
            'titulo' => 'La casa de los espíritus',
            'autor_id' => 2 // Isabel Allende
        ]);
        Libro::create([
            'titulo' => 'La ciudad y los perros',
            'autor_id' => 3 // Mario Vargas Llosa
        ]);
    }
}

