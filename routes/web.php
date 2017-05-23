<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

// Estudiantes 

Route::get('/estudiante/{id}', 'EstudiantesController@show');
/*
Route::get('/estudiantes', 'EstudiantesController@index');


Route::put('/estudiantes/{id}', 'EstudiantesController@get');
Route::delete('/estudiantes/{id}', 'EstudiantesController@delete');
*/
