<?php

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
//

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout']);


Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('home');
    });
    Route::resources([
        'products' => \App\Http\Controllers\Site\ProductController::class,
    ]);

});
