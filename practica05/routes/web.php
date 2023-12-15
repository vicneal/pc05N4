<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist',[UsuarioController::class,'index'])->name('listaUsuarios');
Route::get('/formuseradd', function () {
    return view('useradd');
})->name('formAgregarUsuario');
Route::post('/useradd',[UsuarioController::class,'store'])->name('agregarUsuario');
