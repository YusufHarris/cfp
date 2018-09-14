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

Route::get('/', 'HomeController@index')->name('/');

//Login/Registrate Routes
Auth::routes();

//Home Routes
Route::get('/home', 'HomeController@index')->name('home');

//Employee Routes
Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employees/create', 'EmployeeController@create')->name('employee.create');
Route::post('/employees','EmployeeController@store')->name('employee.store');
Route::get('/employees/{id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('/employees{id}','EmployeeController@update')->name('employee.update');

//Beneficiary Routes
Route::get('/beneficiaries', 'BeneficiaryController@index')->name('beneficiaries');
Route::get('/beneficiaries/create','BeneficiaryController@create')->name('beneficiary.create');
Route::post('/beneficiaries','BeneficiaryController@store')->name('beneficiary.store');
Route::get('/beneficiaries/{id}','BeneficiaryController@edit')->name('beneficiary.edit');
Route::post('/beneficiaries/{id}','BeneficiaryController@update')->name('beneficiary.update');
Route::delete('/beneficiaries/{id}','BeneficiaryController@destroy')->name('beneficiary.destroy');

//Gallery Routes
Route::get('/image','ImageController@index')->name('image.index');

Route::get('/newgal/{id}/image/create','ImageController@create')->name('image.create')->middleware('auth');
Route::post('/newgal/{id}','ImageController@store')->name('image.store')->middleware('auth');

//New GEN Gallery Routes
Route::get('/newgal','GalleryController1@index')->name('newgal');
Route::get('/newgal/create','GalleryController1@create')->name('newgal.create');
Route::post('/newgal','GalleryController1@store')->name('newgal.store');
Route::get('/newgal/{id}','GalleryController1@show')->name('newgal.show');
