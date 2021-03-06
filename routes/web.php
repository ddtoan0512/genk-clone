<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/c/{slug}', 'CategoryController@index')->name('get.list.post');
Route::get('/p/{slug}-{fid}', 'PostController@show')->name('get.detail.post');


Route::post('/cmt', 'CommentController@store')->name('post.comment')->middleware('auth');
Route::post('/cmt/delete', 'CommentController@destroy')->name('remove.comment');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', 'ProfileController@index')->name('admin.home');

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'Admin\AdminCategoryController@index')->name('admin.category.index');
        Route::post('/create', 'Admin\AdminCategoryController@store')->name('admin.category.store');
        Route::get('/{id}', 'Admin\AdminCategoryController@edit')->name('admin.category.edit');
        Route::put('/{id}', 'Admin\AdminCategoryController@update')->name('admin.category.update');
        Route::delete('/delete/{id}', 'Admin\AdminCategoryController@destroy')->name('admin.category.remove');
    });

    Route::group(['prefix' => 'post'], function(){
        Route::get('/', 'Admin\AdminPostController@index')->name('admin.post.index');
        Route::get('/create', 'Admin\AdminPostController@create')->name('admin.post.create');
        Route::post('/create', 'Admin\AdminPostController@store')->name('admin.post.store');
        Route::get('/{id}', 'Admin\AdminPostController@edit')->name('admin.post.edit');
        Route::put('/{id}', 'Admin\AdminPostController@update')->name('admin.post.update');
        Route::get('/delete/{id}', 'Admin\AdminPostController@destroy')->name('admin.post.remove');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'Admin\AdminUserController@index')->name('admin.user.index');
        Route::post('/create', 'Admin\AdminUserController@store')->name('admin.user.store');
        Route::get('/{id}', 'Admin\AdminUserController@edit')->name('admin.user.edit');
        Route::put('/{id}', 'Admin\AdminUserController@update')->name('admin.user.update');
        Route::get('/delete/{id}', 'Admin\AdminUserController@destroy')->name('admin.user.remove');
    });

    Route::group(['prefix' => 'profile'], function(){
        Route::get('/', 'ProfileController@index')->name('profile.index');
        Route::put('/', 'ProfileController@update')->name('profile.update');
    });

    Route::group(['prefix' => 'role'], function(){
        Route::get('/', 'Admin\AdminRoleController@index')->name('role.index');
        Route::get('/{id}', 'Admin\AdminRoleController@edit')->name('role.edit');
        Route::put('/{id}', 'Admin\AdminRoleController@update')->name('role.update');
    });
});

