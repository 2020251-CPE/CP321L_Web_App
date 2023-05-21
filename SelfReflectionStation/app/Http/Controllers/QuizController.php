<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class QuizController extends Controller{
    
    public function GetQuiz($key){
        $title = ucwords(str_replace("_"," ",$key));
        $query = str_replace("_","",$key);
        $results = DB::table($query)
            ->inRandomOrder()
            ->get();
        //return dd($results);
        return view('test')
                ->with('results',$results)
                ->with('title',$title)
                ->with('bg',$key)
                ;
    }

    //CODE BELOW TO BE CONTINUED
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    public function TakeAnswers(){
            for ($i = 0; $i < 20; $i++) {
                if (empty($_POST["Q".$i])) {
                    $genderErr = "Answer is required";
                } else {
                    $array[$i] = test_input($_POST["Q".$i]);
                }
            }
    }
    
}
