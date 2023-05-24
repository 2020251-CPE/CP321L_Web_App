<?php

namespace App\Http\Controllers;

use DB;
use View;
use Illuminate\Http\Request;

class QuizController extends Controller{

    //Used to query a quiz and use that to view it to a php file
    public function GetQuiz($key){
        $errorMSG = "";
        $title = ucwords(str_replace("_"," ",$key));
        $query = str_replace("_","",$key);
        $results = DB::table($query)
            ->inRandomOrder()
            ->get();
        return view('test')
                ->with('results',$results)
                ->with('title',$title)
                ->with('bg',$key)
                ->with("errorMSG",$errorMSG)
                ;    
    }

    //Redirect Quiz to Temprary error page then bring back to page
    public function tempRedirect(){
        return View::make('pages/error');
    }

    //CODE BELOW TO BE CONTINUED
    public function storeAndSolve(Request $request, $key){
        $case = str_replace("Test","",ucwords(str_replace("_"," ",$key)));
        $total = 0;
        for ($i=0; $i < 21; $i++) {
            $total += $request->input('Q'.strval($i));
        }

        //Scoring system of TESTS
        $result = 0;
        $totalInt=(int)$total;
        if($totalInt >= 0 && $totalInt < 19){ //redirect to an error page for a bit
            $errorMSG = "Please Complete all the Answers to the Evaluations (^ω^) ";
            return view('pages/error')->with("redirectTime",4)
                ->with("key",$key)
                ->with("errorMSG",$errorMSG);
        } else if ($totalInt >= 20 && $totalInt < 40){
            $result = "You may have little to no symptoms of ".$case;
        } else if ($totalInt > 41 && $totalInt < 60){
            $result = "You may have mild to moderate symptoms of ".$case;
        }else if ($totalInt > 61 && $totalInt <= 80){
            $result = "You may have severe symptoms of ".$case;
        }

        //Code here to add result to DB with email as ID

        return view('pages/results')
            ->with('total',$total)
            ->with('result',$result)
            ->with('bg',$key);
    }
}
