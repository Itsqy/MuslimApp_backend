<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmasController;
use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\API\MutabaahController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\KhutbahController as APIKhutbahController;
use App\Http\Controllers\KhutbahController;
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

// Route::post('login', [ApiController::class, 'authenticate']);
// Route::post('register', [ApiController::class, 'register']);
// Route::group(['middleware' => ['jwt.verify']], function () {
//     Route::get('logout', [ApiController::class, 'logout']);
//     Route::get('get_user', [ApiController::class, 'get_user']);
//     Route::get('products', [ProductController::class, 'index']);
//     Route::get('products/{id}', [ProductController::class, 'show']);
//     Route::post('create', [ProductController::class, 'store']);
//     Route::put('update/{product}',  [ProductController::class, 'update']);
//     Route::delete('delete/{product}',  [ProductController::class, 'destroy']);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// auth
Route::controller(AuthController::class)->group(function () {
    Route::post('/regis', 'regis');
    Route::post('/login', 'login');
});


// emas
Route::get('/allEmas', [EmasController::class, 'getEmas'])->middleware('auth');

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
});

// khutbah
Route::controller(APIKhutbahController::class)->group(function () {
    Route::get('/allKhutbah', 'getKhutbah   ');
});
