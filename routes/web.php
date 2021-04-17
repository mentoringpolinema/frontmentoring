<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenteeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MentorController;
use Illuminate\Support\Facades\Auth;

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
// Cek Mentoring
Route::get('/cekMentoring', '\App\Http\Controllers\MainController@cekMentoring');

// Auth Routes
// Route::get('/auth', '\App\Http\Controllers\AuthController@index')->name('login');
// Route::post('/login', '\App\Http\Controllers\AuthController@login');
// Route::get('/logout', '\App\Http\Controllers\AuthController@logout');


// DASHBOARD ROUTES ======================================================================================================>
Route::middleware(['auth', 'checkRole:Panitia,Mentor,Mentee'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
});

// PANITIA ROUTES =========================================================================================================>
Route::middleware(['auth', 'checkRole:Panitia'])->group(function () {
    // Dashboard Routes ===================================================================================================>
    Route::get('/admin', '\App\Http\Controllers\AdminController@index');
    // Cetak ==============================================================================================================>
    Route::get('/admin/cetak', '\App\Http\Controllers\AdminController@cetak');
    // Kegiatan ===========================================================================================================>
        //Get Kegiatan
        Route::get('/admin/kegiatan', '\App\Http\Controllers\AdminController@kegiatan');
        //Add Kegiatan
        Route::post('/admin/kegiatan/addKegiatan', '\App\Http\Controllers\AdminController@addKegiatan');
        //Get Data By Id Kegiatan
        Route::post('/admin/kegiatan/getByIdKegiatan', '\App\Http\Controllers\AdminController@getByIdKegiatan')->name('getKegiatanByID');
        //Update Kegiatan
        Route::put('/admin/kegiatan', '\App\Http\Controllers\AdminController@editKegiatan');
        //Delete Kegiatan
        Route::get('/admin/{id_kegiatan}/delKegiatan', '\App\Http\Controllers\AdminController@delKegiatan');

    // Mentor ============================================================================================================>
        //Get Mentor
        Route::get('/admin/mentor', '\App\Http\Controllers\AdminController@mentor');
        //Get Mentor by ID
        Route::get('/admin/mentor/{id}', '\App\Http\Controllers\AdminController@mentorById');
        //Add Mentor
        Route::post('/admin/mentor/addMentor', '\App\Http\Controllers\AdminController@addMentor');
        //Update Mentor
        Route::put('/admin/mentor/{id}', '\App\Http\Controllers\AdminController@updateMentor');
        //Delete Mentor
        Route::delete('/admin/mentor/{id}', '\App\Http\Controllers\AdminController@delMentor');
        //Import Mentor
        Route::post('/admin/impMentor', '\App\Http\Controllers\AdminController@impMentor')->name('mentor.import');
        //Detail Mentor
        Route::get('/admin/detailMentor/{id}', '\App\Http\Controllers\AdminController@detailMentor');
        //Update Mentor
        Route::post('/admin/{id_mentor}/updMentor', '\App\Http\Controllers\AdminController@updMentor');
        //Export Excel
        Route::get('/admin/expMentor/', '\App\Http\Controllers\AdminController@exportMentorExcel');

    // Mentee ============================================================================================================>
        //Get Mentee
        Route::get('/admin/mentee', '\App\Http\Controllers\AdminController@mentee');

    // User Management ===================================================================================================>
        //Get Users
        Route::get('/admin/user', '\App\Http\Controllers\AdminController@user');

    // Data Management ===================================================================================================>
        //Get Data
        Route::get('/admin/data', '\App\Http\Controllers\AdminController@data');

        //Add Data 
            // Add Data Jurusan
            Route::post('/admin/addJurusan', '\App\Http\Controllers\AdminController@addJurusan');
            // Add Data Prodi
            Route::post('/admin/addProdi', '\App\Http\Controllers\AdminController@addProdi');
            //Delete Data
            Route::get('/admin/data', '\App\Http\Controllers\AdminController@data');
        // Export Data Jurusan
            //Export Excel
            Route::get('/admin/jurusan/extJur/', '\App\Http\Controllers\AdminController@extJur');
    // Materi ============================================================================================================>
        // Get Materi
        Route::get('/admin/materi', '\App\Http\Controllers\AdminController@materi');
        // Add Materi
        Route::post('/admin/materi/addMateri', '\App\Http\Controllers\AdminController@addMateri');
        // Delete Materi
        Route::get('/admin/materi/{id}', '\App\Http\Controllers\AdminController@delMateri');
        //Get Data By Id Materi
        Route::post('/admin/materi/getByIdMateri', '\App\Http\Controllers\AdminController@getByIdMateri')->name('getMateriByID');
        //Update Materi
        Route::put('/admin/materi', '\App\Http\Controllers\AdminController@editMateri');

    // Kelompok ==========================================================================================================>
        // Get Kelompok
        Route::get('/admin/kelompok', '\App\Http\Controllers\AdminController@kelompok');
        // Detail Kelompok
        Route::get('/admin/kelompok/detail', '\App\Http\Controllers\AdminController@detailKelompok');

    // Keluhan ===========================================================================================================>
        // Get Keluhan
        Route::get('/admin/keluhan', '\App\Http\Controllers\AdminController@keluhan');
        // Add Keluhan
    
    // Pertemuan =========================================================================================================>
        // Get Pertemuan
        Route::get('/admin/pertemuan', '\App\Http\Controllers\AdminController@pertemuan');
        // Add Pertemuan
        Route::post('/admin/addPertemuan', '\App\Http\Controllers\AdminController@addPertemuan');
        // Delete Pertemuan
        Route::get('/admin/delPertemuan/{id}', '\App\Http\Controllers\AdminController@delPertemuan');
        // Search Pertemuan
        Route::get('/admin/cariPertemuan/{id}', '\App\Http\Controllers\AdminController@cariPertemuan');
        // Detail Pertemuan
        Route::get('/admin/detPertemuan/{id}', '\App\Http\Controllers\AdminController@detPertemuan');
        // Edit Pertemuan

    // Pengumuman ========================================================================================================>
        // Get Pengumuman
        Route::get('/admin/pengumuman', '\App\Http\Controllers\AdminController@pengumuman');
        // Add Pengumuman
        Route::post('/admin/pengumuman/addPengumuman', '\App\Http\Controllers\AdminController@addPengumuman');
        // Del Pengumuman
        Route::get('/admin/{id}/delPengumuman', '\App\Http\Controllers\AdminController@delPengumuman');
        // Det Pengumuman
        Route::get('/admin/{id}/detPengumuman', '\App\Http\Controllers\AdminController@detPengumuman');
        // Edit Pengumuman
        Route::post('/admin/{id}/edtPengumuman', '\App\Http\Controllers\AdminController@edtPengumuman');

});
// MENTOR ROUTES =========================================================================================================>
Route::middleware(['auth', 'checkRole:Mentor'])->group(function () {
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
});

