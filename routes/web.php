<?php
Route::get('/home','PrincipalController@index' );
Route::get('/', 'PrincipalController@index');

Auth::routes();

Route::get('/productos/busqueda', function () {
    return view('search');
});


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

    Route::get('perfil/', function ($nif) {
        return view('usuarios.perfil')->with('nif',$nif);
    });
    
    Route::get('perfil/historial/', 'UserController@historialUsuario');

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

Route::get('/terminosYCondiciones/',function(){
    return view('terminosYCondiciones');
});

Route::get('/nuestroCompromiso/',function(){
    return view('nuestroCompromiso');
});

Route::get('/sobreNosotros/',function(){
    return view('sobreNosotros');
});

Route::get('/politicaDePrivacidad/',function(){
    return view('politicaDePrivacidad');
});
