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

// Register 
Route::get('/auth/register', 'RegisterController@create')->name('register'); // Create views
Route::post('/auth', 'RegisterController@store')->name('regist'); // Store data
// Email from register
Route::get('confirmation/{token}/{name}&{email}', 'MailController@sendEmail')->name('sentEmail');

// Auth login
Route::get('/auth/login', 'LoginController@index')->name('login');

