<?php

use App\Models\User;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LandingpageController;

// Router Landingpage
Route::get('/', [LandingpageController::class , 'index']);
Route::get('berita', [LandingpageController::class , 'berita']);
Route::get('visi_misi', [LandingpageController::class , 'visi_misi']);
Route::get('data_prestasi', [LandingpageController::class , 'data_prestasi']);
// End

Route::get('tambah_user', function () {
    return view('tambahuser');
})->name('tambah_user.index');

Route::post('proses_tambah', [AdminController::class, 'proses_tambah'])->name('proses_tambah');
Route::post('upload_file', [AdminController::class, 'upload_file'])->name('upload_file');



// Route Login&Logout)
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
// 

// Route Autentifikasi Login
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin',[AdminController::class, 'index'] )->name('admin');
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
    });
});
// 

Route::get('edit_user/{id}', [AdminController::class , 'edit']);
// Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('dasboard_user', function () {
    return view('main_user');
});

Route::get('/data_user', [AdminController::class, 'manajemen_user']);

Route::get('daftarkan_lomba', function () {
    return view('daftarkan_lomba');
});

Route::get('profil_admin', function () {
    return view('profil_admin');
});

Route::get('tambahkan_berita', function () {
    return view('tambahkan_berita');
});


Route::get('prestasi', [PrestasiController::class , 'index'])->name('prestasi');
Route::get('add_prestasi', [PrestasiController::class , 'add']);
Route::post('prestasi', [PrestasiController::class , 'add_proses']);
Route::get('prestasi/delete/{id}', [PrestasiController::class, 'delete']);
Route::get('edit_prestasi/{id}', [PrestasiController::class , 'edit']);


