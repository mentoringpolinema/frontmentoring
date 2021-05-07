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
Route::get('/cekMentoring/hasil', '\App\Http\Controllers\MainController@cek');

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
        //Get Cetak
        Route::get('/admin/cetak', '\App\Http\Controllers\AdminController@cetak');
        //Detail Cetak
        Route::get('/admin/cetak/detail/{id}', '\App\Http\Controllers\AdminController@detailCetak');
        //Accept Cetak
        Route::post('/admin/cetak/acc/{id}', '\App\Http\Controllers\AdminController@accept');
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
        //Export PDF
        Route::get('/admin/expMentorP/', '\App\Http\Controllers\AdminController@exportMentorPDF');

    // Mentee ============================================================================================================>
        //Get Mentee
        Route::get('/admin/mentee', '\App\Http\Controllers\AdminController@mentee');
        //Detail Mentee
        Route::get('/admin/detailMentee/{id}', '\App\Http\Controllers\AdminController@detailMentee');
        //Get Mentee by ID
        Route::get('/admin/mentee/{id}', '\App\Http\Controllers\AdminController@menteeById');
        //Add Mentee
        Route::post('/admin/mentee/addMentee', '\App\Http\Controllers\AdminController@addMentee');
        //Update Mentee
        Route::put('/admin/mentee/{id}', '\App\Http\Controllers\AdminController@updateMentee');
        //Delete Mentee
        Route::delete('/admin/mentee/{id}', '\App\Http\Controllers\AdminController@delMentee');
        //Import Mentee
        Route::post('/admin/impMentee', '\App\Http\Controllers\AdminController@impMentee')->name('mentee.import');
        //Update Mentee
        Route::post('/admin/{id_mentee}/updMentee', '\App\Http\Controllers\AdminController@updMentee');
        //Export Excel
        Route::get('/admin/expMentee/', '\App\Http\Controllers\AdminController@exportMenteeExcel');
        //Export PDF
        Route::get('/admin/expMenteeP/', '\App\Http\Controllers\AdminController@exportMenteePDF');
        // Get Prodi By Id Jurusan
        Route::get('/admin/getProdiByIdJurusan/{id}', '\App\Http\Controllers\AdminController@getProdiByIdJurusan')->name('getProdiByIdJurusan');
        // Get Kelas BY Id Prodi
        Route::get('/admin/getKelasByIdProdi/{id}', '\App\Http\Controllers\AdminController@getKelasByIdProdi')->name('getKelasByIdProdi');

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
             // Add Data Kelas
             Route::post('/admin/addKelas', '\App\Http\Controllers\AdminController@addKelas');
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

    // Tugas ============================================================================================================>
        // Get Tugas
        Route::get('/admin/tugas', '\App\Http\Controllers\AdminController@tugas');
        // Add Tugas
        Route::post('/admin/tugas/addTugas', '\App\Http\Controllers\AdminController@addTugas');
        // Delete Tugas
        Route::get('/admin/tugas/{id}', '\App\Http\Controllers\AdminController@delTugas');
        //Get Data By Id Tugas
        Route::post('/admin/tugas/getByIdTugas', '\App\Http\Controllers\AdminController@getByIdTugas')->name('getTugasByID');
        //Update Tugas
        Route::put('/admin/tugas', '\App\Http\Controllers\AdminController@editTugas');

    // Kelompok ==========================================================================================================>
        // Get Kelompok
        Route::get('/admin/kelompok', '\App\Http\Controllers\AdminController@kelompok');
        // Detail Kelompok
        Route::get('/admin/kelompok/{id}', '\App\Http\Controllers\AdminController@detailKelompok');
        // Add Kelompok
        Route::post('/admin/kelompok/add', '\App\Http\Controllers\AdminController@addKelompok');
        // Delete Kelompok
        Route::get('/admin/kelompok/del/{id}', '\App\Http\Controllers\AdminController@delKelompok');
        // Delete Kelompok Mentee
        Route::get('/admin/kelompok/delM/{id}', '\App\Http\Controllers\AdminController@delMentKelompok');
        // Add Kelompok Mentee
        Route::post('/admin/kelompok/addM/{id}', '\App\Http\Controllers\AdminController@addMenteeKel');
        // Add Mentee 
        Route::get('/admin/kelompok/tambah/{id}', '\App\Http\Controllers\AdminController@addMenKelompok');

    // Keluhan ===========================================================================================================>
        // Get Keluhan
        Route::get('/admin/keluhan', '\App\Http\Controllers\AdminController@keluhan');
        // Detail Keluhan
        Route::get('/admin/keluhan/{id}', '\App\Http\Controllers\AdminController@detailKeluhan');
        // Jawab Keluhan
        Route::get('/admin/keluhan/{id}/update', '\App\Http\Controllers\AdminController@jawabKeluhan');


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

    // Cetak Bukti
        // Get Bukti
        Route::get('/admin/bukti', '\App\Http\Controllers\AdminController@cetak');

});
// MENTOR ROUTES =========================================================================================================>
Route::middleware(['auth', 'checkRole:Mentor'])->group(function () {
    // Dashboard
    Route::get('/mentor', '\App\Http\Controllers\MentorController@index');
        // Profile
        Route::get('/mentor/profile', '\App\Http\Controllers\MentorController@profile');
    // Kelompok
        // Get Kelompok
        Route::get('/mentor/kelompok/{id}', '\App\Http\Controllers\MentorController@kelompok');

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
        Route::get('/mentee/kelompok/{id}', '\App\Http\Controllers\MenteeController@kelompok');

    // Profile
        // Get Profile
        Route::get('/mentee/profile', '\App\Http\Controllers\MenteeController@profile');
        // Edit Profile
        Route::post('/mentee/profile/update/{id}', '\App\Http\Controllers\MenteeController@updProfile');

    // Materi dan Tugas
        // Get Materi dan Tugas
        Route::get('/mentee/materi', '\App\Http\Controllers\MenteeController@materi');
        // Detail Materi
        Route::get('/mentee/materi/{id}', '\App\Http\Controllers\MenteeController@detailMateri');
        // Detail Tugas
        Route::get('/mentee/tugas/detailTugas', '\App\Http\Controllers\MenteeController@detailTugas');

    // Pertemuan
        // Get Pertemuan
        Route::get('/mentee/pertemuan','\App\Http\Controllers\MenteeController@pertemuan');
        // Detail Pertemuan
        Route::get('/mentee/pertemuan/detail/{id}', '\App\Http\Controllers\MenteeController@detPertemuan');
        // Absensi Pertemuan
        Route::post('/mentee/pertemuan/absenPertemuan', '\App\Http\Controllers\MenteeController@absenPertemuan');

    // Keluhan
        // Get Keluhan
        Route::get('/mentee/keluhan','\App\Http\Controllers\MenteeController@keluhan');
        // Tanya Keluhan
        Route::get('/mentee/keluhan/{id}/update','\App\Http\Controllers\MenteeController@tanyaKel');

    // Pengganti
        // Get Pengganti
        Route::get('/mentee/pengganti','\App\Http\Controllers\MenteeController@pengganti');
        // Detail Pengganti
        Route::get('/mentee/detailPengganti', '\App\Http\Controllers\MenteeController@detailPengganti');
    // Cetak
        // Get Cetak
        Route::get('/mentee/cetak/{id}', '\App\Http\Controllers\MenteeController@cetak');
        // Get Print
        Route::get('/mentee/print', '\App\Http\Controllers\MenteeController@print');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
