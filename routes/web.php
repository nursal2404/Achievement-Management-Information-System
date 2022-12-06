<?php

use App\Models\User;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LandingpageController;

// Router Landingpage
    Route::get('/', [LandingpageController::class , 'index']);
    Route::get('berita', [LandingpageController::class , 'berita']);
    Route::get('postingan', [PostController::class , 'show']);
    Route::get('visi_misi', [LandingpageController::class , 'visi_misi']);
    Route::get('data_prestasi', [LandingpageController::class , 'data_prestasi'])->name('data_prestasi.index');
    Route::get('pencarian_prestasi', [LandingpageController::class , 'pencarian_prestasi']);
// End

// Route Autentifikasi Login
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
    // Route Admin
        Route::get('/admin',[AdminController::class, 'index'] )->name('admin');
        Route::get('profil_admin',[AdminController::class , 'profil']);

        // Route Manajemen Mahasiswa
        Route::get('mahasiswa', [AdminController::class, 'mahasiswa'])->name('mahasiswa');
        Route::get('add_mahasiswa', [AdminController::class , 'add_mahasiswa']);
        Route::post('proses_tambah', [AdminController::class, 'create_mahasiswa'])->name('daftarkan_mahasiswa');
        Route::get('/edit_mahasiswa/{id}', [AdminController::class , 'edit_mahasiswa']);
        Route::post('proses_edit/{id}', [AdminController::class , 'update_mahasiswa'])->name('update_mahasiswa');
        Route::get('mahasiswa/delete/{id}', [AdminController::class, 'delete_mahasiswa'])->name('admin.delete');
        // 

        // Route Manajemen Prestasi
        Route::get('prestasi', [PrestasiController::class , 'index'])->name('prestasi');
        Route::get('add_prestasi', [PrestasiController::class , 'admin_add_prestasi']);
        Route::post('prestasi', [PrestasiController::class , 'admin_create_prestasi']);
        Route::get('/edit_prestasi/{id}', [PrestasiController::class , 'admin_edit_prestasi'])->name('edit_prestasi');
        Route::post('update_prestasi/{id}', [PrestasiController::class , 'admin_update_prestasi']);
        Route::get('prestasi/delete/{id}', [PrestasiController::class, 'admin_delete_prestasi']);
        // 

        // Route Manajemen Lomba
        Route::get('/lomba' , [LombaController::class , 'lomba'])->name('lomba');
        Route::get('add_lomba', [LombaController::class , 'admin_add_lomba']);
        Route::post('lomba', [LombaController::class , 'admin_create_lomba']);
        Route::get('edit_lomba/{id}',[LombaController::class , 'admin_edit_lomba']);
        Route::post('update_lomba/{id}', [LombaController::class , 'admin_update_lomba'])->name('admin_update_lomba');
        Route::get('lomba/delete/{id}', [LombaController::class, 'admin_delete_lomba']);
        Route::get('perolehan_prestasi/{id}',[PrestasiController::class , 'perolehan_prestasi'])->name('input_prestasi');
        Route::post('konfirmasi_lomba/{id}', [PrestasiController::class , 'konfirmasi_lomba'])->name('konfirmasi_lomba'); 
        //

        // Route Manajemen Berita
        Route::get('berita', [PostController::class , 'index']);
        Route::get('tambahkan_berita', [AdminController::class , 'add_berita']);
        // 
    // End Route Admin

    });

    Route::group(['middleware' => ['cek_login:user']], function () {
    // Route User
        Route::get('user', [UserController::class, 'index'])->name('user');

       
        Route::get('profil_user',[UserController::class , 'profil']);
        Route::get('user_lomba',[UserController::class , 'user_lomba'])->name('user_lomba');
        Route::get('daftarkan_lomba',[UserController::class , 'daftarkan_lomba']);
        Route::post('user_lomba', [LombaController::class , 'user_create_lomba'])->name('add_proses_user.store');
        Route::get('user_edit_lomba/{id}',[LombaController::class , 'user_edit_lomba'])->name('user_edit_lomba');
        Route::get('user_lomba/delete/{id}', [LombaController::class, 'user_delete_lomba']);
        Route::get('user_prestasi',[UserController::class , 'user_prestasi'])->name('user_prestasi');
        // 
    });
});
// 

// Route Login&Logout)
Route::get('login', [AuthController::class , 'login'])->name('login');
Route::get('register', [AuthController::class , 'register'])->name('register');
Route::post('proses_register', [AuthController::class , 'proses_register'])->name('proses_register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
// 

Route::get('forget_password', [AuthController::class , 'forget_password'])->name('forget_password');