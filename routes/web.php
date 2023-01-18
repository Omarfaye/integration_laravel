<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
  /*  if(auth()->user()){
        auth()->user()->assignRole('user');
    }*/
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'role:admin'])->name('dashboard');

/*Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'role:admin'])->name('home');*/
/*})->middleware(['auth', 'verified'])->name('home');*/

Route::middleware('auth')->group(function () {
    Route::resource('/roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__ . '/atpro-translate.php';
