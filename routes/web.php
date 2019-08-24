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


Route::get('/', 'InicioController@index');


Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    /*Rutas usuario*/ 
    Route::get('','AdminController@index');
    Route::get('usuario', 'UsuarioController@index')->name('usuario');


    Route::post('usuario/crear','UsuarioController@create')->name('crearuser');

    Route::get('usuario/crear', 'TipousuarioController@index')->name('creartipousr');
    Route::get('usuario/crear', 'TipoDocController@index')->name('creartipodoc');
    
    Route::post('usuario','UsuarioController@guardar')->name('guardar');
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');
});


;