<?php

use App\Http\Controllers\Admin\ActivityController;
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
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/kontak', [FrontendController::class, "contact"])->name('contact');
Route::get('/visi-dan-misi', [FrontendController::class, "visionmission"])->name('visionmission');
Route::get('/asrama-putri', [FrontendController::class, "female"])->name('female');
Route::get('/asrama-putra', [FrontendController::class, "male"])->name('male');
Route::get('/video', [FrontendController::class, "video"])->name('video');
Route::get('/photo', [FrontendController::class, "photo"])->name('photo');
Route::get('/sejarah', [FrontendController::class, "sejarah"])->name('sejarah');
Route::get('/pendaftaran', [FrontendController::class, "pendaftaran"])->name('pendaftaran');
Route::get('/guru', [FrontendController::class, "guru"])->name('guru');
Route::get('/kalender-akademik', [FrontendController::class, "kalender"])->name('kalender');
Route::get('/kegiatan-putri', [FrontendController::class, "kegiatanputri"])->name('kegiatanputri');
Route::get('/kegiatan-putra', [FrontendController::class, "kegiatanputra"])->name('kegiatanputra');

Route::get('/berita', [FrontendController::class, "news"])->name('user.news');
Route::get('/berita/detail/{news:slug}', [FrontendController::class, "detailNews"])->name('detail.news');

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
    Route::resource('/female', ActivityController::class);
    Route::get('/male', [ActivityController::class, 'man'])->name('activity.male');
    Route::resource('/man', ActivityController::class);
    Route::resource('/register', RegisterController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/photos', PictureController::class);
    Route::post('/pho', [GalleryController::class, "storePhoto"])->name("tambah");

    Route::prefix('santri')->group( function(){
        Route::resource('/putri', BuildingController::class);
        Route::get('/putra', [BuildingController::class, 'man'])->name('facility.man');
        Route::resource('/image', GalleryController::class);
    });

    Route::prefix('pendaftaran')->group( function(){
        Route::get('/tk', [RegisterController::class, 'tk'])->name('tk.index');
        Route::get('/mi', [RegisterController::class, 'mi'])->name('mi.index');
        Route::get('/smp', [RegisterController::class, 'smp'])->name('smp.index');
        Route::get('/sma', [RegisterController::class, 'sma'])->name('sma.index');
    });


});

require __DIR__.'/auth.php';
