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

// Rotas de login do Admin
Route::get('admin/login', 'admin\auth\LoginController@LoginForm')->name('admin.login');
Route::post('admin/login', 'admin\auth\LoginController@Login');
Route::get('admin/login/logout', 'admin\auth\LoginController@Logout')->name('admin.logout');


// Grupo de Rotas do / - blog
Route::group(['prefix' => '/'], function (){
    Route::get('', 'HomeController@index')->name('home');
});


// Grupo de Rotas do /ADMIN  - painel administrativo
Route::group(['prefix' => '/admin', 'middleware' => 'isAdmin'], function (){
   Route::get('/', 'admin\vendor\AppController@index')->name('admin.home');
   Route::post('/', 'admin\content\DashboardController@index')->name('admin.home.post');
   Route::post('/posts', 'admin\content\DashboardController@posts')->name('admin.posts.post');
});
