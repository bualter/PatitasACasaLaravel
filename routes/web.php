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

//Route::get('/admin/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/mascotas', 'AdminMascotas@index')->name('lista-mascotas');

Route::get('/admin/mascotas/nuevo', 'AdminMascotas@nuevo')->name('nuevo-mascota');
Route::post('/admin/mascotas/nuevo', 'AdminMascotas@crear');
Route::get('/admin/mascotas/{mascota}/editar', 'AdminMascotas@editar')->name('editar-mascota');
Route::put('/admin/mascotas/{mascota}/editar', 'AdminMascotas@guardar');
Route::delete('/admin/mascotas/{mascota}/eliminar', 'AdminMascotas@eliminar')->name('eliminar-mascota');

Route::get('/', 'Front@home')->name('inicio');;
Route::get('/mascotas/{mascota}', 'Front@verMascota')->name('ver-mascota');

Route::get('/mascotas-todas', 'AdminMascotas@listarTodas');
Route::get('/perros', 'AdminMascotas@listarPerros');
Route::get('/gatos', 'AdminMascotas@listarGatos');
Route::get('/otros', 'AdminMascotas@listarOtros');

Route::get('/preguntas', function () {
    return view('preguntasFrecuentes');
});

Route::get('/admin', 'HomeController@cosasDeAdmin')->middleware('auth', 'role:admin');

Route::get('/mascota/{id}', 'AdminMascotas@verMascota');

Route::get('/perfil', 'AdminMascotas@verPerfil');


Route::get('/footer', function () {
   return View::make('footer-comun');
});

Route::get('/header', function () {
   return View::make('header-comun');
});




/*

Route::get('/mascotas-todas', function () {
    return view('mascotas-todas');
});
Route::get('/perros', function () {
    return view('perros');
});

Route::get('/gatos', function () {
    return view('gatos');
});

Route::get('/otros', function () {
    return view('otros');
});
*/
