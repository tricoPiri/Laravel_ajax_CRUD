<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('alumno');
});

Route::get('consultar', [alumnosController::class,'consultar'])->name('consultar.get');
Route::post('guardar', [alumnosController::class,'guadar'])->name('guardar.post');
Route::delete('eliminar', [alumnosController::class,'eliminar'])->name('eliminar.delete');
Route::get('obtenerAlumno', [alumnosController::class, 'obtenerAlumno'])->name('obtenerAlumno.get');
