<?php

use Illuminate\Support\Facades\Route;

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
//     //return view('welcome');
//     return 'Hello world!!';
// });

// Route::get('/post/{id}', function($id){
//     return "This is post number ". $id;
// });


// Route::get('admin/posts/example', array('as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is ". $url;
// }));

// Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');
Route::resource('posts', '\App\Http\Controllers\PostsController');

Route::get('contact', '\App\Http\Controllers\PostsController@contact');

Route::get('post/{id}', '\App\Http\Controllers\PostsController@show_post');