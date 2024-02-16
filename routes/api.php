<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers', 'middleware' => 'auth:sanctum'], function(){
    // Tus rutas protegidas aquí...
    Route::post('/customers', [CustomerController::class, 'store']);
    Route::get('/customers', [CustomerController::class, 'index']);
    Route::get('/customers/{identifier}', [CustomerController::class, 'show']);
    Route::delete('/customers/{dni}', [CustomerController::class, 'destroy']);
    Route::post('/regions', [RegionController::class, 'store']);
    Route::post('/communes', [CommuneController::class, 'store']);
});
