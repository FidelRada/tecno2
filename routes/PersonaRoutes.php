<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PersonaController::class, 'index'])->name('Persona.index');
Route::post('/store', [PersonaController::class, 'store'])->name('Persona.store');
Route::get('/persona/editar/{id}', [PersonaController::class, 'editar'])->name('Persona.editar');
Route::put('/persona/update/{id}', [PersonaController::class, 'update'])->name('Persona.update');
Route::delete('/persona/delete/{id}', [PersonaController::class, 'delete'])->name('Persona.eliminar');
Route::get('/persona/gettrucho/', [PersonaController::class, 'getTrucho'])->name('Persona.gettrucho');

Route::get('/error', function () {
    return view('error');
})->name("error");