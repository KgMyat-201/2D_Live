<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'userDashboard'])->name('dashboard');

// Admin Dashboard
Route::group(['prefix' => 'admin/', 'middleware' => ['role:master|agent']], function(){

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::resource('users', UserController::class);
    // Route::resource('permissions', PermissionController::class);
    // Route::resource('roles', RoleController::class);
    
});