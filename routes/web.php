<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\User;
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
// Route::resource('posts', '\App\Http\Controllers\PostsController');

// Route::get('contact', '\App\Http\Controllers\PostsController@contact');

// Route::get('post/{id}', '\App\Http\Controllers\PostsController@show_post');


Route::get('/insert', function () {
    DB::insert('insert into posts(title, content) values (?, ?)', ['lçkajdfçlkjadsfçl', 'nlcnv,nfjngjorg']);
});

Route::get('/insertmany', function () {
    DB::insert('insert into users(name, email, password) values (?, ?, ?)', ['Rafael Pinto', 'rafael@gmail.com',  '123123']);
    DB::insert('insert into users(name, email, password) values (?, ?, ?)', ['Genivaldo Vieira', 'genivaldo@gmail.com',  '123123']);
    DB::insert('insert into posts(title, user_id, content) values (?, ?, ?)', ['O que é spring boot', 1,  'Tudo sobre Java Spring Boot']);
    DB::insert('insert into posts(title, user_id, content) values (?, ?, ?)', ['PHP e Laravel são muito bons', 1,  'É isso ai']);
    
});

// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id = ?', [1]);
    
//     return $results;
    
// });

// Route::get('/update', function () {
//     $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
// });
/*ELOQUENT  */


// Route::get('/find', function () {
//     $post = Post::find(1);
    
//     return $post->title;
// });

// Route::get('/findwhere/{id}', function ($id) {
//     DB::delete('delete from posts where id = ?', [2]);
//     $posts = Post::where('id', $id)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/basicinsert', function () {
//     $post = new Post;
//     $post->title = 'New Eloquent title insert';
//     $post->content = 'Wow eloquent is really cool, look at this content';

//     $post->save();
// });

// Route::get('/create', function () {
//     Post::create(['title'=>'PHP create method', 'content'=>'Wow I am learning a lot']);
// });

// Route::get('/update', function () {
//     Post::where('id', 2)->where('is_admin', 1)->update(['title'=>'new php title', 'content'=>'i love me']);
// });

// Route::get('/softdelete', function () {
//     Post::find(1)->delete();
// });


// Route::get('/readsoftdelete', function () {
//     $posts = Post::withTrashed()->get();
    
//     return $posts;
// });

// Route::get('/user/{id}/post', function ($id) {
//     return User::find($id)->post;
// });

// Route::get('/post/{id}/user', function ($id) {
//     return Post::find($id)->user->name;
// });0

Route::get('/posts/{id}', function ($id) {
    $user = User::find($id);
    foreach($user->posts as $post){
        echo $post->content. '<br>';
    }
});


Route::get('/user/{id}/role', function($id) {
   return User::find($id)->roles()/*->orderBy('id', 'desc')*/->get();
});


Route::get('/user/pivot', function () {
    $user = User::find(1);
    foreach($user->roles as $role) {
        echo $role->pivot->created_at;
    }
});

Route::get('/user/{id}/country',  function ($id){
    
});