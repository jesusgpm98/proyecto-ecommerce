<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Providers\RouteServiceProvider;

Route::get('/producto', 'PagesController@producto')->name('producto');

Auth::routes();

Route::resource('/miprods', 'MiprodController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('quienes', function () {
return view('quienes');
})->name('quienes');


Route::get('politicas', function () {
    return view('politicas');
    })->name('politicas');

Route::get('producto', function () {
    return view('producto');
    })->name('producto');

Route::get('ejemplo', function () {
    return view('ejemplo');
    })->name('ejemplo');

Route::get('ejemplo2', function () {
    return view('ejemplo2');
    })->name('ejemplo2');

Route::get('mimenu', function () {
    return view('mimenu');
    })->name('mimenu');

Route::get('contenido', function () {
    return view('contenido.contenido');
    })->name('contenido');



// ------------------------------------------------------------------------

Route::get('/producto/crear', 'MiprodController@create')->name('producto.create');
Route::post('/producto/save', 'MiprodController@save')->name('producto.save');

Route::get('/image/file/{filename}', 'MiprodController@getImage')->name('image.file');
Route::get('/producto/todos', 'MiprodController@showProductos')->name('producto.show');

Route::get('/admin/usuarios', 'UserController@show')->name('usuarios.show');

Route::get('/admin/usuarios/edit/{id}', 'UserController@edit')->name('usuarios.edit');
Route::post('/admin/usuarios/{id}', 'UserController@update')->name('usuarios.update');

Route::get('/logout', 'UserController@logout')->name('logout');

// ------------------------------------------------------------------------

Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');
Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria');

Route::get('/articulo', 'ArticuloController@index');
Route::post('/articulo/registrar', 'ArticuloController@store');
Route::put('/articulo/actualizar', 'ArticuloController@update');
Route::put('/articulo/desactivar', 'ArticuloController@desactivar');
Route::put('/articulo/activar', 'ArticuloController@activar');

Route::get('/cliente', 'ClienteController@index');
Route::post('/cliente/registrar', 'ClienteController@store');
Route::put('/cliente/actualizar', 'ClienteController@update');

Route::get('/proveedor', 'ProveedorController@index');
Route::post('/proveedor/registrar', 'ProveedorController@store');
Route::put('/proveedor/actualizar', 'ProveedorController@update');

Route::get('/rol', 'RolController@index');
Route::get('/rol/selectRol', 'RolController@selectRol');

Route::get('/user', 'UserController@index');
Route::post('/user/registrar', 'UserController@store');
Route::put('/user/actualizar', 'UserController@update');
Route::put('/user/desactivar', 'UserController@desactivar');
Route::put('/user/activar', 'UserController@activar');
