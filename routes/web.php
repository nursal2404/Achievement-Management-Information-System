<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('tambah_user', function () {
    return view('tambahuser');
})->name('tambah_user.index');

Route::post('proses_tambah', [AdminController::class, 'proses_tambah'])->name('proses_tambah');

Route::get('berita', function () {
    return view('berita');
});

Route::get('visi_misi', function () {
    return view('visimisi');
});

Route::get('informatika', function () {
    return view('informatika');
});

Route::get('teknik_sipil', function () {
    return view('tekniksipil');
});

Route::get('teknik_elektro', function () {
    return view('teknikelektro');
});

Route::get('teknik_mesin', function () {
    return view('teknikmesin');
});

Route::get('arsitektur', function () {
    return view('arsitektur');
});

Route::get('sisteminformasi', function () {
    return view('sisteminformasi');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin',[AdminController::class, 'index'] )->name('admin');
        //Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
        //Route::resource('user', UserController::class);
    });
});


Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('/dasboard_user', function () {
    return view('main_user');
});

Route::get('/data_user', [AdminController::class, 'manajemen_user']);
