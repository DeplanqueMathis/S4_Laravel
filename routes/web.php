<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class, 'index']);

Route::get('/about', [FirstController::class, 'about']);

Route::get('/articles', [FirstController::class, 'articles']);

Route::get('/search/{search}', [FirstController::class, 'search']);

Route::get('/article/{id}', [FirstController::class, 'article'])->where('id','[0-9]+');

Route::get('/songs/create', [FirstController::class, "create"])->middleware('auth');
Route::post('/songs', [FirstController::class, "store"])->middleware('auth');

Auth::routes();

Route::get('/img/{id}', [FirstController::class, 'img'])->where('id','[0-9]+');

Route::get('/user/{id}', [FirstController::class, 'user'])->where('id','[0-9]+');

Route::get('/jaime/{id}', [FirstController::class, 'like'])->middleware('auth')->where('id','[0-9]+');

Route::get('/changeLike/{id}', [FirstController::class, 'changeLike'])->middleware('auth')->where('id','[0-9]+');

Route::get('/delete/{id}', [FirstController::class, 'delete'])->middleware('auth')->where('id','[0-9]+');