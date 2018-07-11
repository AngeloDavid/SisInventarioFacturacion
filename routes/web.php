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
Route::get('/Parametros','CategoryController@index')->name('category.index');

Route::get('/Proveedores','ProveedorController@index')->name('Proveedor.index');
Route::get('/Proveedor/new','ProveedorController@create');
Route::post('/Proveedor/store','ProveedorController@store');
Route::get('/Proveedor/{id}','ProveedorController@show')->where('id','[0-9]+')->name('Proveedor.show');
Route::put('/Proveedor/{id}/editar','ProveedorController@update');
Route::get('Companies', function () {
    return App\Proveedor::paginate(4);
});