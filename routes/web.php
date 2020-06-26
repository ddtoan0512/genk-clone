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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){

    Route::get('/', 'Admin\AdminCategoryController@index')->name('admin.home');

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'Admin\AdminCategoryController@index')->name('admin.category.list');
        Route::post('/create', 'Admin\AdminCategoryController@store')->name('admin.category.store');
        Route::get('/update/{id}', 'Admin\AdminCategoryController@edit')->name('admin.category.edit');
        Route::post('/update/{id}', 'Admin\AdminCategoryController@update')->name('admin.category.update');
        Route::delete('delete/{id}', 'Admin\AdminCategoryController@destroy')->name('admin.category.delete');
    });

    Route::group(['prefix' => 'post'], function(){
        Route::get('/', 'Admin\AdminPostController@index')->name('admin.post.list');
        Route::post('/create', 'Admin\AdminPostController@store')->name('admin.post.store');
        Route::get('/update/{id}', 'Admin\AdminPostController@edit')->name('admin.post.edit');
        Route::post('/update/{id}', 'Admin\AdminPostController@update')->name('admin.post.update');
        Route::delete('delete/{id}', 'Admin\AdminPostController@destroy')->name('admin.post.delete');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'Admin\AdminUserController@index')->name('admin.user.list');
        Route::post('/create', 'Admin\AdminUserController@store')->name('admin.user.store');
        Route::get('/update/{id}', 'Admin\AdminUserController@edit')->name('admin.user.edit');
        Route::post('/update/{id}', 'Admin\AdminUserController@update')->name('admin.user.update');
        Route::delete('delete/{id}', 'Admin\AdminUserController@destroy')->name('admin.user.delete');
    });

});

