<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/product-list', [TodoController::class, 'index']);
Route::get('/add-product', [TodoController::class, 'AddProduct']);
Route::post('/save-product', [TodoController::class, 'SaveProduct']);
Route::get('/edit-product/{id}', [TodoController::class, 'EditProduct']);
Route::post('/update-product', [TodoController::class, 'UpdateProduct']);
Route::get('/delete-product/{id}', [TodoController::class, 'DeleteProduct']);
