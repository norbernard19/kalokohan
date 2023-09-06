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
    return view('welcome');
});
Route::get('view_user', 'Controller@viewUser');

Route::get('/index', 'userController@indexPage')->name('index');
Route::get('/add', 'crudController@addStudents')->name('add');
Route::post('/store', 'crudController@store')->name('store');
Route::get('/list', 'crudController@tableList')->name('list');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


