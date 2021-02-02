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

// Main Routes
Route::get('/', '\App\Http\Controllers\MainController@index');
Route::get('/main', '\App\Http\Controllers\MainController@index');
Route::get('/cekMentoring', '\App\Http\Controllers\MainController@cekMentoring');

// Auth Routes
Route::get('/auth', '\App\Http\Controllers\AuthController@index')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@login');
Route::get('/logout', '\App\Http\Controllers\AuthController@logout');

// Dashboard Routes
Route::group(['middleware' => 'auth'], function () {
    //Admin Routes
    Route::get('/admin', '\App\Http\Controllers\AdminController@index');

        //Cetak
        Route::get('/admin/cetak', '\App\Http\Controllers\AdminController@cetak'); 

        // Mentor
        Route::get('/admin/mentor', '\App\Http\Controllers\AdminController@mentor'); 
        Route::post('/admin/addMentor', '\App\Http\Controllers\AdminController@addMentor'); 
        Route::get('/admin/{id_mentor}/delMentor', '\App\Http\Controllers\AdminController@delMentor'); 
    
    
    // Mentor Routes
    
    // Mentee Routes
    
});