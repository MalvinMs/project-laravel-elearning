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

Route::get('/', [WebController::class, 'welcome']);
Route::get('/profile', [WebController::class, 'profile']);
Route::get('/visimisi', [WebController::class, 'visimisi']);
Route::get('/pendaftaran', [WebController::class, 'pendaftaran']);
Route::get('/kontak', [WebController::class, 'kontak']);
Route::get('/prestasi', [WebController::class, 'prestasi']);
Route::get('/ekstrakurikuler', [WebController::class, 'ekstrakurikuler']);
Route::get('/berita', [WebController::class, 'berita']);
Route::get('/agenda', [WebController::class, 'agenda']);
Route::get('/fasilitas', [WebController::class, 'fasilitas']);
Route::get('/struktur', [WebController::class, 'struktur']);
Route::get('/gallery', [WebController::class, 'gallery']);
