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

Auth::routes();

Route::get('admin/login', 'admin\auth\LoginController@LoginForm')->name('admin.login');
Route::post('admin/login', 'admin\auth\LoginController@Login');
Route::get('admin/login/logout', 'admin\auth\LoginController@Logout')->name('admin.logout');

Route::group(['prefix' => '/'], function (){
    Route::get('', 'HomeController@index')->name('home');
});

Route::group(['prefix' => '/admin', 'middleware' => 'isAdmin'], function (){
   Route::get('/', function (){
       return view('admin.home');
   })->name('admin.home');

});
