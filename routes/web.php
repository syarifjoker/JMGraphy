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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/admin_user', 'PagesController@admin_user')->name('admin_user');
Route::get('/admin_main', 'PagesController@admin_main')->name('admin_main');
Route::get('/admin_booking', 'PagesController@admin_booking')->name('admin_booking');
Route::get('/booking_list', 'BookingController@index')->name('booking_list');
Route::get('/booking_register', 'BookingController@create')->name('booking_register');
Route::get('/booking_show/{id}', 'BookingController@show')->name('booking_show');
Route::get('/booking_edit/{id}', 'BookingController@edit')->name('booking_edit');
Route::patch('/booking_update/{id}', 'BookingController@update')->name('booking_update');
Route::delete('/booking_destroy/{id}', 'BookingController@destroy')->name('booking_destroy');

Route::resource('booking','BookingController');