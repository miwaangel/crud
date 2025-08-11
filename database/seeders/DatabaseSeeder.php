<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
use App\Models\Libro;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
    $this->call(AutorSeeder::class);
    $this->call(LibroSeeder::class);
    }

}
