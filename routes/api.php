<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\OrderAPIController;
use App\Http\Controllers\CustomerAPIController;
use App\Http\Controllers\AdminAPIController;
use App\Http\Controllers\EmployeeAPIController;
use App\Http\Controllers\PartnerAPIController;
use App\Http\Controllers\MessageAPIController;
use App\Http\Controllers\ReviewAPIController;


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

Route::apiResource('products', ProductAPIController::class);

Route::apiResource('customer_accounts', CustomerAPIController::class);

Route::apiResource('admin_accounts', AdminAPIController::class);

Route::apiResource('orders', OrderAPIController::class);

Route::apiResource('employee', EmployeeAPIController::class);

Route::apiResource('partner', PartnerAPIController::class);

Route::apiResource('message', MessageAPIController::class);

Route::apiResource('review', ReviewAPIController::class);
