<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hpme\HomeController;

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

Route::get('/', [HomeController::class, 'homefunction'])->name('homepage');
Route::post('/home/create', [HomeController::class, 'homefunctioncreate']);
Route::get('/home/data',[HomeController::class, 'homefunctionalldata']);
Route::get('/home/data-read{id}',[HomeController::class, 'homefunctionread']);
Route::get('/home/data-edit{id}',[HomeController::class, 'homefunctionedit']);
Route::post('/home/data-update{id}', [HomeController::class, 'homefunctionupdate']);
Route::get('/home/data-delete{id}', [HomeController::class, 'homefunctiondelete']);