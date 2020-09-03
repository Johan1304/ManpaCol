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

use Illuminate\Support\Facades\Route;

Route::get('/', 'InicioController@index');

Auth::routes();
Route::get('auth/login', 'TipoUsuarioController@mostrar')->name('log');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'auth'], function () {

    
    Route::get('/','AdminController@index');

    /*Usuario*/
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar');
    Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');    
    Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');


    Route::get('', 'TipoDocController@index')->name('creartipodoc');
    Route::get('usuario/crear','TipousuarioController@index')->name('creartipou');
    /*Fin usuario*/

    /*Material*/
    Route::get('material','MaterialController@index')->name('material');    
    Route::get('material/crear','MaterialController@crear')->name('crear_material');
    Route::post('material','MaterialController@guardar')->name('guardar_material');

    Route::get('material/tipomaterial','TipoMaterialController@index')->name('tipomaterial');
    Route::get('material/tipomaterial/crear','TipoMaterialController@crear')->name('Tipo_M');
    Route::post('material/tipomaterial','TipoMaterialController@guardar')->name('guardar_Tpmaterial');
    Route::get('material/tipomaterial/{id}/editar', 'TipoMaterialController@editar')->name('editar_tipom');    
    Route::put('usuario/tipomaterial/{id}', 'TipoMaterialController@actualizar')->name('actualizar_tipom');

    
    Route::get('material/tipopresentacion','TipoPresentacionController@index')->name('TipoPresentacion');
    Route::get('material/tipopresentacion/crear','TipoPresentacionController@crear')->name('Tipo_P');
    Route::post('material/tipopresentacion', 'TipoPresentacionController@guardar')->name('guardar_presentacion');
    Route::get('material/tipopresentacion/{id}/editar', 'TipoPresentacionController@editar')->name('editar_tipopr');    
    Route::put('usuario/tipopresentacion/{id}', 'TipoPresentacionCOntroller@actualizar')->name('actualizar_tipopr');
    

    Route::get('material/textura','TexturaController@index')->name('textura');
    Route::get('material/textura/crear','TexturaController@crear')->name('textura_crear');
    Route::post('material/textura','TexturaController@guardar')->name('guardar_textura');
    Route::get('textura/{id}/editar', 'TexturaController@editar')->name('editar_textura');    
    Route::put('textura/{id}', 'TexturaController@actualizar')->name('actualizar_textura');

    Route::get('material/colores','ColorController@index')->name('color');
    Route::get('material/colores/crear','ColorController@crear')->name('color_crear');
    Route::post('material/colores','ColorController@guardar')->name('guardar_color');
    Route::get('material/colores/{Id}/editar', 'ColorController@edit')->name('editar_color');    
    Route::put('material/colores/textura/{Id}', 'ColorController@update')->name('actualizar_color');


    Route::get('material/proveedor','ProveedorController@index')->name('proveedor');
    Route::get('material/proveedor/crear','ProveedorController@crear')->name('proveedor_crear');
    Route::post('material/proveedor','ProveedorController@guardar')->name('guardar_proveedor');
    Route::get('material/proveedor/{id}/editar', 'ProveedorController@edit')->name('editar_proveedor');    
    Route::put('material/proveedor/{id}', 'ProveedorController@update')->name('actualizar_proveedor');
    /*Fin Material*/


    /*Empleado*/
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('', 'AdminController@index');


    
});

Route::group(['prefix'=>'usuario', 'namespace'=>'User','middleware'=>'auth'], function(){
    Route::get('/','UsuarioController@index');

    Route::get('entrada','EntradaController@index')->name('entrada');
    Route::post('entrada/{id}','EntradaController@update')->name('actualizar_entrada');
    Route::get('reportes','ReporteController@index')->name('reporte');

    Route::get('salida','salidaController@index')->name('salida');
    Route::post('salida/{id}','salidaController@update')->name('actualizar_salida');
    
    Route::get('reportes','ReporteController@index')->name('reporte');


    Route::get('MaterialDañado/crear', 'MaterialDañadoController@index')->name('material_danado');
    Route::post('MaterialDañado', 'MaterialDañadoController@store')->name('material_danado_guardar');
    
});

Route::get('inactivo','InactivoController@index')->name('inactivo');







