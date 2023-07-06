<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\FeauturedController;
use App\Http\Controllers\Api\ProjectsController;
use App\Http\Controllers\Api\TDBController;
use App\Http\Controllers\Api\KhanbankController;
use App\Http\Controllers\Api\CustomResponseController;

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

// News
Route::get('/news', [NewsController::class, 'list'])->name('Мэдээний жагсаалт');
Route::get('/news/{id}', [NewsController::class, 'get'])->name('Сонгогдсон мэдээ');

// Projects
Route::get('/projects', [ProjectsController::class, 'list'])->name('Төслийн жагсаалт');

// Config
Route::get('/feautured', [FeauturedController::class, 'get'])->name('Feautured Post');

Route::get('/reqs', [CustomResponseController::class, 'index'])->name('Get Res');
Route::get('/paymentapprove', [CustomResponseController::class, 'paymentapprove'])->name('getpaymentapprove');
Route::post('/paymentapprove', [CustomResponseController::class, 'paymentapprove'])->name('paymentapprove');
Route::get('/paymentreject', [CustomResponseController::class, 'paymentreject'])->name('getpaymentreject');
Route::post('/paymentreject', [CustomResponseController::class, 'paymentreject'])->name('paymentreject');

// TDB
Route::get('/tdb', function (Request $request) {
    return [
        'status' => 500,
        'success' => false,
        'message' => 'Something wrong.'
    ];
});
Route::get('/khanbank', function (Request $request) {
    return [
        'status' => 500,
        'success' => false,
        'message' => 'Something wrong.'
    ];
});
Route::post('/tdb', [TDBController::class, 'req'])->name('TDB Bank Service');
Route::post('/khanbank', [KhanbankController::class, 'req'])->name('khanbank Service');
