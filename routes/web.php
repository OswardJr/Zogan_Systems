<?php

Route::get('/', function () {
     return view('index');
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

Route::resource('reparaciones', 'ReparacionesController');

Route::resource('recepciones', 'RecepcionesController');

Route::resource('citas', 'CitasController');

Route::get('/listprop', 'PropietariosController@index');

Route::get('/listope', 'OperariosController@index');

Route::get('/listasegu', 'AseguradorasController@index');

Route::get('/listcorre', 'CorredoresController@index');

Route::get('/listanalis', 'AnalistasController@index');

Route::get('/listvehi', 'PropietariosController@index');

Route::get('/listorden', 'ReparacionesController@on');

Route::get('/listrepuesto', 'RepuestosController@index');

Route::get('/vehiculos/create', 'VehiculosController@create');

Route::get('/vehiculos/findRif', 'VehiculosController@findRif');

Route::get('/propietarios/create', 'PropietariosController@create');

Route::get('/propietarios/findRif', 'PropietariosController@findRif');

Route::get('/reparaciones', 'ReparacionesController@index');

Route::get('/reparaciones/create', 'ReparacionesController@create');

Route::get('/reparaciones/findProduct', 'ReparacionesController@findProduct');

Route::post('/reparaciones/save', 'ReparacionesController@save');

Route::resource('imagenes', 'ImagenesController');

Route::resource('images-rev', 'ImageRevController');

Route::resource('revisiones', 'RevisionesController');

Route::get('revision/{id}', 'RevisionesController@index');

Route::post('upload', 'UploadController@upload');

Route::get('mivehiculo/{placa}', 'UploadController@mivehiculo');

Route::get('getimages/{placa}', 'UploadController@getImages');

Route::get('/ruta', 'ReparacionesController@index');

Route::get('/home_ruta', 'ReparacionesController@me');

Route::get('/ruta', 'ReparacionesController@index');

Auth::routes();