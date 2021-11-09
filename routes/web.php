<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\DatMonController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\LichLamViecController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\DoanhThuController;

use Illuminate\Support\Facades\Route;

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

// User View
Route::get('/', [MainController::class, 'index']);

Route::get('/GioiThieu', [MainController::class, 'aboutUs']);


// Admin View
Route::post('/auth/save', [MainController::class, 'storeReg'])->name('registerStore');
Route::post('/RestaurantManager/User', [MainController::class, 'loginCheck'])->name('admin.dashboard');

Route::get('/RestaurantManager/User/{slug}', [MainController::class, 'dieuhuong']);
Route::get('/RestaurantManager/User/{slug}/{slug2}', [AdminController::class, 'dieuhuong2']);

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

// Route::post('/admin/dashboard', [MainController::class, 'storeReg'])->name('admin.dashboard');

// Trang chủ
Route::get('/RestaurantManager/User/trangchu/sua/id={id}', [UserController::class, 'edit']);
Route::post('/RestaurantManager/User/trangchu/sua', [UserController::class, 'update']);
Route::get('/RestaurantManager/User/monan/xoa/id={id}', [UserController::class, 'destroy']);

// Món ăn
Route::get('/RestaurantManager/User/monan/monan', [MonAnController::class, 'show']);
Route::post('/RestaurantManager/User/monan/them', [MonAnController::class, 'store']);
Route::get('/RestaurantManager/User/monan/xoa/id={id}', [MonAnController::class, 'destroy']);
Route::get('/RestaurantManager/User/monan/sua/id={id}', [MonAnController::class, 'edit']);
Route::post('/RestaurantManager/User/monan/sua', [MonAnController::class, 'update']);

// Nguyên liệu
Route::get('/RestaurantManager/User/nguyenlieu/nguyenlieu', [NguyenLieuController::class, 'show']);
Route::post('/RestaurantManager/User/nguyenlieu/them', [NguyenLieuController::class, 'store']);
Route::get('/RestaurantManager/User/nguyenlieu/xoa/id={id}', [NguyenLieuController::class, 'destroy']);
Route::get('/RestaurantManager/User/nguyenlieu/sua/id={id}', [NguyenLieuController::class, 'edit']);
Route::post('/RestaurantManager/User/nguyenlieu/sua', [NguyenLieuController::class, 'update']);

// Bàn
Route::get('/RestaurantManager/User/ban/ban', [BanController::class, 'show']);
Route::post('/RestaurantManager/User/ban/them', [BanController::class, 'store']);
Route::get('/RestaurantManager/User/ban/xoa/id={id}', [BanController::class, 'destroy']);
Route::get('/RestaurantManager/User/ban/sua/id={id}', [BanController::class, 'edit']);
Route::post('/RestaurantManager/User/ban/sua', [BanController::class, 'update']);
