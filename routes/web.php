<?php

use App\Http\Controllers\Agentie_De_TurismController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//INDEX
Route::get('/vacante',[Agentie_De_TurismController::class, 'index'])->name('vacante.index');
//CREATE
Route::get('/vacante/create', [Agentie_De_TurismController::class, 'create'])->name('vacante.create');
//STORE
Route::post('/vacante', [Agentie_De_TurismController::class, 'store'])->name('vacante.store');
//SHOW
Route::get('/vacante/{vacanta}',[Agentie_De_TurismController::class, 'show'])->name('vacante.show');
//EDIT
Route::get('/vacante/{vacanta}/edit', [Agentie_De_TurismController::class, 'edit'])->name('vacante.edit');
//UPDATE
Route::put('/vacante/{vacanta}',[Agentie_De_TurismController::class, 'update'])->name('vacante.update');
//DELETE
Route::delete('vacante/{vacanta}',[Agentie_De_TurismController::class, 'destroy'])->name('vacante.destroy');

