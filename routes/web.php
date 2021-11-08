<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibreriaControl;
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

Route::get('/', [LibreriaControl::class, 'index'])->name('libros.index');
Route::get('mostrar/{libro}', [LibreriaControl::class, 'mostrar'])->name('libros.mostrar');

Route::get('libros/{libro}/edit', [LibreriaControl::class, 'edit'])->name('libros.edit');

Route::put('libros/{libro}', [LibreriaControl::class, 'update'])->name('libros.update');

Route::delete('libros/{libro}', [LibreriaControl::class, 'destroy'])->name('libros.destroy');

