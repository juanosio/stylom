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



Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/', function () {
  //  return view('welcome');
//})->name('welcome');

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
//
/**************************************************************\
*           RESPALDO Y RESTAURACION DE LA BASE DE DATOS        *
/**************************************************************/
Route::get("backup", "BackupController@index")->name("backup.index");

Route::get('backup/create', 'BackupController@create')->name('backup.create');

Route::get('backup/restore/{filename}', 'BackupController@restore')->name('backup.restore');

Route::get('backup/download/{filename}', 'BackupController@download')->name('backup.download');

Route::get('backup/delete/{filename}', 'BackupController@delete')->name('backup.delete');




Auth::routes();
Route::post('registro', 'UserController@store')->name('user.store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('inicio');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('carrito', 'CartShopController@index')->name('carrito');



//PDF
Route::get('materia-proveedores/pdf', 'MaterialSupplierController@pdf')->name('materialsupplier.pdf');
Route::get('productos/pdf', 'ProductController@pdf')->name('products.pdf');
Route::get('materias-primas/pdf', 'MaterialController@pdf')->name('material.pdf');


//Filtros
Route::get('/articulos-productos', 'FilterController@welcome')->name('welcome.filter');

Route::get('articulos', 'FilterController@index')->name('all.filter');
Route::get('articulos/filtro/mujer', 'FilterController@women')->name('women.filter');
Route::get('articulos/filtro/hombre', 'FilterController@men')->name('men.filter');
Route::get('articulos/filtro/niños', 'FilterController@kids')->name('kids.filter');
Route::get('articulos/filtro/vestidos', 'FilterController@vestidos')->name('vestidos.filter');
Route::get('articulos/filtro/pantalones', 'FilterController@pantalones')->name('pantalones.filter');
Route::get('articulos/filtro/camisas', 'FilterController@camisas')->name('camisas.filter');
Route::get('articulos/filtro/menor', 'FilterController@lowertohigher')->name('lowertohigher.filter');

Route::get('articulos/filtro/mayor', 'FilterController@highertolower')->name('highertolower.filter');
Route::get('articulos/filtro/rango1', 'FilterController@range1')->name('range1.filter');
Route::get('articulos/filtro/rango2', 'FilterController@range2')->name('range2.filter');
Route::get('articulos/filtro/rango3', 'FilterController@range3')->name('range3.filter');
Route::get('articulos/filtro/rango4', 'FilterController@range4')->name('range4.filter');


Route::get('backup/restore/{precio?}', 'BackupController@restore')->name('filter.yuca');

Route::resource('empleados','WorkerController');
Route::resource('productos','ProductController');
Route::resource('proveedores','SupplierController');
Route::resource('bitacoras','BitacoraController');




Route::resource('materias-primas','MaterialController');
Route::resource('materia-proveedores','MaterialSupplierController');
Route::resource('categorias','CategoryController');
Route::resource('compra','CompraController');
Route::resource('purchase','PurchaseController');



Route::post('/aprobar', 'CompraController@aprobar')->name('ventas.aprobar');
Route::post('/rechazar', 'CompraController@rechazar')->name('ventas.rechazar');


