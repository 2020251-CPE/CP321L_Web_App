<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;


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

Route::get('/error/{page}',[App\Http\Controllers\QuizController::class, 'tempRedirect']);

Route::get('/sign_up',[App\Http\Controllers\CustomAuthController::class,'signUp']);
Route::post('/sign_up',[App\Http\Controllers\CustomAuthController::class,'insertCredentials']);

Route::get('/log_in',[App\Http\Controllers\CustomAuthController::class,'logInPage']);
Route::post('/log_in',[App\Http\Controllers\CustomAuthController::class,'logIn']);

Route::get('/log_out',[App\Http\Controllers\CustomAuthController::class,'logOut']);

Route::get('/progress',[App\Http\Controllers\LandingPageController::class,'showProgressPage']);

//ADMIN Stuff
Route::get('/adminPage',[App\Http\Controllers\AdministrationController::class, 'getAdminPage']);