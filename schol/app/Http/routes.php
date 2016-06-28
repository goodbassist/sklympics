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

Route::get('/','PagesController@index');
Route::get('about','PagesController@about');

Route::group([ 'prefix' => 'school', 'before' => 'school'], function(){
	Route::get('schoolreg','PagesController@schoolreg');
	Route::get('login','PagesController@login');
	Route::get('athletes','SchoolController@athletes');
	Route::get('masters','SchoolController@masters');
	Route::get('dashboard','SchoolController@dashboard');
	Route::get('newathlete','SchoolController@newAthlete');
	Route::get('newmaster','SchoolController@newMaster');
	Route::get('registration/{id}','PagesController@regPage');
	Route::get('confirmation/{id}','PagesController@confPage');
	Route::post('enterpin','PagesController@pinValidate');
	Route::post('login','SchoolController@login');
	Route::post('registerschool','PagesController@registerSchool');
	Route::post('newathlete','SchoolController@storeAthlete');
	Route::post('newmaster','SchoolController@storeMaster');
});

Route::group([ 'prefix' => 'admin', 'before' => 'admin'], function(){
	Route::get('/','AdminController@loginPage');
	Route::get('login','AdminController@loginPage');
	Route::get('athletes','AdminController@athletes');
	Route::get('profile/{id}','AdminController@profile');
	Route::get('masters','AdminController@masters');
	Route::get('schools','AdminController@schools');
	Route::get('dashboard','AdminController@dashboard');
	Route::post('login','AdminController@login');
});

Route::get('404','PagesController@error');