<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\UpdateController;

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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'show']);

Route::get('/product', [ProductController::class, 'showlist']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/backoffice', [BackofficeController::class, 'show']);
Route::post('/backoffice/add', [BackofficeController::class, 'addProduct']);
Route::get('/backoffice/delete/{id}', [BackofficeController::class, 'deleteProduct']);
Route::get('/backoffice/update/{id}', [UpdateController::class, 'show']);
Route::post('/backoffice/update/push/{id}', [UpdateController::class, 'updateProduct']);

Route::get('/backoffice/deleteUser/{id}', [BackofficeController::class, 'deleteUser']);
Route::post('/backoffice/addUser', [BackofficeController::class, 'addUser']);

Route::get('/cart', [CartController::class, 'show']);
Route::get('/cart/{id}', [CartController::class, 'addProduct']);
Route::get('/cart/delete/{id}', [CartController::class, 'deleteProduct']);
