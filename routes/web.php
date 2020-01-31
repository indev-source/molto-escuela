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

//AUTH ROUTES
Route::group(['prefix'=>'auth'],function(){
  Route::get('login','AuthController@formLogin');
  Route::get('forgot-password','AuthController@formForgotPassword');
  Route::post('login','AuthController@auth');
  Route::post('logout','AuthController@logout');
});

Route::get('/','HomeController@index');


Route::resource('empleados','EmployeeController');
Route::resource('alumnos','StudentController');
Route::resource('planteles','CampusController');
