<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// User controllers start
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/terms', [UserController::class, 'terms'])->name('terms');
Route::get('/privacy', [UserController::class, 'privacy'])->name('privacy');
Route::get('/live', [UserController::class, 'live'])->name('livecoverage');
Route::get('/studio', [UserController::class, 'studio'])->name('studio');
Route::get('/hiring-PA', [UserController::class, 'hiring'])->name('hiring');
Route::get('/DJ', [UserController::class, 'dj'])->name('dj');
Route::get('/photography', [UserController::class, 'photography'])->name('photography');


// email
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
