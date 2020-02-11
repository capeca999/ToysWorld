<?php

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

/*
|--------------------------------------------------------------------------
| Rutas de Usuario
|--------------------------------------------------------------------------
|
| Las rutas de los usuarios
|
*/

Route::group(['prefix' => 'usuario'], function(){

    Route::get('perfil/{id}', function ($id) {
        return view('usuarios.perfil')->with('id',$id);
    });
    Route::get('registro/', function () {
        return view('usuarios.registro');
    });

});

Route::group(['prefix' => 'producto'], function(){

    Route::get('detalle/{id}', function ($id) {
        return view('productos.detalle')->with('id',$id);
    });

    
    Route::get('listar/', function () {
        return view('productos.listar');
    });

});