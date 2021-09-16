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
use App\Http\Controllers\DashboardController as tst;
use App\Http\Controllers\Admin\CalendarAcademicController;
use App\Http\Controllers\Admin\Hostel\GalleryController;
use App\Http\Controllers\Admin\PendaftaranController;
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

Route::get('/pass', [FrontendController::class, "pass"])->name('pass');
Route::get('/passs', [FrontendController::class, "enter"])->name('enter');
Route::get('/passd', [FrontendController::class, "passsd"])->name('passsd');
Route::get('/passsd', [FrontendController::class, "entersd"])->name('entersd');
Route::get('/passmp', [FrontendController::class, "passsmp"])->name('passsmp');
Route::get('/passssmp', [FrontendController::class, "entersmp"])->name('entersmp');
Route::get('/passma', [FrontendController::class, "passsma"])->name('passsma');
Route::get('/passsma', [FrontendController::class, "entersma"])->name('entersma');

Route::get('/profil',[FrontendController::class, "profil"])->name('profil');
Route::get('/kontak', [FrontendController::class, "contact"])->name('contact');
Route::get('/visi-dan-misi', [FrontendController::class, "visionmission"])->name('visionmission');
Route::get('/asrama-putri', [FrontendController::class, "female"])->name('female');
Route::get('/asrama-putra', [FrontendController::class, "male"])->name('male');
Route::get('/video', [FrontendController::class, "video"])->name('video');
Route::get('/photo', [FrontendController::class, "photo"])->name('photo');
Route::get('/sejarah', [FrontendController::class, "sejarah"])->name('sejarah');
Route::get('/{id}/M8EzhMUO6Opsi1ZCY0SEchpkW22v02202201zb1zb1zbVYoc2201zbSEchpkEzhMUOWVYY0SEchocc2201', [FrontendController::class, "pendaftaran"])->name('pendaftaran');
//Error
// Route::get('/M8EzhMUO6Opsi1ZCY0SEchpkW22v02202201zb1zb1zbVYoc2201zbSEchpkEzhMUOWVYY0SEchocc2201', [FrontendController::class, "pendaftaran"])->name('pendaftaran');
Route::get('/M8EzhMUO6Opsi1ZCY0SEchpkW22v02202201zb1zb1zbVYoc2201zbSEchpkEzhMUOWVYY0SEchocc2201', [FrontendController::class, "pendaftaransd"])->name('pendaftaransd');
Route::get('/M8EzhMUO6Opsi1ZCY0SEchpkW22v02202201zb1zb1zbVYoc2201zbSEchpkEzhMUOWVYY0SEchocc2201', [FrontendController::class, "pendaftaransmp"])->name('pendaftaransmp');
Route::get('/M8EzhMUO6Opsi1ZCY0SEchpkW22v02202201zb1zb1zbVYoc2201zbSEchpkEzhMUOWVYY0SEchocc2201', [FrontendController::class, "pendaftaransma"])->name('pendaftaransma');

Route::get('/guru', [FrontendController::class, "guru"])->name('guru');
Route::get('/kalender-akademik', [FrontendController::class, "kalender"])->name('kalender');
Route::get('/kegiatan-putri', [FrontendController::class, "kegiatanputri"])->name('kegiatanputri');
Route::get('/kegiatan-putra', [FrontendController::class, "kegiatanputra"])->name('kegiatanputra');
Route::get('/berita', [FrontendController::class, "news"])->name('user.news');
Route::get('/berita/detail/{news:slug}', [FrontendController::class, "detailNews"])->name('detail.news');
Route::get('/daftar-RA', [FrontendController::class, "ra"])->name('daftar-ra');
Route::get('/daftar-SD', [FrontendController::class, "sd"])->name('daftar-sd');
Route::get('/daftar-SMP', [FrontendController::class, "smp"])->name('daftar-smp');
Route::get('/daftar-SMA', [FrontendController::class, "sma"])->name('daftar-sma');


Route::get('/test', function () {
    $data = Gallery::all();
    return view('dashboard', compact('data'));
});

// Auth::routes(['register' => false]);

Route::post('/test', [tst::class, 'simpan'])->name('test');
// Route::post('/test', [BuildingController::class, 'store'])->name('test');

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

    Route::prefix('informasi')->group( function(){
        Route::get('/ra', [PendaftaranController::class, 'ra'])->name('ra');
        Route::get('/sd', [PendaftaranController::class, 'sd'])->name('sd');
        Route::get('/smp', [PendaftaranController::class, 'smp'])->name('smp');
        Route::get('/sma', [PendaftaranController::class, 'sma'])->name('sma');
        Route::resource('/daftar', PendaftaranController::class);
    });

    Route::prefix('pendaftaran')->group( function(){
        Route::get('/ra', [RegisterController::class, 'ra'])->name('ra.index');
        Route::get('/sd', [RegisterController::class, 'sd'])->name('sd.index');
        Route::get('/smp', [RegisterController::class, 'smp'])->name('smp.index');
        Route::get('/sma', [RegisterController::class, 'sma'])->name('sma.index');
        // Route::get('/sma', [RegisterController::class, 'rederect'])->name('rederect');
        Route::get('/daftar-detail/{id}', [RegisterController::class, 'show'])->name('detail');
        Route::get('/daftar-edit/{id}', [RegisterController::class, 'edit'])->name('edit');
        Route::post('/daftar-update/{id}', [RegisterController::class, 'update'])->name('update');
        Route::delete('/daftar-hapus/{id}', [RegisterController::class, 'destroy'])->name('daftar');
    });


});

require __DIR__.'/auth.php';
