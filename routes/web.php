<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view()



// Route::view('/login', 'login');

Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'loginView']);

Route::get('/logout',[UserController::class, 'logout']);

Route::get('/' , [ProductController::class , 'index']);
