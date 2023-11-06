<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/home/{name?}', function ($name="usuario") {
    return view('home',['name' => $name]);
});
Route::get('/saludo/{nombre}/{apellido?}', function (string $nombre, string $apellido = "") {
    return 'Hola ' . $nombre . ' ' . $apellido;
})->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+']);

Route::get('/suma/{numero1}/{numero2}', function (string $numero1, string $numero2 = "") {
    return 'El resultado de la suma de ' . $numero1 . ' + ' . $numero2 . ' es: ' . $numero1 + $numero2;
})->where(['numero1' => '[-+]?[0-9]+', 'numero2' => '[-+]?[0-9]+']);

Route::get('/user',[UserController::class,'index']);
