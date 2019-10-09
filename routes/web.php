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
    return view('wiuc/index');
});
 
Route::get('about', function () {
    return view('wiuc/about');
});

Route::get('contact', function () {
    return view('wiuc/contact');
});


Route::get('menu', function () {
    return view('wiuc/menu');
});

Route::get('reservation', function () {
    return view('wiuc/reservation');
});
Route::get('blog', function () {
    return view('wiuc/blog');
});

Route::get('blog-single', function () {
    return view('wiuc/blog-single');
});

Route::get('/login', function () {
    return view('/login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@contact')->name('farmconnect/contact');

Auth::routes();

Route::get('/home', 'HomeController@about')->name('farmconnect/about');

Route::get('/dashboard', 'DashboardController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('system-management/category', 'CategoryController');
Route::post('system-management/category/search', 'CategoryController@search')->name('category.search');
