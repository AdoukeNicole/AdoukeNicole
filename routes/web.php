<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ShopController;

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

//ShopKeeper

Route::get('/login', [ShopController::class, 'login']);
Route::get('/registration', [ShopController::class, 'registration']);
Route::post('/register-user', [ShopController::class, 'RegisterUser']);
Route::post('/login-user', [ShopController::class, 'LoginUser']);
Route::get('/dashboard', [ShopController::class, 'dashboard']);
Route::get('/log', [ShopController::class, 'log']);
Route::get('/index', [ShopController::class, 'index']);
