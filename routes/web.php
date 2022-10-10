<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\FiturController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\User\DaftarUlangController;
use App\Http\Controllers\User\AbsensiController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use Illuminate\Support\Facades\Artisan;
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

//PENTING SLURRRR
Route::get('/generate', function (){
    Artisan::call('storage:link');
    echo 'ok';
});
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return 'DONE'; //Return anything
});

Route::get('/linkstorage', function () { $targetFolder = base_path().'/storage/app/public'; $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage'; symlink($targetFolder, $linkFolder); });


// User
Route::get('/', [FrontendController::class, 'home'])->name('Home');
Route::get('/profile',[FrontendController::class, 'profile'])->name('Profile');
Route::get('/tentang-kami',[FrontendController::class, 'tentangKami'])->name('AboutMe');
Route::get('/tata-tertib',[FrontendController::class, 'rules'])->name('Rules');

Route::get('/berhasil-daftar',[FrontendController::class, 'sukses'])->name('sukses');
Route::get('/berhasil-daftar/ulang',[FrontendController::class, 'suksesDaftarUlang'])->name('sukses.daftarUlang');

Route::get('/prestasi',[FrontendController::class, 'prestasi'])->name('Prestasi');
Route::get('/daftar',[FrontendController::class,'register'])->name('Register-user');

Route::post('/register/store/user', [RegisterController::class, 'register'])->name('register.store.user');
// Route::resource('/register', RegisterController::class);

Route::get('/daftar-ulang', [DaftarUlangController::class,'index'])->name('daftar.ulang');
Route::post('/daftar-ulang/store', [DaftarUlangController::class,'store'])->name('daftarulang.store');


// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

Route::middleware('auth')->group(function (){
    //Absen 
    Route::resource('/absensi', AbsensiController::class);

    // Admin
    Route::get('/dashboard',[DashboardController::class,'index'])->name('Dashboard');
    
    Route::get('/pendaftaran-baru',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranBaru'])->name('pendaftarn-baru');
    Route::delete('/hapus/pendaftar-baru/{id}',[\App\Http\Controllers\Admin\PendaftaranController::class , 'deletePendaftarBaru'])->name('hapus.pendaftaranBaru');
    Route::put('/update/pendaftar/{id}',[\App\Http\Controllers\Admin\PendaftaranController::class , 'updateStatusPendaftaran'])->name('update.pendaftaran');

    Route::get('/pendaftaran-ulang',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranUlang'])->name('pendaftarn-ulang');
    Route::delete('/hapus/pendaftar-ulang/{id}',[\App\Http\Controllers\Admin\PendaftaranController::class , 'deletePendaftaranUlang'])->name('hapus.pendaftaranUlang');

    // Prestasi

    Route::get('/admin/prestasi-sd',[PrestasiController::class, 'prestasiSD'])->name('prestasi-sd');
    Route::get('/admin/prestasi-remaja',[PrestasiController::class, 'prestasiRemaja'])->name('prestasi-remaja');
    Route::resource('/admin/prestasi', PrestasiController::class);
    Route::resource('/admin/gallery', GalleryController::class);
    Route::resource('/admin/fitur', FiturController::class);

    Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/statistic/{IdPeserta}', [PesertaController::class, 'statistic'])->name('statistic');

    Route::get('/peserta/statistik', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('/peserta/statistik',[PesertaController::class,'store'])->name('statistik.store');

    Route::get('event',[EventController::class, 'index'])->name('event.index');
    Route::get('event/create',[EventController::class, 'create'])->name('event.create');

    Route::post('event/store',[EventController::class, 'store'])->name('event.store');
    Route::delete('event/destroy/{id}',[EventController::class, 'delete'])->name('event.delete');
});

require __DIR__.'/auth.php';
