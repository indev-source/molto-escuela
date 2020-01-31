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
  Route::get('login','AuthController@formLogin')->name('login');
  Route::get('forgot-password','AuthController@formForgotPassword');
  Route::post('login','AuthController@auth');
  Route::post('logout','AuthController@logout');
});

Route::get('/','HomeController@index')->middleware('auth');

Route::resource('representantes','RepresentativeController')->middleware('auth');
Route::resource('planteles','CampusController')->middleware('auth');
Route::resource('puestos','PositionController')->middleware('auth');
Route::resource('empleados','EmployeeController')->middleware('auth');
Route::resource('tutores','TutorController')->middleware('auth');
Route::resource('alumnos','StudentController')->middleware('auth');
