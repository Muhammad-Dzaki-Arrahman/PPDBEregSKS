<?php

use App\Http\Controllers\EregController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route untuk halamam home
Route::get('/', [EregController::class, 'index']);

// Route untuk halamam jenjang pendidikan
Route::get('/jenjang', [EregController::class, 'jenjang']);

// Route untuk halamam form isi data
Route::get('/form', [EregController::class, 'isidata']);
