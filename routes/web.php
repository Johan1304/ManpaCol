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
Route::get('admin/usuario', 'Admin/UsuarioController@index')->name('usuario');
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/crear', 'UsuarioController@index')->name('crear_usuario');
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');
});
