<?php

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

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminHelpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/admin/dashboard/show', [AdminDashboardController::class, 'show'])->name("admin.dashboard.show");
Route::get('/admin/help/show', [AdminHelpController::class, 'show'])->name("admin.help.show");
