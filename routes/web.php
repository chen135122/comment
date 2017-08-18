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
\Illuminate\Support\Facades\Auth::loginUsingId(9);
Route::get('/', function () {
    $user = \App\User::find(5);
    event(new \App\Events\SendMessage($user));
    return view('welcome',compact('user'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
