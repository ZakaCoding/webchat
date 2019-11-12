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
Route::get('/confirmation/{token}/{name}&{email}', 'VerificationEmailController@VerifiesEmail')->name('Verifies');
Route::get('/confirmation/success/{token}/{name}&{email}','VerificationEmailController@show')->name('confirm');
Route::get('/confirmation/fail/{token}/{name}&{email}','VerificationEmailController@show')->name('confirmFail');


// Auth login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/c/{user}', 'ChatController@index')->name('chatList');
// Route::get('/', 'ChatController@index');
Route::get('messages', 'ChatController@fetchMessages');
Route::post('messages', 'ChatController@sendMessage');


