<?php

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
Route::get('/lista-persona', function () {
    return 'este es el formulario persona';
});
Route::get('/formulario-persona/{nombre?}/{edad?}', function ($nombre = "sss", $edad = null) {
    // return view('persona', array(
    //     "nombre" => $nombre
    // ));
    return view('persona')
        ->with('nombre', $nombre)
        ->with('edad', $edad);
})
    ->where([
        'nombre' => '[A-Za-z]+',
        'edad' => '[0-9]+',
    ]);
Route::get('/ejemplo/{nombre?}/{edad?}',
    function ($nombre = "Ximena", $edad = null) {
        return view('paginas.ejemplo')
            ->with('nombre', $nombre)
            ->with('edad', $edad)
            ->with('frutas', array('Manzana', 'Sandia', 'Mandarina', 'Piña', 'Mango', 'Guayaba', 'Kiwi', 'Carambola', 'Pomelo'));
    })->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+',
]);
Route::get('/test', function () {
    return view('test');
});
