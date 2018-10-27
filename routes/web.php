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

	$animales = [
		'perro',
		'gato',
		'cabra',
		'cebra'
	];

    return view('inicio', [
    	'animales' => $animales,
    ]);
});


Route::get('/login', 'SiteController@login');

Route::get('/prueba', function() {
	return view('prueba');
});

Route::post('/autenticar', 'LoginController@autenticar');

Route::get('/tableros', 'EquipoController@index');

Route::get('/tablero/{id}', 'TableroController@view');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
