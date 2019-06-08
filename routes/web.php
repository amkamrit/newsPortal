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

Route::get('/admin', function(){
	return view('Admin.index');
});
//Admin Route Hear

Route::resource('Admin/About','Admin\AboutController');
Route::resource('Admin/ProjectList','Admin\ProjectListController');
Route::resource('Admin/Services','Admin\ServicesController');
Route::resource('Admin/SocialMedia','Admin\ScialMediaController');
Route::resource('Admin/Contact','Admin\ContactController');
Route::resource('Admin/Gallary','Admin\GallaryController');
Route::resource('Admin/MyCline','Admin\ContactUserController');
 