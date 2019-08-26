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

    /*Usuario*/
    Route::get('','AdminController@index');
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::post('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar');
    Route::get('usuario/crear', 'TipoDocController@index')->name('creartipodoc');
    Route::get('usuario/crear','TipousuarioController@index')->name('creartipou');
    /*Fin usuario*/

    /*Material*/
    Route::get('material','MaterialController@index')->name('material');
    Route::get('material/crear','MaterialController@crear')->name('crear_material');
    
    Route::get('material/tipomaterial/crear','TipoMaterialController@crear')->name('Tipo_M');
    Route::get('material/tipopresentacion/crear','TipoPresentacionController@crear')->name('Tipo_P');

    Route::get('material/textura/crear','TexturaController@crear')->name('textura_crear');
    Route::get('material/colores/crear','ColorController@crear')->name('color_crear');

    Route::get('material/proveedor/crear','ProveedorController@crear')->name('proveedor_crear');
    /*Fin Material*/


    /*Empleado*/
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');

});


;