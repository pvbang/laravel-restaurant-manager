<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirstController;
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
Route::get('/', [FirstController::class, 'index']);

Route::get('/GioiThieu', [FirstController::class, 'aboutus']);


// Admin View
Route::get('/RestaurantManager/User', [AdminController::class, 'index']);


// Route::get('/RestaurantManager/User/{slug}', function($slug){

//     $path = __DIR__ . "/../resources/post/{$slug}.blade.php";
//     $dieuhuong = file_get_contents($path);
//     return view('admin.index', [
//         "route" => $dieuhuong,
//     ]);
// });

Route::get('/RestaurantManager/User/{slug}', [AdminController::class, 'dieuhuong']);