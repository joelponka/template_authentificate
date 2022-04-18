<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionsController;

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
    
    Route::get('lang/{locale}', [HomeController::class, 'lang'])->name('langue');

    Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
        
        //route du profil
        Route::get('profil', [ProfileController::class, 'profil'])->name('profil');
        Route::put('profilinformation', [ProfileController::class, 'profilinformation'])->name('profilinformation');
        Route::post('updatepassword', [ProfileController::class, 'update_password'])->name('update_password');
        
        Route::middleware(['can:users_manage'])->group(function() {
            //Dashboard
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            //route des utilisateurs
            Route::resource('users', UsersController::class)->except('show');
            //route des permissions
            Route::resource('permissions', PermissionsController::class)->except('show');
            //route des roles
            Route::resource('roles', RolesController::class)->except('show');
        });
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/test', [HomeController::class, 'test'])->name('test');

    require __DIR__.'/auth.php';

