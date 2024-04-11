<?php

use App\Http\Controllers\MangaController;
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

Route::get('/', [MangaController::class, 'showAll']);
Route::get('/registration', [MangaController::class ,'showFomulaire']);
Route::post('/registeItem',[MangaController::class ,'registeManga']);
