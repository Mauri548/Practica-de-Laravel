<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home'); //si vamos a retornar una pagina con poca información

// Esta ruta tiene las 7 rutas y tambien se puede pasar 2 parametros como
//->name('cliente'); El nombre que va a mostrar la ruta
//->parameters(['cliente' => 'id']); el nombre del parametro que se pasara en el controlador
Route::resource('cliente', 'ClienteController');

// Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
// Route::get('/cliente/crear', 'ClienteController@create')->name('cliente.create');
// Route::get('/cliente/{cliente}/editar', 'ClienteController@edit')->name('cliente.edit');
// Route::patch('/cliente/{cliente}', 'ClienteController@update')->name('cliente.update');
// Route::post('/cliente', 'ClienteController@store')->name('cliente.store');
// Route::get('/cliente/{cliente}', 'ClienteController@show')->name('cliente.detalle');
// Route::delete('/cliente/{cliente}', 'ClienteController@destroy')->name('cliente.destroy');


Route::get('/pagos', 'PagoController@index')->name('pago.index');
Route::get('/pagos/{cliente}', 'PagoController@create')->name('pago.create');
Route::post('/pagos/{cliente}', 'PagoController@store')->name('pago.store');
Route::get('/pago/{pago}/editar', 'PagoController@edit')->name('pago.edit');
Route::patch('/pago/{pago}', 'PagoController@update')->name('pago.update');
Route::delete('/pagos/{pago}','PagoController@destroy')->name('pago.destroy');

