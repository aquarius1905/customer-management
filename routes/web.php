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

Route::get('/list', [CustomerController::class, 'list'])->name('list');
Route::get('/add', [CustomerController::class, 'add'])->name('add');
Route::post('/add', [CustomerController::class, 'create'])->name('create');
Route::post('/update', [CustomerController::class, 'update'])->name('update');
Route::post('/delete', [CustomerController::class, 'delete'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
