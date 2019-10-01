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

use App\Models\User;
use App\Models\Posts;

Route::get('/', function () {
    return view('welcome');

});


Route::get('route-starter', function () {
	$users = factory(User::class, 10)
	->make()
	->toArray();
    return view('starter', [
    	'users' => $users
    ]);

});

Route::get('lou', function () {
	$posts = factory(Posts::class, 10)
	->make()
	->toArray();
    return view('posts', [
    	'posts' => $posts
    ]);

});


