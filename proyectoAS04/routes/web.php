<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('proyecto', 'ProyectosController');

Route::resource('Facultades', 'FacultadesController');

Route::resource('Carreras', 'CarrerasController');

Route::resource('Archivo', 'ArchivoController');

Route::resource('Universidad', 'UniversidadController');

Route::resource('Socio', 'SocioController');

Route::resource('Curso', 'CursoController');

Route::resource('Chart', 'ChartController');

Route::get('proyecto/{id}/complete', 'ProyectosController@complete');

Route::post('proyecto/{id}/guardar', 'ProyectosController@completar');

// Route::get('/proyecto/listado', 'ProyectosController@listado');

Route::get('Archivo/{id}/download', 'ArchivoController@download');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{id}','PostsController@show');

//API CLientes
//Mostrar Clientes
Route::get('/clients', 'ClientsController@index');
//Mostrar Productos del Cliente
Route::get('/clients/{id}','ClientsController@show');
//Vista Personas
Route::get('/personas', 'ClientsController@personas');
//Vista Empresas
Route::get('/empresas', 'ClientsController@empresas');
//Mostrar Datos Personales
Route::get('/mostrar/{id}', 'ClientsController@mostrar');

//API Tarjetas de Creditos
//Mostrar trnsacciones de una tarjeta
Route::get('/cards/{id}', 'CreditcardController@transacciones');
Route::get('/grafica1/{id}', 'CreditcardController@transacciones2');

//API Tarjetas de debitos
//Mostrar trnsacciones de una tarjeta
Route::get('/debits/{id}', 'DebitController@transacciones');
Route::get('/grafica2/{id}', 'DebitController@transacciones2');
//Realizar Transferencia
Route::post('/transferencia', 'TransferenciaController@store');
//Consumo
Route::get('/consumo', 'ConsumoController@index');

Route::get('/graph_trans/{id}', 'ConsumoController@graph_trans');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);

Route::get('admin/users/{id}/edituser', 'Admin\UsersController@edituser');

Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);


