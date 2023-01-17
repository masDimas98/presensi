<?php

use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\GedungController;
use App\Http\Controllers\api\HakaksesController;
use App\Http\Controllers\api\KelasController;
use App\Http\Controllers\api\RuanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login']);
Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function () {
    // manggil controller sesuai bawaan laravel 8
    Route::post('logout', [AuthController::class, 'logout']);
    // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
    Route::post('logoutall', [AuthController::class, 'logoutall']);
});

Route::apiResource('/dosen', DosenController::class);
Route::apiResource('/gedung', GedungController::class);
Route::apiResource('/hakakses', HakaksesController::class);
Route::apiResource('/ruangan', RuanganController::class);
