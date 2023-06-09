<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminHeaderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\LunasController;
use App\Http\Controllers\BelumLunasController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MessageController;

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

Route::apiResource('admin_header', AdminHeaderController::class);

Route::apiResource('products', ProductsController::class);

Route::apiResource('dashboard', DashboardController::class);

Route::apiResource('customer_accounts', UsersController::class);

Route::apiResource('admin_accounts', AdminController::class);

Route::apiResource('orders', OrdersController::class);

Route::apiResource('lunas', LunasController::class);

Route::apiResource('belum_lunas', BelumLunasController::class);

Route::apiResource('dates', DateController::class);

Route::apiResource('employee', EmployeeController::class);

Route::apiResource('partner', PartnerController::class);

Route::apiResource('message', MessageController::class);

Route::apiResource('review', ReviewController::class);
