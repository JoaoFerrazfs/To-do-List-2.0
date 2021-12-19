<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::view('/perfil', 'client.perfil')->middleware('auth');
Route::view('/criarnota', 'client.newNote')->middleware('auth');

Route::post('/criarnota/salvar',[NoteController::class,'store'])->middleware('auth');
Route::post('/minhanota/editar',[NoteController::class,'update'])->middleware('auth');
Route::get('/minhanota/{id}',[NoteController::class,'myNote'])->middleware('auth');
Route::delete('/minhanota/apagar/{id}',[NoteController::class,'destroy'])->middleware('auth');
Route::get('/dashboard',[NoteController::class,'index'])->middleware('auth');
Route::get('/mydashboard',[NoteController::class,'index'])->middleware('auth');





require __DIR__.'/auth.php';
