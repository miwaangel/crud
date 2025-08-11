<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    public function run()
    {
        Autor::create([
            'nombre' => 'Gabriel García Márquez',
            'edad' => 87
        ]);
        Autor::create([
            'nombre' => 'Isabel Allende',
            'edad' => 80
        ]);
        Autor::create([
            'nombre' => 'Mario Vargas Llosa',
            'edad' => 88
        ]);
    }
}
