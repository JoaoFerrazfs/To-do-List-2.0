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

Route::view('/perfil', 'client.perfil');
Route::view('/criarnota', 'client.newNote');

Route::post('/criarnota/salvar',[NoteController::class,'store']);
Route::post('/minhanota/editar',[NoteController::class,'update']);
Route::get('/minhanota/{id}',[NoteController::class,'myNote']);
Route::delete('/minhanota/apagar/{id}',[NoteController::class,'destroy']);
Route::get('/dashboard',[NoteController::class,'index']);
Route::get('/mydashboard',[NoteController::class,'index']);





require __DIR__.'/auth.php';
