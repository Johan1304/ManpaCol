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

    
    Route::get('/','AdminController@index');

    /*Usuario*/
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar');
    Route::get('usuario/{Id}/editar', 'UsuarioController@editar')->name('editar_usuario');    
    Route::put('usuario/{Id}', 'UsuarioController@actualizar')->name('actualizar_usuario');


    Route::get('', 'TipoDocController@index')->name('creartipodoc');
    Route::get('usuario/crear','TipousuarioController@index')->name('creartipou');
    /*Fin usuario*/

    /*Material*/
    Route::get('material','MaterialController@index')->name('material');    
    Route::get('','MaterialController@crear')->name('crear_material');
    Route::post('material','MaterialController@guardar')->name('guardar_material');

    Route::get('material/crear','TipoMaterialController@index')->name('tipomaterial');
    Route::get('','TipoMaterialController@crear')->name('Tipo_M');
    Route::post('material/tipomaterial','TipoMaterialController@guardar')->name('guardar_Tpmaterial');
    
    
    Route::get('material/tipomaterial/crear','TipoPresentacionController@index');
    Route::get('material/tipopresentacion/crear','TipoPresentacionController@crear')->name('Tipo_P');
    Route::post('material/tipopresentacion', 'TipoPresentacionController@guardar')->name('guardar_presentacion');
    

    Route::get('material/textura','TexturaController@index')->name('textura');
    Route::get('material/textura/crear','TexturaController@crear')->name('textura_crear');
    Route::post('material/textura','TexturaController@guardar')->name('guardar_textura');
    Route::get('textura/{Id}/editar', 'TexturaController@editar')->name('editar_textura');    
    Route::put('textura/{Id}', 'TexturaController@actualizar')->name('actualizar_textura');

    Route::get('material/colores','ColorController@index')->name('color');
    Route::get('material/colores/crear','ColorController@crear')->name('color_crear');
    Route::post('material/colores','ColorController@guardar')->name('guardar_color');
    Route::get('material/colores/{Id}/editar', 'ColorController@edit')->name('editar_color');    
    Route::put('material/colores/textura/{Id}', 'ColorController@update')->name('actualizar_color');


    Route::get('material/proveedor','ProveedorController@index')->name('proveedor');
    Route::get('material/proveedor/crear','ProveedorController@crear')->name('proveedor_crear');
    Route::post('material/proveedor','ProveedorController@guardar')->name('guardar_proveedor');
    Route::get('material/proveedor/{Id}/editar', 'ProveedorController@edit')->name('editar_proveedor');    
    Route::put('material/proveedor/{Id}', 'ProveedorController@update')->name('actualizar_proveedor');
    /*Fin Material*/


    /*Empleado*/
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');

});


Route::group(['prefix'=>'usuario', 'namespace'=>'User'], function(){
    Route::get('/','UsuarioController@index');
})


;