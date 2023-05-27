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

    //Redirect Quiz to Temporary error page then bring back to page
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
        $result = "";
        $totalInt=(int)$total;
        if($totalInt >= 0 && $totalInt < 19){ //redirect to an error page for a bit
            $errorMSG = "Please Complete all the Answers to the Evaluations (^ω^) ";
            return redirect()->back()->withInput()->withErrors(['message' => $errorMSG]);
            //return view('pages/error')->with("redirectTime",4)->with("key",$key)->with("errorMSG",$errorMSG);
        } else if ($totalInt >= 20){   
            
            if ($totalInt >= 20 && $totalInt < 40){
                $result = "You may have little to no symptoms of ".$case;
            } else if ($totalInt > 41 && $totalInt < 60){
                $result = "You may have mild to moderate symptoms of ".$case;
            }else if ($totalInt > 61 && $totalInt <= 80){
                $result = "You may have severe symptoms of ".$case;
            }
            //Code here to add result to DB with email as Identifier
            $table = str_replace("_","",$key);
            //DATETIME Format - 'YYYY-MM-DD HH:MM:SS'
            DB::select("insert into ".$table."results (RecordedResult, Email, DateAndTimeOfRecord) VALUES ('".$totalInt."','".session('email')."','".date('Y-m-d H:i:s')."');");
        

            //Query Advices and Web resources
            if(strpos($case, "Anxiety") !== false){
                $advises = DB::table('generalanxietyadvices')->inRandomOrder()->limit(5)->get(); 
                $onlineResource = DB::table('generalanxietyonlineresource')->inRandomOrder()->limit(5)->get();           
            } else if (strpos($case, "Addiction") !== false){
                $advises = DB::table('generaladdictionadvices')->inRandomOrder()->limit(5)->get(); 
                $onlineResource = DB::table(str_replace("test","",ucwords(str_replace("_","",$key))).'onlineresource')->inRandomOrder()->limit(5)->get(); 
            } else {

            }
            

            return view('pages/results')
            ->with('total',$total)
            ->with('result',$result)
            ->with('bg',$key)
            ->with('advices',$advises)
            ->with('onlineResource',$onlineResource)
            ;
        
        }
    }
}
