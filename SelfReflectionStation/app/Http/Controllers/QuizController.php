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
    public function storeAndSolve(Request $request, $key){
        $case = str_replace("Test","",ucwords(str_replace("_"," ",$key)));
        $total = 0;
        for ($i=0; $i < 21; $i++) {
            $total += $request->input('Q'.strval($i));
        }

        //Scoring system of TESTS
        $totalInt=(int)$total;
        if($totalInt >= 0 && $totalInt < 20){
            $result = "You may have minimum to no symptoms of ".$case;
        } else if ($totalInt > 21 && $totalInt < 40){
            $result = "You may have mild symptoms of ".$case;
        } else if ($totalInt > 41 && $totalInt < 60){
            $result = "You may have moderate symptoms of ".$case;
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
