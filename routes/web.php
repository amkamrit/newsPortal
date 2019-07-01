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

Route::get('/', 'Frontend\SiteController@aboutIndex')->name('home');
//Admin Route Hear

Route::resource('Admin/About','Admin\AboutController')->middleware('auth');
Route::resource('Admin/SocialMedia','Admin\ScialMediaController')->middleware('auth');
Route::resource('Admin/Contact','Admin\ContactController')->middleware('auth');
Route::resource('Admin/Gallary','Admin\GallaryController')->middleware('auth');
Route::resource('Admin/MyCline','Admin\ContactUserController')->middleware('auth');
Route::resource('Admin/menu','Admin\MenuController')->middleware('auth');
Route::resource('Admin/subMenu', 'Admin\SubMenuController')->middleware('auth');
Route::resource('Admin/post', 'Admin\PostController')->middleware('auth');
Route::get('Admin/indexNews', 'Admin\PostController@indexNews')->middleware('auth');
Route::get('Admin/add/{id}', 'Admin\PostController@add')->middleware('auth');
Route::post('Admin/indexing/{id}', 'Admin\PostController@indexingUpload')->middleware('auth');
Route::post('Admin/indexingRemove/{id}', 'Admin\PostController@indexingRemove')->middleware('auth');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/logout', 'HomeController@logout')->name('logout');




// Frontend Route

Route::get('singlePage','Frontend\SiteController@singlePage');
Route::get('categoryPage','Frontend\SiteController@categoryPage');
