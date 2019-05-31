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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontController@index');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/reviews', 'FrontController@reviews');
Route::get('/admin', 'FrontController@admin');
Route::resource('/usuario', 'UsuarioController');
Route::resource('/movie', 'MovieController');
Route::get('/movies', 'MovieController@listing');

/*Route::get('prueba', function(){
	return 'Hola Mundo';
} );
Route::get('/nombre/{nombre?}', function($nombre = 'Bastián'){
	return 'mi nombre es '.$nombre;
});
Route::get('/controlador','PruebaController@index');
Route::get('/name/{nombre}','PruebaController@nombre');
Route::resource('movie', 'MovieController');
*/
