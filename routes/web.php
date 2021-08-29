<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'admin'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware(['auth'])->name('dashboard.store');
Route::post('/dasdhboard/{id}', [DashboardController::class, 'delete'])->middleware(['auth'])->name('delete');

// Route::resource('asd',DashboardController::class);

require __DIR__.'/auth.php';
