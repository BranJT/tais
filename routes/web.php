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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ayuda ', function(){
	return View::make('PruebaHelper-web.index.html');
});

Route::get('/test ', function(){
	return view('getTest');
});
Route::get('/test2 ', function(){
	return view('Login2');
});

Route::resource('empresa','EmpresaController');

Route::get('/empresa/{empresa_id}/proveedor/','ProveedorController@index')->name('proveedor_index');
Route::get('/empresa/{empresa_id}/proveedor/create', 'ProveedorController@create');
Route::post('/empresa/{empresa_id}/proveedor/store', 'ProveedorController@store');
Route::get('/proveedor/edit/{id}', 'ProveedorController@edit');
Route::put('/proveedor/update/{id}', 'ProveedorController@update');
Route::delete('/proveedor/{id}','ProveedorController@destroy');

Route::get('/ajaxProveedor','ProveedorController@ajax');
Route::get('/ajaxConsumidor','ConsumidorController@ajax');

Route::get('/empresa/{empresa_id}/consumidor/','ConsumidorController@index')->name('consumidor_index');;
Route::get('/empresa/{empresa_id}/consumidor/create', 'ConsumidorController@create');
Route::post('/empresa/{empresa_id}/consumidor/store', 'ConsumidorController@store');
Route::get('/consumidor/edit/{id}', 'ConsumidorController@edit');
Route::put('/consumidor/update/{id}', 'ConsumidorController@update');
Route::delete('/consumidor/{id}','ConsumidorController@destroy');

Route::get('/empresa/{empresa_id}/proceso/','ProcesoController@index')->name('proceso_index');;
Route::get('/empresa/{empresa_id}/proceso/create', 'ProcesoController@create');
Route::post('/empresa/{empresa_id}/proceso/store', 'ProcesoController@store');
Route::get('/proceso/edit/{id}', 'ProcesoController@edit');
Route::put('/proceso/update/{id}', 'ProcesoController@update');
Route::delete('/proceso/{id}','ProcesoController@destroy');

Route::get('/empresa/{empresa_id}/subproceso/','SubprocesoController@index')->name('subproceso_index');;
Route::get('/empresa/{empresa_id}/subproceso/create', 'SubprocesoController@create');
Route::post('/empresa/{empresa_id}/subproceso/store', 'SubprocesoController@store');
Route::get('/subproceso/edit/{id}', 'SubprocesoController@edit');
Route::put('/subproceso/update/{id}', 'SubprocesoController@update');
Route::delete('/subproceso/{id}','SubprocesoController@destroy');

Route::get('/empresa/{empresa_id}/uNegocio/','UnidadNegocioController@index')->name('uNegocio_index');;
Route::get('/empresa/{empresa_id}/uNegocio/create', 'UnidadNegocioController@create');
Route::get('/empresa/{empresa_id}/uNegocio/{id}', 'UnidadNegocioController@show');
Route::post('/empresa/{empresa_id}/uNegocio/store', 'UnidadNegocioController@store');
Route::get('/uNegocio/edit/{id}', 'UnidadNegocioController@edit');
Route::put('/uNegocio/update/{id}', 'UnidadNegocioController@update');
Route::delete('/uNegocio/{id}','UnidadNegocioController@destroy');

Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/mapa/','MapaController@index')->name('mapa_index');
Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/mapa/create', 'MapaController@create');
Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/mapa/{id}', 'MapaController@show');
Route::post('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/mapa/store', 'MapaController@store');
Route::get('/mapa/edit/{id}', 'MapaController@edit');
Route::put('/mapa/update/{id}', 'MapaController@update');
Route::delete('/mapa/{id}','MapaController@destroy');

Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/matriz/','MatrizController@index')->name('matriz_index');
Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/matriz/create', 'MatrizController@create');
Route::get('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/matriz/{id}', 'MatrizController@show')->name('matriz_show');
Route::post('/empresa/{empresa_id}/uNegocio/{uNegocio_id}/matriz/store', 'MatrizController@store');
Route::get('/matriz/edit/{id}', 'MatrizController@edit');
Route::put('/matriz/update/{id}', 'MatrizController@update');
Route::delete('/matriz/{id}','MatrizController@destroy');

