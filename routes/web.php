<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::resource('autores', AutorController::class);
Route::resource('libros', LibroController::class);
