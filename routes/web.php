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

Route::get('/users/', function() {
    //return App\User::all();
    return view('users.index', ['users' => App\User::all()]);
});

Route::get('/users/{user}', function(App\User $user) {
    //return App\User::findOrFail($id);
    //return view('users.show', ['user' => App\User::findOrFail($id)]);
    return view('users.show', ['user' => $user]); // route model binding
});

Route::get('/messages/', function() {
    return view('messages.index', ['messages' => App\Message::all()]);
});

Route::get('/messages/{id}', function($id) {
    return view('messages.show', ['message' => App\Message::findOrFail($id)]);
});