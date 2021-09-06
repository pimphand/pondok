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
use App\Http\Controllers\Admin\Hostel\GalleryController;
use App\Http\Controllers\Admin\VideoController;
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
Route::get('/profil',[FrontendController::class, "profil"])->name('profil');
Route::get('/contact', [FrontendController::class, "contact"])->name('contact');
Route::get('/visionmission', [FrontendController::class, "visionmission"])->name('visionmission');
Route::get('female', [FrontendController::class, "female"])->name('female');
Route::get('/male', [FrontendController::class, "male"])->name('male');

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
    Route::resource('/video', VideoController::class);

    Route::prefix('santri')->group( function(){
        Route::resource('/putri', BuildingController::class);
        Route::get('/putra', [BuildingController::class, 'man'])->name('facility.man');
        Route::resource('image', GalleryController::class);
    });


});

require __DIR__.'/auth.php';
