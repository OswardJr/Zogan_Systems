<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home_services', function () {
    return view('home_services');
});

Route::get('/home_repuestos', function () {
    return view('home_repuestos');
});

Route::get('/home_ruta', function () {
    return view('home_ruta');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('almacenes', 'AlmacenesController');

Route::resource('aseguradoras', 'AseguradorasController');

Route::resource('materiales', 'MaterialesController');

Route::resource('analistas', 'AnalistasController');

Route::resource('operarios', 'OperariosController');

Route::resource('repuestos', 'RepuestosController');

Route::resource('vehiculos', 'VehiculosController');

Route::resource('propietarios', 'PropietariosController');

Route::resource('corredores', 'CorredoresController');

Route::resource('ordenes', 'OrdenesController');

Route::resource('citas', 'CitasController');

Route::get('/listprop', 'PropietariosController@index');

Route::get('/listope', 'OperariosController@index');

Route::get('/listasegu', 'AseguradorasController@index');

Route::get('/listcorre', 'CorredoresController@index');

Route::get('/listvehi', 'PropietariosController@index');

Route::get('/vehiculos/create', 'VehiculosController@create');

Route::get('/vehiculos/findRif', 'VehiculosController@findRif');

Route::get('/propietarios/create', 'PropietariosController@create');

Route::get('/propietarios/findRif', 'PropietariosController@findRif');

Auth::routes();