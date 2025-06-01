<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonSiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\PendaftaranSiswa\DashboardPendaftaranSiswaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramUnggulanController;
// Superadmin
use App\Http\Controllers\Superadmin\DashboardController as SuperadminDashboardController;
use App\Http\Controllers\Superadmin\UserController as SuperadminUserController;
use App\Http\Controllers\Superadmin\NewsController as SuperadminNewsController;
use App\Http\Controllers\Superadmin\ProgramUnggulanController as SuperadminProgramUnggulanController;
use App\Http\Controllers\Superadmin\GalleryController as SuperadminGalleryController;
use App\Http\Controllers\Superadmin\FacilityController as SuperadminFacilityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return response()->view('Errors.404', [], 404);
});

Route::get('/', [LandingPageController::class, 'index']);
// users
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::post('/login', LoginController::class)->name('login.submit');
Route::middleware('jwt.auth.blade')->group(function () {
    // Route::prefix('register')->group(function () {
    //     Route::get('/', [UserController::class, 'index'])->name('users.index');
    //     Route::post('/', [UserController::class, 'store'])->name('users.store');
    //     Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    //     Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // });
    //

    // buat route baru aja san buat registrasi nya fungsi nya di faste aja nnti
    Route::post('/logout', LogoutController::class)->name('logout');


    // siswa
    Route::prefix('register-siswa')->group(function () {
        Route::get('/', [PendaftaranSiswaController::class, 'index'])->name('berkasi.siswa.index');
        Route::put('/put/{idCalonSiswa}', [PendaftaranSiswaController::class, 'update'])->name('siswa.formulir');
    });
});

// siswa
Route::prefix('module-pendaftaran')->group(function () {
    Route::get('/', [DashboardPendaftaranSiswaController::class,'index'])->name('siswa.index');
});
Route::prefix('pendaftaran-siswa')->group(function () {
    Route::post('/', [CalonSiswaController::class, 'store'])->name('siswa.registrasi');
});

// News routes
Route::get('/berita', [NewsController::class, 'index'])->name('app.news.index');
Route::get('/berita/{news:slug}', [NewsController::class, 'show'])->name('app.news.show');

Route::get('/gallery', function () {
    return view('Module.Dashboard.gallery');
})->name('gallery.index');

// Resource routes for main controllers
Route::resource('users', UserController::class)->names('app.users');
Route::resource('calon-siswa', CalonSiswaController::class)->names('app.calon-siswa');
Route::resource('pendaftaran-siswa', PendaftaranSiswaController::class)->names('app.pendaftaran-siswa');
Route::resource('gallery', GalleryController::class)->names('app.gallery');
Route::resource('program-unggulan', ProgramUnggulanController::class)->names('app.program-unggulan');

// Resource routes for Superadmin controllers
Route::prefix('superadmin')->middleware('jwt.auth.blade')->group(function () {
    Route::get('/dashboard', [SuperadminDashboardController::class, 'index'])->name('superadmin.dashboard');
    Route::resource('users', SuperadminUserController::class)->names('superadmin.users');
    Route::resource('news', SuperadminNewsController::class)->names('superadmin.news');
    Route::resource('program-unggulan', SuperadminProgramUnggulanController::class)->names('superadmin.program-unggulan');
    Route::resource('gallery', SuperadminGalleryController::class)->names('superadmin.gallery');
    Route::resource('facility', SuperadminFacilityController::class)->names('superadmin.facility');
});

