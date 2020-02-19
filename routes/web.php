

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

Route::get('/', 'PrincipalController@index');
Auth::routes();


Route::get('cesta/pagar', function () {
    return view('paginaDePago');
});
/*
|--------------------------------------------------------------------------
| CRUD Usuario
|--------------------------------------------------------------------------
|
| Las rutas relacionadas de los usuarios
|
*/
Route::group(['prefix' => 'usuario'], function(){

    Route::get('perfil/{id}', function ($id) {
        return view('usuarios.perfil')->with('id',$id);
    });
    
    Route::get('perfil/{id}/historial/', 'UserController@historialUsuario');



    Route::get('registro/', function () {
        return view('auth.register');
    });
    Route::get('login/', function () {
        return view('auth.login');
    });

    //LISTAR USUARIOS
    Route::get('listar/', function () {
        return view('usuarios.listar-usuarios');
    });
    Route::get('listar/mostrar/', 'UserController@listarUsuarios');

});


/*
|--------------------------------------------------------------------------
| CRUD Producto
|--------------------------------------------------------------------------
|
| Las rutas relacionadas de los productos
|
*/
Route::group(['prefix' => 'producto'], function(){

    Route::get('detalle/{id}', function ($id) {
        return view('productos.detalle')->with('id',$id);
    });

    //LISTAR PRODUCTOS
    Route::get('listar/', function () {
        return view('productos.listar-productos');
    });
    Route::get('listar/mostrar/', 'ProductController@listarProductos');

    Route::get('listar/modificar/{id}/{atributo}/{valor}', 'ProductController@modificarProducto');

    Route::get('listar/{categoria}', 'ProductController@listarProductosCategoria');



});



Route::get('cesta/',function(){
    return view('cesta');
});