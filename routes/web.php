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

Auth::routes();


Route::get('/home', 'HomeController@index');
Route::get('/post','PostController@create')->name('create.post');
Route::post('/data/posted','PostController@save')->name('post.save');


Route::get('/showall/post','PostController@show')->name('show.post');
Route::get('delelete/{id}','PostController@delete')->name('post.delete');
Route::get('edit/{id}','PostController@edit')->name('post.edit');
Route::post('update/{id}','PostController@update')->name('post.update');


Route::get('/news','NewsController@newscreate')->name('news.create');
Route::post('/news/posted','NewsController@store')->name('news.store');
Route::get('/showall/news','NewsController@shownews')->name('news.show');
Route::get('/mywebsite','WebsiteController@website')->name('view.website');
Route::post('/order/saved','WebsiteController@save')->name('save.website');
Route::get('/allcomplains','WebsiteController@show')->name('show.website');
Route::get('/comments','CommentController@addcomment')->name('save.comment');