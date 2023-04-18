<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/main',function(){ //Default Main route for Laravel
    return view('welcome');
});

Route::get('/',[StudentController::class,'index']);

Route::redirect('/home','/',302); //redirect sample

Route::get('/user1',function(Request $request){
    dd($request);
    return 'lol';
});

Route::get('/res/{id}',function($id){
    return response(view('landingPage',['id'=>$id]),201)
        ->header('Content-Type','text/html');
});

Route::get('/res-json',function(){
    return response()
        ->json([
            'name'=>'Angelo',
            'age'=>69
        ]);
});

Route::get('/res-download',function(){
    $path = public_path().'/sampleDownloadFile.txt';
    $name = 'sampleDownloadFile.txt';
    $headers = array(
        'Content-type : application/test-plain',
    );
    return response()->download($path,$name,$headers);
});

Route::get('/login',[UserController::class,'index'])->name('login');
Route::get('/user/{id}',[UserController::class,'show']);

Route::get('/students',[StudentController::class,'index']);