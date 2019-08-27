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

// Rutas estaticas de momento
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/articulos', function () {
    return view('products');
})->name('products');

Route::get('/acerca-de', function () {
    return view('about');
})->name('about');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/inventario/registrar', function () {
    return view('inventory');
})->name('inventory');

Route::get('/admin/usuarios/registrar', function () {
    return view('users/create');
})->name('create');

Route::get('/admin/usuarios', function () {
    return view('users/consultusers');
})->name('consult');





//Rutas con controller

Route::get('/admin/proveedores', 'SupplierController@index')->name('consultsupplier');
Route::get('/admin/proveedores/registrar', 'SupplierController@create')->name('consultsuppliercreate');

Route::resource('supplier', 'SupplierController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