// MENTEE ROUTES =========================================================================================================>
Route::middleware(['auth', 'checkRole:Mentee'])->group(function () {
    // Dashboard
        // Get Dashboard
        Route::get('/mentee', '\App\Http\Controllers\MenteeController@index');
    
    // Kelompok
        // Get Kelompok
        Route::get('/mentee/kelompok', '\App\Http\Controllers\MenteeController@kelompok');
        
    // Profile 
        // Get Profile
        Route::get('/mentee/profile', '\App\Http\Controllers\MenteeController@profile');

    // Materi dan Tugas
        // Get Materi dan Tugas
        Route::get('/mentee/materi', '\App\Http\Controllers\MenteeController@materi');
        // Detail Materi 
        Route::get('/mentee/materi/detailMateri', '\App\Http\Controllers\MenteeController@detailMateri');
        // Detail Tugas 
        Route::get('/mentee/materi/detailTugas', '\App\Http\Controllers\MenteeController@detailTugas');

    // Pertemuan
        // Get Pertemuan
        Route::get('/mentee/pertemuan','\App\Http\Controllers\MenteeController@pertemuan');

    // Keluhan
        // Get Keluhan
        Route::get('/mentee/keluhan','\App\Http\Controllers\MenteeController@keluhan');

    // Pengganti
        // Get Pengganti
        Route::get('/mentee/pengganti','\App\Http\Controllers\MenteeController@pengganti');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
