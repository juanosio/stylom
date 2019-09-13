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


Route::get('/profile', function () {
    return view('profile');
})->name('profile');


//Rutas con controller
//proveedores

// Route::get('/admin/proveedores', 'SupplierController@index')->name('suppliers.index');
// Route::get('/admin/proveedores/registrar', 'SupplierController@create')->name('suppliers.create');
// Route::post('/admin/proveedores/store', 'SupplierController@store')->name('suppliers.store');

//materiaprima

// Route::get('/admin/materia-prima', 'MaterialController@index')->name('materials.index');
// Route::get('/admin/materia-prima/registrar', 'MaterialController@create')->name('materials.create');
// Route::post('/admin/materia-prima/store', 'MaterialController@store')->name('materials.store');

//productos

//Route::get('/admin/productos', 'ProductController@index')->name('products.index');
//Route::get('/admin/productos/registrar', 'ProductController@create')->name('products.create');
//Route::post('/admin/productos/store', 'ProductController@store')->name('products.store');




Auth::routes();

Route::get('backup', 'BackupController@index');
Route::get('backup/create', 'BackupController@create');
Route::get('backup/download/{file_name}', 'BackupController@download');
Route::get('backup/delete/{file_name}', 'BackupController@delete');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('materia-proveedores/pdf', 'MaterialSupplierController@pdf')->name('materialsupplier.pdf');


Route::resource('empleados','WorkerController');
Route::resource('productos','ProductController');
Route::resource('proveedores','SupplierController');

Route::resource('materias-primas','MaterialController');
Route::resource('materia-proveedores','MaterialSupplierController');
Route::resource('categorias','CategoryController');

