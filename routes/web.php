<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuisController;
use Illuminate\Foundation\Application;
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

Route::get('/', function () {
    return render('home.Home');
});


// ADMIN ROUTES
Route::get('/admin/auth/login', [AdminController::class, "index_login"])
    ->name('admin.login');
Route::post('/admin/auth/login', [AdminController::class, "login_req"])
    ->name('admin.handleLogin');
Route::get('/admin/auth/logout', [AdminController::class, "logout"]);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('auth:webadmin');
Route::get('/admin/dashboard/list-kuis', [AdminController::class, 'index_list_kuis'])
    ->name('admin.dashboard.list-kuis')
    ->middleware('auth:webadmin');
Route::get('/admin/dashboard/list-kuis/d/{slug}', [KuisController::class, 'detail_kuis'])
    ->name('admin.kuis.detail')
    ->middleware('auth:webadmin');
Route::get('/admin/dashboard/list-kuis/d/toggle-jawaban/{id_soal}/{id_jawaban}', [KuisController::class, 'toggle_jawaban'])
    ->name('admin.kuis.toggle-jawaban')
    ->middleware('auth:webadmin');
