<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts',
//localhost:81/posts
[PostController::class, 'index' ]);

Route::get('/posts2',
[PostController::class, 'index2' ]);


Route::post('/posts',
[PostController::class, 'store' ]);