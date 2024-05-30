<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestPersonalidad;
use App\Http\Controllers\LogoutController;



/* ----------------  */
//El cliente realiza una solicitud atraves del metodo get, el route le indica que vista mostrar

Route::get('/', function () {
    return view('index');
})->name('home');


//Route que solicita al controlador Register verificar el registro del ususario
Route::get('/register', [RegisterController::class,'show'])->name('register');

Route::post('/register',[RegisterController::class,'register']);

//Route que solicita al controlador login que funcion realizar
Route::get('/login',[LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index'] )->name('homePostulante');

//Controlador para la vista de Test de Personalidad
Route::get('/testPersonalidad',[TestPersonalidad::class,'show'])->name('testPersonalidad');
Route::post('/testPersonalidad',[TestPersonalidad::class,'revision']);

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');
