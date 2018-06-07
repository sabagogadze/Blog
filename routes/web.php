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
	Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
	Route::get('blog', 'BlogController@getIndex')->name('blog.index');
	Route::get('/', 'PagesController@index');
	Route::get('contact', 'PagesController@contact');
	Route::get('about', 'PagesController@about');
	

Route::group(['middleware' => ['auth']], function()
{
	Route::resource('posts', 'PostController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
