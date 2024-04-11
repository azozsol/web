<?php

use App\Http\Controllers\ForumConnection;
use App\Http\Controllers\ForumController;
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
Route::get('/',[ForumController::class ,'index']);
Route::post('/login',[ForumConnection::class,'authenticate']);
Route::get('/threads', [ForumController::class, 'getTitle']);
Route::get('/threads/{id}', [ForumController::class, 'getThread']);
