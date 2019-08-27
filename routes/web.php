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
    Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
    Route::get('', 'UsuarioController@guardar')->name('guardar');
    Route::get('usuario/{Id}/editar', 'UsuarioController@editar')->name('editar_usuario');    
    Route::put('usuario/{Id}','UsuarioController@actualizar')->name('actualizar_usuario');


    Route::get('', 'TipoDocController@index')->name('creartipodoc');
    Route::get('','TipousuarioController@index')->name('creartipou');
    /*Fin usuario*/

    /*Material*/
    Route::get('material','MaterialController@index')->name('material');    
    Route::get('material/crear','MaterialController@crear')->name('crear_material');
    Route::post('material','MaterialController@guardar')->name('guardar_material');

    Route::get('material/crear','TipoMaterialController@index')->name('tipomaterial');
    Route::get('material/tipomaterial/crear','TipoMaterialController@crear')->name('Tipo_M');
    Route::post('material/tipomaterial','TipoMaterialController@guardar')->name('guardar_Tpmaterial');
    

    Route::get('material/tipomaterial/crear','TipoPresentacionController@index');
    Route::get('material/tipopresentacion/crear','TipoPresentacionController@crear')->name('Tipo_P');
    Route::post('material/tipopresentacion', 'TipoPresentacionController@guardar')->name('guardar_presentacion');
    

    Route::get('material/textura/crear','TexturaController@crear')->name('textura_crear');
    Route::post('material/textura','TexturaController@guardar')->name('guardar_textura');

    Route::get('material/{$colores}','ColorController@index')->name('color');
    Route::get('material/colores/crear','ColorController@crear')->name('color_crear');
    Route::post('material/colores','ColorController@guardar')->name('guardar_color');


    Route::get('material/proveedor/crear','ProveedorController@crear')->name('proveedor_crear');
    Route::post('material/textura','ProveedorController@guardar')->name('guardar_proveedor');
    /*Fin Material*/


    /*Empleado*/
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');

});


;