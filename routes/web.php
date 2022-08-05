<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/', [HomeController::class,'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{product}', [ProductController::class, 'show']);


Route::get('/tambah', function () {
    return view('admin/addproduct');
});

Route::get('/stok', [ProductController::class, 'stok']);

Route::post('/uploadproduct', [ProductController::class, 'uploadproduct']);

Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/update/{id}', [ProductController::class, 'update']);
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);