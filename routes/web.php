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

Route::get('/', function(){
    return view('home');
});
Route::get('/panel', 'Admin\AdminController@index')->name('admin');
Route::resource('panel/categorias','Admin\CategoriasController');
Route::resource('panel/galleryproductos','Admin\GalleryProductosController');
Route::resource('panel/categoriaproductos','Admin\CategoriasProductosController');
Route::resource('panel/productos','Admin\ProductosController');
Route::resource('panel/roles','Admin\RolesController');
Route::resource('panel/usuarios','Admin\UsuariosController');