Route::get('/empresa/{empresa_id}/matriz/{id}/parametro','MatrizController@parametro')->name('parametro_index');
Route::get('/empresa/{empresa_id}/matriz/{id}/create', 'MatrizController@createParametro');
Route::post('/empresa/{empresa_id}/parametro/store', 'MatrizController@storeParametro');
Route::get('/matriz/editParametro/{id}', 'MatrizController@editParametro');
Route::delete('/parametro/{id}','MatrizController@destroyParametro');

Route::get('/matriz/{id}/editProceso', 'MatrizController@editProceso');
Route::put('/matriz/updateProceso/{id}', 'MatrizController@updateProceso');

Route::get('/matriz/{id}/editMatriz', 'MatrizController@editMatriz');
Route::put('/matriz/updateMatriz/{id}', 'MatrizController@updateMatriz');


Route::get('/pdf/matriz/{id}', 'MatrizController@pdf');
Route::get('/pdf/parametro/{id}', 'MatrizController@pdfParametro');
Route::get('/pdf/cadena/{id}', 'EmpresaController@pdf');
Route::get('/pdf/mapa/{id}', 'MapaController@pdf');

Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}', 'ProcesoPrioController@showPrincipal')->name('subprocesoPrio_show');


Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/showCarac/{pc_id}','ProcesoPrioController@showCarac')->name('carac_index');;
Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/createCarac','ProcesoPrioController@createCarac');
Route::post('/carac/store', 'ProcesoPrioController@storeCarac');
Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/createCarac2','ProcesoPrioController@createCarac2');
Route::post('/carac/store2', 'ProcesoPrioController@storeCarac2');
Route::delete('/carac/{id}','ProcesoPrioController@destroyCarac');

Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/showCarac/{pc_id}/createIndicador','ProcesoPrioController@createIndicador');
Route::post('/indicador/store', 'ProcesoPrioController@storeIndicador');
Route::delete('/indicador/{id}','ProcesoPrioController@destroyIndicador');



Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/createFlujo','ProcesoPrioController@createFlujo');
Route::get('/flujo/download/{proceso_flujo_id}', 'ProcesoPrioController@downloadFlujo');
Route::post('/flujo/store', 'ProcesoPrioController@storeFlujo');
Route::delete('/flujo/{id}','ProcesoPrioController@destroyFlujo');






Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/createSeguimiento','ProcesoPrioController@createSeguimiento');
Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/showSeguimiento/{ps_id}','ProcesoPrioController@showSeguimiento')->name('seguimiento_index');
Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/showSeguimiento/{ps_id}/createActividad','ProcesoPrioController@createActividad');

Route::post('/seguimiento/store', 'ProcesoPrioController@storeSeguimiento');
Route::post('/ps_detalle/store', 'ProcesoPrioController@storeActividad');
Route::delete('/seguimiento/{id}','ProcesoPrioController@destroySeguimiento');
Route::delete('/ps_detalle/{id}','ProcesoPrioController@destroyActividad');





Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/createMapa','ProcesoPrioController@createMapa');
Route::get('/empresa/{empresa_id}/mapa/{mapa_id}/subproceso/{subproceso_id}/showMapa/{pm_id}','ProcesoPrioController@showMapa')->name('mapaestrategico_index');
Route::post('/mapaEstrategico/store', 'ProcesoPrioController@storeMapa');
Route::delete('/mapaEstrategico/{id}','ProcesoPrioController@destroyMapa');


Route::get('/empresa/{empresa_id}/showCarac/{pc_id}/indicador/{indicador_id}/tablero/{tablero_id}','ProcesoPrioController@showTablero');
Route::get('/empresa/{empresa_id}/showCarac/{pc_id}/indicador/{indicador_id}/createTablero','ProcesoPrioController@createTablero');
Route::post('/tableroControl/store', 'ProcesoPrioController@storeTablero');