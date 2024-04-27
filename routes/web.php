<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentController;

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

Route::get('/', function () {
    if (!auth()->check()) {
        return view('auth/login');
    }
    return route('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::prefix('user')->group(function(){
        Route::get('/view/{id}', [UserController::class, 'UserView'])->name('user.view');
        Route::get('/add/{id}', [UserController::class, 'UserAdd'])->name('user.add');
        Route::get('inv/{id}', [UserController::class, 'InvUser'])->name('user.inv');
        Route::post('/store/{id}', [UserController::class, 'UserStore'])->name('users.store');
        Route::get('/delete/{id_user}/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
        Route::get('/accept/{id}', [UserController::class, 'Accept'])->name('users.accept');
        Route::get('/refuse/{id}', [UserController::class, 'Refuse'])->name('users.refuse');
       
    });
    Route::prefix('document')->group(function(){
        Route::get('/view', [documentController::class, 'documentView'])->name('document.view');
        Route::get('/add', [documentController::class, 'documentAdd'])->name('document.add');
       
    });
    Route::prefix('profile')->group(function(){
        Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
        Route::get('/logout', [ProfileController::class, 'Logout'])->name('user.logout');
        });
});
