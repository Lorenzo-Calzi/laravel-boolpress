<?php

use App\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PostResource;


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

/* User Routes */
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::post('/contacts', 'PageController@sendContactForm')->name('contacts.send');
Route::get('/userName/{username}', 'PageController@userName')->name('userName');

Auth::routes(['register' => false]);

/* Categorie */
Route::get('categories/{category:slug}', 'CategoryController@show')->name('categories.show');

/* Admin Routes */
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts', PostController::class);
});


Route::get('post/{post}', function(Post $post){
    return new PostResource($post);
});

Route::get('vue-posts', function(){
    return view('posts');
});
