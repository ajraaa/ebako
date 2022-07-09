<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin', [
        "name" => "Admin",
        "email" => "admin@example.com",
        "image" => "logo.png"
    ]);
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{product}', [ProductController::class, 'show']);

