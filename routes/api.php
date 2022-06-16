<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmasController;
use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\API\DoaDzikirController;
use App\Http\Controllers\API\MutabaahController;
use App\Http\Controllers\API\KhutbahController;
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


// emas
Route::controller(EmasController::class)->group(
    function () {
        Route::get('/allEmas', 'getEmas')->middleware('auth');
        Route::post('/storeEmas', 'storeEmas')->middleware();
        Route::post('/updateEmas/{emas_id}', 'updateEmas')->middleware();
        Route::delete('/deleteEmas/{emas_id}', 'deleteEmas')->middleware();
    }
);
// mutabaah
Route::controller(MutabaahController::class)->group(function () {
    Route::get('/allMutabaah', 'getMutabaah')->middleware();
    Route::get('/allMutabaah/{id}', 'detailMutabaah')->middleware();
    Route::post('/storeMutabaah', 'storeMutabaah')->middleware('auth:sanctum');
});

// berita
Route::controller(BeritaController::class)->group(function () {
    Route::get('/allBerita', 'getBerita')->middleware();
    Route::get('/allBerita/{id}', 'detailBerita')->middleware();
    Route::post('/storeBerita', 'storeBerita')->middleware();
    Route::post('/updateBerita/{berita_id}', 'updateBerita')->middleware();
    Route::delete('/deleteBerita/{berita_id}', 'deleteBerita')->middleware();
});

// khutbah
Route::controller(KhutbahController::class)->group(function () {
    Route::get('/allKhutbah', 'getKhutbah   ');
    Route::post('/storeKhutbah', 'storeKhutbah')->middleware();
    Route::post('/updateKhutbah/{khutbah_id}', 'updateKhutbah')->middleware();
    Route::delete('/deleteKhutbah/{khutbah_id}', 'deleteKhutbah')->middleware();
});

// Doa dan Dzikir
Route::controller(DoaDzikirController::class)->group(function () {
    Route::get('/allDzikir', 'getDzikir');
    Route::post('/storeDzikir', 'storeDzikir')->middleware();
    Route::post('/updateDzikir/{dzikir_id}', 'updateDzikir')->middleware();
    Route::delete('/deleteDzikir/{dzikir_id}', 'deleteDzikir')->middleware();
});
