<?php

Route::get('/index', 'HomeController@index');

Route::get('/respaldo', 'RespaldosController@index');

Route::get('/', 'HomeController@index');

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

Route::resource('ayudantes', 'AyudantesController');

Route::resource('repuestos', 'RepuestosController');

Route::resource('areas', 'AreasController');

Route::resource('vehiculos', 'VehiculosController');

Route::resource('propietarios', 'PropietariosController');

Route::resource('corredores', 'CorredoresController');

Route::resource('reparaciones', 'ReparacionesController');

Route::resource('respaldos', 'RespaldosController');

Route::resource('recepciones', 'RecepcionesController');

Route::resource('usuarios', 'UserController');

Route::resource('citas', 'CitasController');

Route::resource('vehiculos', 'VehiculosController');

Route::get('/listusers', 'UserController@index');

Route::get('/resp', 'UserController@respaldo');

Route::get('/listprop', 'PropietariosController@index');

Route::get('/listope', 'OperariosController@index');

Route::get('/listayu', 'AyudantesController@index');

Route::get('/listars', 'AreasController@index');

Route::get('/listasegu', 'AseguradorasController@index');

Route::get('/listcorre', 'CorredoresController@index');

Route::get('/listanalis', 'AnalistasController@index');

Route::get('/listvehi', 'VehiculosController@index');

Route::get('/listorden', 'ReparacionesController@on');

Route::get('/listrepuesto', 'RepuestosController@index');

Route::get('/listareas', 'AreasController@index');

Route::get('/listusers', 'UserController@index');

Route::get('/listcitas', 'CitasController@index');

Route::get('/vehiculos/create', 'VehiculosController@create');

Route::get('/vehiculos/findRif', 'VehiculosController@findRif');

Route::get('/propietarios/create', 'PropietariosController@create');

Route::get('/usuarios/respaldo', 'UserController@respaldo');

Route::get('/propietarios/findRif', 'PropietariosController@findRif');

Route::get('/reparaciones', 'ReparacionesController@index');

Route::get('/reparaciones/create', 'ReparacionesController@create');

Route::post('/reparaciones/save', 'ReparacionesController@save');

Route::get('/reparaciones/create', 'ReparacionesController@create');

Route::resource('imagenes', 'ImagenesController');

Route::resource('images-rev', 'ImageRevController');

Route::resource('revisiones', 'RevisionesController');

Route::get('revision/{id}', 'RevisionesController@index');

Route::post('upload', 'UploadController@upload');



Route::resource('images-rec', 'ImageRecController');

Route::resource('recepciones', 'RecepcionesController');

Route::get('recepcion/{id}', 'RecepcionesController@index');

Route::post('carga', 'CargaController@upload');


Route::get('mivehiculo/{placa}', 'UploadController@mivehiculo');

Route::get('getimages/{placa}', 'UploadController@getImages');

Route::get('/ruta', 'ReparacionesController@index');

Route::get('/home_ruta', 'ReparacionesController@me');

Route::get('/home_services', 'VehiculosController@me');

Route::get('/home_repuestos', 'RepuestosController@index');

Route::get('/ruta', 'ReparacionesController@index');


// rutas para las busquedas
Route::get('vehiculos/getVehiculo/{id}', 'VehiculosController@getVehiculo');

Route::get('vehiculos/getAseguradora/{id}', 'VehiculosController@getAseguradora');

// pdf
Route::get('pdf/invoice', 'ReparacionesController@invoice');

Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ReparacionesController@htmltopdfview'));

Route::get('/downloadPDF/{id}','ReparacionesController@downloadPDF');

auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
