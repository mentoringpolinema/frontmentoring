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

        // Cetak
        Route::get('/admin/cetak', '\App\Http\Controllers\AdminController@cetak'); 
        
        // Kegiatan
            //Get Kegiatan
            Route::get('/admin/kegiatan', '\App\Http\Controllers\AdminController@kegiatan'); 
            //Add Kegiatan
            Route::post('/admin/addKegiatan', '\App\Http\Controllers\AdminController@addKegiatan');
            //Delete Kegiatan
            Route::get('/admin/{id_kegiatan}/delKegiatan', '\App\Http\Controllers\AdminController@delKegiatan');  

        // Mentor
            //Get Mentor
            Route::get('/admin/mentor', '\App\Http\Controllers\AdminController@mentor'); 
            //Add Mentor
            Route::post('/admin/addMentor', '\App\Http\Controllers\AdminController@addMentor'); 
            //Delete Mentor
            Route::get('/admin/{id_mentor}/delMentor', '\App\Http\Controllers\AdminController@delMentor');

        // Mentee
            //Get Mentee
            Route::get('/admin/mentee', '\App\Http\Controllers\AdminController@mentee');

        // User Management
            //Get Users
            Route::get('/admin/user', '\App\Http\Controllers\AdminController@user');

        // Data Management
            //Get Data
            Route::get('/admin/data', '\App\Http\Controllers\AdminController@data');

            //Add Data 
                // Add Data Jurusan
                Route::post('/admin/addJurusan', '\App\Http\Controllers\AdminController@addJurusan');
                // Add Data Prodi
                Route::post('/admin/addProdi', '\App\Http\Controllers\AdminController@addProdi');
                
            //Delete Data
            Route::get('/admin/data', '\App\Http\Controllers\AdminController@data');

        // Materi
            // Get Materi
            Route::get('/admin/materi', '\App\Http\Controllers\AdminController@materi');
            // Add Materi
            Route::post('/admin/addMateri', '\App\Http\Controllers\AdminController@addMateri');
        
        // Kelompok
            // Get Kelompok
            Route::get('/admin/kelompok', '\App\Http\Controllers\AdminController@kelompok');
            // Add Kelompok


    // Mentor Routes 
    
        // Dashboard
        Route::get('/mentor', '\App\Http\Controllers\MentorController@index');
        // Profile
        Route::get('/mentor/profile', '\App\Http\Controllers\MentorController@profile');
        // Kelompok
            // Get Kelompok
            Route::get('/mentor/kelompok', '\App\Http\Controllers\MentorController@kelompok');

        // Materi
            // Get Materi
            Route::get('/mentor/materi', '\App\Http\Controllers\MentorController@materi');
            // Add Materi
            Route::post('/mentor/addMateri', '\App\Http\Controllers\MentorController@addMateri');

    // Mentee Routes
    
});