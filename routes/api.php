<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmasController;
use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\API\DoaDzikirController;
use App\Http\Controllers\API\MutabaahController;
use App\Http\Controllers\API\KhutbahController;
use App\Http\Controllers\API\UserController;
use App\Models\Khutbah;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// auth
Route::controller(AuthController::class)->group(function () {
    Route::post('/regis', 'regis');
    Route::post('/login', 'login');
});

// user
Route::controller(UserController::class)->group(function () {
    Route::post('/updateUser/{user_id}', 'updateUser');
    Route::get('/allUser', 'getAllUser');
    Route::get('/resetPass/{id}', 'resetPass');
    Route::post('/editPass/{id}', 'storePass');
    Route::post('/storeGambar/{id}', 'storeGambar');
});


// emas
Route::controller(EmasController::class)->group(
    function () {
        Route::get('/allEmas', 'getEmas');
        Route::post('/storeEmas', 'storeEmas');
        Route::post('/updateEmas/{emas_id}', 'updateEmas');
        Route::delete('/deleteEmas/{emas_id}', 'deleteEmas');
    }
);
// mutabaah
Route::controller(MutabaahController::class)->group(function () {
    Route::get('/allMutabaah', 'getMutabaah');
    Route::get('/allMutabaah/{id}', 'detailMutabaah');
    Route::post('/storeMutabaah', 'storeMutabaah');
    Route::post('/updateMutabaah/{id}', 'updateMutabaah');
    Route::delete('/deleteMutabaah/{id}', 'deleteMutabaah');
});

// berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/allBerita', 'getBerita');
    Route::get('/allBeritadanKhutbah', 'getBeritadanKhutbah');
    Route::get('/allBerita/{id}', 'detailBerita');
    Route::post('/storeBerita', 'storeBerita');
    Route::post('/updateBerita/{berita_id}', 'updateBerita');
    Route::delete('/deleteBerita/{berita_id}', 'deleteBerita');
});

// khutbah
Route::controller(KhutbahController::class)->group(function () {
    Route::get('/allKhutbah', 'getKhutbah');
    Route::post('/storeKhutbah', 'storeKhutbah');
    Route::post('/updateKhutbah/{khutbah_id}', 'updateKhutbah');
    Route::delete('/deleteKhutbah/{khutbah_id}', 'deleteKhutbah');
});

// Doa dan Dzikir
Route::controller(DoaDzikirController::class)->group(function () {
    Route::get('/allDzikir', 'getDzikir');
    Route::post('/storeDzikir', 'storeDzikir');
    Route::post('/updateDzikir/{dzikir_id}', 'updateDzikir');
    Route::delete('/deleteDzikir/{dzikir_id}', 'deleteDzikir');
});
