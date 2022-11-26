<?php

use App\Models\User;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\AuthController;

// Router Landingpage
Route::get('/', [LandingpageController::class , 'index']);
Route::get('berita', [LandingpageController::class , 'berita']);
Route::get('visi_misi', [LandingpageController::class , 'visi_misi']);
Route::get('data_prestasi', [LandingpageController::class , 'data_prestasi'])->name('data_prestasi.index');
Route::get('pencarian_prestasi', [LandingpageController::class , 'pencarian_prestasi']);
// End

// Route Autentifikasi Login
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin',[AdminController::class, 'index'] )->name('admin');
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('user', [UserController::class, 'index'])->name('user');
    });
});
// 

// Route Login&Logout)
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('register', [AuthController::class , 'register'])->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
// 

Route::get('forget_password', [AuthController::class , 'forget_password'])->name('forget_password');

// Route Admin
Route::get('profil_admin',[AdminController::class , 'profil']);

    // Route Manajemen Mahasiswa
    Route::get('mahasiswa', [AdminController::class, 'mahasiswa'])->name('mahasiswa');
    Route::get('add_mahasiswa', [AdminController::class , 'add_mahasiswa']);
    Route::post('proses_tambah', [AdminController::class, 'proses_tambah'])->name('proses_tambah');
    Route::get('/edit_user/{id}', [AdminController::class , 'edit']);
    Route::post('proses_edit/{id}', [AdminController::class , 'proses_edit'])->name('proses_edit');
    Route::get('data_user/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('search_user', [AdminController::class , 'search']);
    // 

    // Route Manajemen Prestasi
    Route::get('prestasi', [PrestasiController::class , 'index'])->name('prestasi');
    Route::get('add_prestasi', [PrestasiController::class , 'add']);
    Route::post('prestasi', [PrestasiController::class , 'add_proses']);
    Route::get('prestasi/delete/{id}', [PrestasiController::class, 'delete']);
    Route::get('/edit_prestasi/{id}', [PrestasiController::class , 'edit'])->name('edit_prestasi');
    Route::post('update_prestasi/{id}', [PrestasiController::class , 'update_prestasi']);
    Route::get('/search', [PrestasiController::class , 'search']);
    // 

    // Route Manajemen Lomba
    Route::get('/lomba' , [LombaController::class , 'lomba'])->name('lomba');
    Route::post('lomba', [LombaController::class , 'add_proses_admin']);
    Route::get('lomba/delete/{id}', [LombaController::class, 'admin_delete']);
    // 
// End Route Admin


// Route User
Route::get('profil_user',[UserController::class , 'profil']);
Route::get('user_lomba',[UserController::class , 'user_lomba'])->name('user_lomba');
Route::get('daftarkan_lomba',[UserController::class , 'daftarkan_lomba']);
Route::post('user_lomba', [LombaController::class , 'add_proses_user']);
Route::get('user_lomba/delete/{id}', [LombaController::class, 'user_delete']);
// 



Route::get('tambahkan_berita', function () {
    return view('tambahkan_berita');
});



Route::post('upload_sertifikat' , [UserController::class , 'upload_sertifikat']);




Route::post('upload_file', [AdminController::class, 'upload_file'])->name('upload_file');


