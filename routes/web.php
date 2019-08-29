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

//Rutas admin

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/usuarios/registrar', function () {
    return view('users/create');
})->name('create');

Route::get('/admin/usuarios', function () {
    return view('users/consultusers');
})->name('consult');

Route::get('/admin/usuarios', function () {
    return view('users/consultusers');
})->name('consult');


//Rutas con controller
//proveedores

Route::get('/admin/proveedores', 'SupplierController@index')->name('suppliers.index');
Route::get('/admin/proveedores/registrar', 'SupplierController@create')->name('suppliers.create');
Route::post('/admin/proveedores/store', 'SupplierController@store')->name('suppliers.store');

//materiaprima

Route::get('/admin/materia-prima', 'MaterialController@index')->name('materials.index');
Route::get('/admin/materia-prima/registrar', 'MaterialController@create')->name('materials.create');
Route::post('/admin/materia-prima/store', 'MaterialController@store')->name('materials.store');

//productos

//Route::get('/admin/productos', 'ProductController@index')->name('products.index');
//Route::get('/admin/productos/registrar', 'ProductController@create')->name('products.create');
//Route::post('/admin/productos/store', 'ProductController@store')->name('products.store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('empleados','WorkerController');
Route::resource('productos','ProductController');
