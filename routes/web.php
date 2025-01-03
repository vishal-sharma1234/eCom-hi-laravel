<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view()



// Route::view('/login', 'login');

Route::get('/login', [UserController::class, 'loginView']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout',[UserController::class, 'logout']);


Route::get('/' , [ProductController::class , 'index']);
Route::get('/search' , [ProductController::class , 'search']);
Route::post('/add-to-cart' , [ProductController::class , 'addToCart']);
Route::get('/detail/{id}', [ProductController::class, 'getProductDetailByID']);

