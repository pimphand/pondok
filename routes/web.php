<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilController;

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
Route::get('/test', function () {
    return view('dashboard');
});

// Auth::routes(['register' => false]);

// Route::get('/', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/kategori-berita', NewsCategoryController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/profile', ProfilController::class);

});

require __DIR__.'/auth.php';
