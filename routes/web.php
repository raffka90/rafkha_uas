<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedagangController;


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

// Route::get('/', function () {
//     return view('layouts/master');
// });
// route Pedagang
Route::get('/pedagang', [PedagangController::class, 'index']);
Route::get('/pedagang/form', [PedagangController::class, 'create']);
Route::post('/pedagang/store', [PedagangController::class, 'store']);
Route::get('/pedagang/edit/{id}', [PedagangController::class, 'edit']);
Route::put('/pedagang/{id}', [PedagangController::class, 'update']);
Route::delete('/pedagang/{id}', [PedagangController::class, 'destroy']);


Route::get('/lapak', [LapakController::class, 'index']);
Route::get('/lapak/form', [LapakController::class, 'create']);
Route::post('/lapak/store', [LapakController::class, 'store']);
Route::get('/lapak/edit/{id}', [LapakController::class, 'edit']);
Route::put('/lapak/{id}', [LapakController::class, 'update']);
Route::delete('/lapak/{id}', [LapakController::class, 'destroy']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
