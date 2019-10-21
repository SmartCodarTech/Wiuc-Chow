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
    return view('/dashboard');
});
 Route::get('/login', function () {
    return view('/login');
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


Auth::routes();
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('/login');



Route::get('/dashboard', 'DashboardController@index');
Route::get('/chef_dashboard', 'DashboardController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('system-management/category', 'CategoryController');
Route::post('system-management/category/search', 'CategoryController@search')->name('category.search');

Route::resource('system-management/contact', 'ContactController');
Route::post('/wiuc/contact','ContactController@contact');
Route::post('system-management/contact/search', 'CaontactController@search')->name('contact.search');
Route::get('avatars/{name}', 'ChefController@load');
Auth::routes();

Route::resource('chef-management', 'ChefController');
Route::post('chef-management/search', 'ChefController@search')->name('chef-management.search');
