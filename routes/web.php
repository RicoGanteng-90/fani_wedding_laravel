<?php

use App\Http\Controllers\AdminHeaderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\AdminaccController;
use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;
use App\Http\Controllers\LunasController;
use App\Http\Controllers\ReviewController;

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

//Route login
Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authenticating'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Route products
Route::get('/products', [ProductsController::class, 'index'])->name('products.index')->middleware('auth');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/update_product/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::post('/product_update/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

//Route header
Route::get('/admin_header/{id}', [AdminHeaderController::class, 'index'])->middleware('auth');

//Route orders
Route::get('/placed_orders', [OrdersController::class, 'index'])->name('orders.index')->middleware('auth');
Route::post('/update_orders/{id}', [OrdersController::class, 'update'])->name('orders.update');
Route::delete('/orders-delete/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');

//Route download image
Route::get('/image-download/{id}', [ImageController::class, 'download'])->name('image.download');

//Route customer lunas dan belum
Route::get('/lunas', [LunasController::class, 'lunas'])->name('lunas.lunas')->middleware('auth');
Route::get('/belum_lunas', [LunasController::class, 'notlunas'])->name('lunas.notlunas')->middleware('auth');
Route::post('/kelunasan/{id}', [LunasController::class, 'edit'])->name('lunas.edit');
Route::post('/kelunasan2/{id}', [LunasController::class, 'update'])->name('lunas.update');
Route::delete('/lunas-delete/{id}', [LunasController::class, 'destroy'])->name('lunas.destroy');
Route::delete('/lunas2-delete/{id}', [LunasController::class, 'delete'])->name('lunas.delete');

//Route akun user admin
Route::get('/admin_accounts', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin-reg', [AdminController::class, 'show'])->name('admin.show');
Route::post('/admin-add', [AdminController::class, 'register'])->name('admin.register');
Route::delete('/admin-delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/edit_profile/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/update_profile/{id}', [AdminController::class, 'update'])->name('admin.update');

//Route akun customer
Route::get('/customer_accounts', [UsersController::class, 'index'])->name('user.index')->middleware('auth');
Route::delete('/customer-delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

//Route pegawai
Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index')->middleware('auth');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::post('/employee-add', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/update_employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::delete('/employee-delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

//Route mitra
Route::get('/partners', [PartnerController::class, 'index'])->name('partner.index')->middleware('auth');
Route::get('/partners/{id}', [PartnerController::class, 'show'])->name('partner.show');
Route::post('/partner-add', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/update_partner/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
Route::delete('/partner-delete/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');

//Route pesan
Route::get('/messages', [MessageController::class, 'index'])->name('message.index')->middleware('auth');
Route::delete('/messages-delete/{id}', [MessageController::class, 'destroy'])->name('message.destroy');

//Route review
Route::get('/review', [ReviewController::class, 'index'])->name('review.index')->middleware('auth');
Route::delete('/reviews-delete/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

//Route update tanggal
Route::get('/date_update/{id}', [DateController::class, 'show'])->name('date.show');
Route::post('/update_date/{id}', [DateController::class, 'edit'])->name('date.edit');

//Route delete akun admin

