<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;

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

Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/products', [ProductController::class, 'add']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::get('/products/{id}', [ProductController::class, 'destroy']);

Route::get('products/category/{categoryId}', [ProductController::class, 'getProductsByCategory']);
Route::get('products/{id}', [ProductController::class, 'productDetail']);

Route::get('/categories', [ApiController::class, 'getCategories']);
Route::get('/users', [ApiController::class, 'getUsers']);
Route::get('/slides', [ApiController::class, 'getSlides']);


