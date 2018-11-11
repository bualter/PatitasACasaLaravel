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

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/mascotas', 'AdminMascotas@index')->name('lista-mascotas');

Route::get('/admin/mascotas/nuevo', 'AdminMascotas@nuevo')->name('nuevo-mascota');
Route::post('/admin/mascotas/nuevo', 'AdminMascotas@crear');
Route::get('/admin/mascotas/{mascota}/editar', 'AdminMascotas@editar')->name('editar-mascota');
Route::put('/admin/mascotas/{mascota}/editar', 'AdminMascotas@guardar');
Route::delete('/admin/mascotas/{mascota}/eliminar', 'AdminMascotas@eliminar')->name('eliminar-mascota');