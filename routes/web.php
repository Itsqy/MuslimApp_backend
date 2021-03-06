<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\API\DoaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DoaDzikirController;
use App\Http\Controllers\DzikirPagiPetangController;
use App\Http\Controllers\EmasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KhutbahController;
use App\Http\Controllers\MutabaahController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// doa
Route::get('/doa', [DoaController::class, 'doa'])->name('doa');

// user
Route::get('/editprofile/{id}', [UserController::class, 'editprofile'])->name('edit');
Route::get('/allUser', [UserController::class, 'allUser'])->name('allUser');
Route::get('/resetPass/{id}', [UserController::class, 'resetPass'])->name('resetPass');
Route::put('/updateProfile/{id}', [UserController::class, 'updateProfile'])->name('update');
Route::get('/toFormPass', [UserController::class, 'toFormPass'])->name('editPass');
Route::put('/storePass', [UserController::class, 'storePass'])->name('storePass');


// mutabaah
Route::controller(MutabaahController::class)->group(function () {
    Route::get('/mutabaah', 'index')->name('allMutabaah');
    Route::get('/mutabaah/form', 'toForm')->name('toForm');
    Route::post('/mutabaah/form/store', 'store')->name('store');
    Route::get('/mutabaah/form/edit/{id}', 'toFormEdit')->name('toFormEdit');
    Route::put('/mutabaah/form/update/{id}', 'updateMutabaah')->name('updateMutabaah');
    Route::delete('/mutabaah/form/delete/{id}', 'deleteMutabaah')->name('deleteMutabaah');
});

// emas
Route::controller(EmasController::class)->group(function () {
    Route::get('/emas', 'index')->name('allEmas');
    Route::get('/emas/store', 'create')->name('toFormEmas');
    Route::post('/emas/store', 'store')->name('storeEmas');
    Route::get('/emas/edit/{id}', 'edit')->name('editEmas');
    Route::put('/emas/update/{id}', 'update')->name('updateEmas');
    Route::delete('/emas/delete/{id}', 'destroy')->name('deleteEmas');
});

// kategori
Route::controller(KategoriController::class)->group(function () {
    Route::get('/kategori', 'index')->name('allKat');
    Route::get('/kategori/store', 'create')->name('toFormKat');
    Route::post('/kategori/store', 'store')->name('storeKat');
    // Route::get('/kategori/edit/{id}', 'edit')->name('editKat');
    // Route::put('/kategori/update/{id}', 'update')->name('updateKat');
    Route::delete('/kategori/delete/{id}', 'destroy')->name('deleteKat');
});

// berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/berita', 'index')->name('allBerita');
    Route::get('/berita/create', 'toFormBerita')->name('toFormBerita');
    Route::post('/berita/store', 'store')->name('storeBerita');
    Route::get('/berita/edit/{id}', 'toFormEdit')->name('editBerita');
    Route::put('/berita/update/{id}', 'updateBerita')->name('updateBerita');
    Route::delete('/berita/delete/{id}', 'deleteBerita')->name('deleteBerita');
});


// khutbah
Route::controller(KhutbahController::class)->group(function () {
    Route::get('/khutbah', 'getKhutbah')->name('allKhutbah');
    Route::get('/Khutbah/create', 'toFormKhutbah')->name('toFormKhutbah');
    Route::post('/Khutbah/store', 'storeKhutbah')->name('storeKhutbah');
    Route::get('/Khutbah/edit/{id}', 'toFormEdit')->name('editKhutbah');
    Route::put('/Khutbah/update/{id}', 'updateKhutbah')->name('updateKhutbah');
    Route::delete('/Khutbah/delete/{id}', 'deleteKhutbah')->name('deleteKhutbah');
});



// Doa
Route::controller(DoaDzikirController::class)->group(function () {
    Route::get('/dzikir', 'getDzikir')->name('allDzikir');
    Route::get('/Dzikir/create', 'toFormDzikir')->name('toFormDzikir');
    Route::post('/Dzikir/store', 'storeDzikir')->name('storeDzikir');
    Route::get('/Dzikir/edit/{id}', 'toFormEdit')->name('editDzikir');
    Route::put('/Dzikir/update/{id}', 'updateDzikir')->name('updateDzikir');
    Route::delete('/Dzikir/delete/{id}', 'deleteDzikir')->name('deleteDzikir');
});


// Dzikir PP
Route::controller(DzikirPagiPetangController::class)->group(function () {
    Route::get('/dzikirpp', 'getDzikirpp')->name('allDzikirpp');
    Route::get('/Dzikirpp/create', 'toFormDzikirpp')->name('toFormDzikirpp');
    Route::post('/Dzikirpp/store', 'storeDzikirpp')->name('storeDzikirpp');
    Route::get('/Dzikirpp/edit/{id}', 'toFormEdit')->name('editDzikirpp');
    Route::put('/Dzikirpp/update/{id}', 'updateDzikirpp')->name('updateDzikirpp');
    Route::delete('/Dzikirpp/delete/{id}', 'deleteDzikirpp')->name('deleteDzikirpp');
});

// symlink
Route::get('/migrate', function () {
    \Artisan::call('migrate:fresh');
    dd('migrated!');
});

Route::get('/link', function () {
    \Artisan::call('storage:link');
    dd('linked!');
});

Route::get('/optimize', function () {
    \Artisan::call('optimize:clear');
    dd('optimized!');
});

Route::get('/cacl', function () {
    \Artisan::call('cache:clear');
    dd('config cached');
});

Route::get('/coca', function () {
    \Artisan::call('config:cache');
    dd('config cached');
});

Route::get('/cocl', function () {
    \Artisan::call('config:clear');
    dd('config clear');
});

Route::get('/roca', function () {
    \Artisan::call('route:cache');
    dd('config cached');
});

Route::get('/rocl', function () {
    \Artisan::call('route:clear');
    dd('config clear');
});

Route::get('/opti', function () {
    \Artisan::call('optimize');
    dd('forced');
});

Route::get('/vica', function () {
    \Artisan::call('view:cache');
    dd('view cached!');
});

Route::get('/vicl', function () {
    \Artisan::call('view:clear');
    dd('view cleare!');
});
