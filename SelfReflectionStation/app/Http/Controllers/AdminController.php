<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class AdminController extends Controller
{
   public function showAdminPage(){
      $message = "Hello world";
      $generalAnxiety = DB::table("generalanxietytest")->get();
      $alcoholAddiction = DB::table('alcoholaddictiontest')->get();
      $gamblingAddiction = DB::table('gamblingaddictiontest')->get();
      $shoppingAddiction = DB::table('shoppingaddictiontest')->get();
      $drugAddiction = DB::table('drugaddictiontest')->get();
      $answerValues = DB::table('answerstable')->get();
      //$results = DB::table('generalanxietytest')->inRandomOrder()->limit(20)->get();
          return  view('layouts/admin')//Route::get('/adminPage',[App\Http\Controllers\AdministrationController::class, 'getAdminPage']) //use route instead of view
          
          ->with('generalAnxiety',$generalAnxiety)
          ->with('alcoholAddiction',$alcoholAddiction)
          ->with('gamblingAddiction',$gamblingAddiction)
          ->with('shoppingAddiction',$shoppingAddiction)
          ->with('drugAddiction',$drugAddiction)
          ->with('answersValues',$answerValues)
          ->with('test',$message) // THIS DOES NOT GET TO VIEW, WHYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY
              ;  
   }

   public function addQuestion($id){

   }

   public function updateQuestion($id){

   }

   public function deleteQuestion($id){

   }
}
