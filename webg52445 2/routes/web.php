<?php

use App\Http\Controllers\ProgramController;
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

//Route::get('/', [ProgramController::class, 'getStudent']);

Route::get('/pae/student', [ProgramController::class, 'getStudent']);

Route::delete('/pae/student/delete/{ele}',[ProgramController::class, 'deleteCourseFromStudent']);
//Route::post('/pae/student/delete',[ProgramController::class, 'getStudent']);
