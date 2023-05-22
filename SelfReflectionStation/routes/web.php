<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\QuizController;


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
Auth::routes();
Route::get('/app/{page}', [LandingPageController::class, 'LDPG'])->name('search');
Route::redirect('/', '/app/home', 302);


Route::get('/test/{page}', [App\Http\Controllers\QuizController::class, 'GetQuiz']);
Route::post('/test/{page}', [App\Http\Controllers\QuizController::class, 'storeAndSolve']);

