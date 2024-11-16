<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'home']);
Route::get('/tk-arrauf', [WebController::class, 'tk']);
Route::get('/sd-arrauf', [WebController::class, 'sd']);
Route::get('/unitusaha', [WebController::class, 'businessunit']);
Route::get('/tentangkami', [WebController::class, 'aboutus']);
Route::get('/kontak', [WebController::class, 'contact']);
Route::get('/news', [WebController::class, 'news']);
Route::get('/daftar', [WebController::class, 'registration']);
