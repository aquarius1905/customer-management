<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [CustomerController::class, 'index']);
Route::get('/add', [CustomerController::class, 'add']);
Route::post('/add', [CustomerController::class, 'create']);
Route::get('/update', [CustomerController::class, 'edit']);
Route::post('/update', [CustomerController::class, 'update']);
Route::get('/delete', [CustomerController::class, 'delete']);
Route::post('/delete', [CustomerController::class, 'remove']);
