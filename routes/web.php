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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiante1/{nombre?}', function ($nombre = "No colocó nombre") {

	echo "El nombre que has colocado en la sección estudiante es ".$nombre.".";
});

Route::get('/estudiante2', [
	"as" => "estudiante",
	"uses" => "UserController@view"
]);

Route::group(['prefix' => 'estudiante3'], function(){
	Route::get('/view/{estudiante?}', function($estudiante = "No hay estudiante"){
		//
		echo $estudiante;
	});
});

Route::group(['prefix' => 'estudiantes'], function(){
	Route::get('/search/{nombre?}', 'TestController@view');
	Route::get('/search1/{nombre?}', [
		'uses' => 'TestController@view',
		'as' => 'view'
		]);
});

Route::get('/test', function () {
    return view('test.index');
});
*/


Route::get('/', function () {
    return view('/welcome');
});

Route::resource('/welcome', 'WelcomeController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::resource('estudiantes', 'EstudiantesController');
	Route::get('estudiantes/{id}/destroy', [
		'uses' => 'EstudiantesController@destroy',
		'as' => 'admin.estudiantes.destroy'
	]);

	Route::resource('tutores', 'TutoresController');
	Route::get('tutores/{id}/destroy', [
		'uses' => 'TutoresController@destroy',
		'as' => 'admin.tutores.destroy'
	]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/carga', 'CargaController');


/*	Authentication Routes...	*/
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');

/*	Registration Routes...	*/
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

/*	Password Reset Routes...	*/
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');