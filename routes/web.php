<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Hostel\BuildingController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\VisionMisionController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\CalendarAcademicController;
use App\Http\Controllers\FrontendController;
use App\Models\Gallery;

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

Route::get('/', [FrontendController::class, "home"])->name('home');

Route::get('/test', function () {
    $data = Gallery::all();
    return view('dashboard', compact('data'));
});

// Auth::routes(['register' => false]);

Route::post('/test', [BuildingController::class, 'store'])->name('test');

Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/kategori-berita', NewsCategoryController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/profile', ProfilController::class);
        Route::resource('/contact', ContactController::class);
        Route::resource('/vision', VisionMisionController::class);
        Route::resource('/teacher', TeacherController::class);
        Route::resource('/calender', CalendarAcademicController::class);
        Route::resource('/facility', BuildingController::class);

});

require __DIR__.'/auth.php';
