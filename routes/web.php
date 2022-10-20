<?php

use App\Http\Livewire\Cantones;
use App\Http\Livewire\Edificios;
use App\Http\Livewire\Marcas;
use App\Http\Livewire\Modelos;
use App\Http\Livewire\Provincias;
use App\Http\Livewire\Tipos;
use App\Http\Livewire\Unidades;
use Illuminate\Support\Facades\Route;

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

Route::get('provincias', Provincias::class)->name('provincias');
Route::get('cantones', Cantones::class)->name('cantones');
Route::get('edificios', Edificios::class)->name('edificios');
Route::get('unidades', Unidades::class)->name('unidades');

Route::get('marcas', Marcas::class)->name('marcas');
Route::get('tipos', Tipos::class)->name('tipos');
Route::get('modelos',Modelos::class)->name('modelos');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
