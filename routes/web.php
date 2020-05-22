<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio','InicioController@index');

Route::get('/saludo',function(){
	return "HOLA MUNDO LARAVEL 2";
});

Route::get('/contacto/{nombre}/{edad}/{telefono}', function($nombre, $edad, $telefono){
	return $nombre." ".$edad." ".$telefono;
});

Route::get('/usuario','UsuarioController@ingreso');

Route::get('/persona','PersonaController@listar');

Route::get('/persona/registrar','PersonaController@registrar')->name('registrar_persona');
Route::post('/persona','PersonaController@guardar')->name('guardar_persona');

//Route::get('/persona/{id}/{profesion}/{Nombre}/{primer_apellido}/{segundo_apellido}/{fecha_nacimiento}/{edad}/{estado}/editar','PersonaController@editar')->name('editar_persona');

Route::get('/persona/{id}','PersonaController@editar')->name('editar_persona');

Route::put('/persona/{id}','PersonaController@modificar')->name('modificar_persona');

Route::delete('persona/{id}','PersonaController@eliminar')->name('eliminar_persona');

//no Route::resource('persona/{id}','PersonaController@eliminar')->name('eliminar_persona');

//Route::resource('/profesion','ProfesionController');



Route::get('/producto','ProductoController@listar')->name('listarproductos');

Route::get('/producto/crear','ProductoController@crear')->name('crear_productos');

Route::post('/producto','ProductoController@guardar')->name('guardar_productos');

Route::get('/producto/{id}/editar','ProductoController@editar')->name('editar_productos');

Route::put('/producto/{id}','ProductoController@modificar')->name('modificar_productos');

Route::delete('producto/{id}','ProductoController@eliminar')->name('eliminar_producto');

Route::resource('/categorias','CategoriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
