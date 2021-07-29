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

Auth::routes([
    'register' => false,
    'reset' => false,
]);

// Route::get('/home', 'HomeController@index')->name('home');

// Guest Controller
// Route::get('/albums', 'GuestController@album');
// Route::get('/detail-album/{tittle}', 'GuestController@galerifoto')->name('galeri.foto');
Route::get('/mountains', 'GuestController@MountainGuide');
Route::get('/detail-mountains/{tittle}', 'GuestController@listguide')->name('list.guide');
Route::get('/opentrips', 'GuestController@MountainOpenTrip');
Route::get('/detail-opentrips/{tittle}', 'GuestController@listopentrip')->name('list.opentrip');

// Route User
Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');


Route::get('/', 'MasterController@welcome');
Route::get('/about', 'MasterController@about');
Route::get('/contact', 'MasterController@contact');
Route::get('/fitur', 'MasterController@fitur');

// Search Controller
Route::get('search', 'JasaGuideController@search')->name('guide.search');
// Route::get('search', 'AlbumController@search')->name('album.search');

// Jasa Guide Controller
Route::get('/jasaguide', 'JasaGuideController@index');
Route::get('/jasaguide/create', 'JasaGuideController@create')->name('guide.create');
Route::post('/jasaguide', 'JasaGuideController@list')->name('guide.list');
Route::post('/jasaguide/delete/{id}', 'JasaGuideController@destroy')->name('guide.destroy');
Route::get('/jasaguide/edit/{id}', 'JasaGuideController@edit')->name('guide.edit');
Route::post('/jasaguide/update/{id}', 'JasaGuideController@update')->name('guide.update');

// Album
Route::get('/opentrip', 'OpentripController@index');
Route::get('/opentrip/create', 'OpentripController@create')->name('opentrip.create');
Route::post('/opentrip', 'OpentripController@store')->name('opentrip.store');
Route::get('/opentrip/edit/{id}', 'OpentripController@edit')->name('opentrip.edit');
Route::post('/opentrip/update/{id}', 'OpentripController@update')->name('opentrip.update');
Route::post('/opentrip/delete/{id}', 'OpentripController@destroy')->name('opentrip.destroy');

// Galeri
Route::get('/galeri', 'GaleriController@index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/edit/{id}', 'GaleriController@edit')->name('galeri.edit');
Route::post('/galeri/update/{id}', 'GaleriController@update')->name('galeri.update');
Route::post('/galeri/delete/{id}', 'GaleriController@destroy')->name('galeri.destroy');

// Route::get('/home', 'HomeController@index')->name('home');

// Jasa Guide List
Route::get('/guide', 'GuideController@index');
Route::get('/guide/create', 'GuideController@create')->name('listguide.create');
Route::post('/guide', 'GuideController@store')->name('listguide.store');
Route::get('/guide/edit/{id}', 'GuideController@edit')->name('listguide.edit');
Route::post('/guide/update/{id}', 'GuideController@update')->name('listguide.update');
Route::post('/guide/delete/{id}', 'GuideController@destroy')->name('listguide.destroy');

// Mountain Guide List
Route::get('/mountain', 'MountainController@index');
Route::get('/mountain/create', 'MountainController@create')->name('listmountain.create');
Route::post('/mountain', 'MountainController@store')->name('listmountain.store');
Route::get('/mountain/edit/{id}', 'MountainController@edit')->name('listmountain.edit');
Route::post('/mountain/update/{id}', 'MountainController@update')->name('listmountain.update');
Route::post('/mountain/delete/{id}', 'MountainController@destroy')->name('listmountain.destroy');
