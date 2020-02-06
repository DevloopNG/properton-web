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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'FrontViewController@index')->name('index');


Route::get('/invest', 'FrontViewController@invest');
Route::get('/sign-in', 'FrontViewController@signIn');
Route::get('/sign-up', 'FrontViewController@signUp');


// Route::get('/create-account', 'CreateAccountController@index');
// Route::post('/store-account/step-1', 'CreateAccountController@createAccount');
// Route::get('/create-account/step-2', 'CreateAccountController@createStepTwo');
// Route::post('/store-account/step-2', 'CreateAccountController@createAccountTwo');
// Route::get('/create-account/step-3', 'CreateAccountController@createStepThree');
// Route::post('/store-account/step-3', 'CreateAccountController@finalStoreAccount');


Route::get('/dashboard', 'AdminController@index');

