<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use DB;

class LandingPageController extends Controller
{
    public function LDPG(){
        return view('layouts/app');
    }

    public function showProgressPage(){

        // Grabs Results using email 
        $generalAnxietyResults = DB::select("select * from generalanxietytestresults where Email = '".session('email')."';");
        $alcoholAddictionResults = DB::table('alcoholaddictiontestresults')->where('Email',session('email'))->get();
        $gamblingAddictionResults = DB::table('gamblingaddictiontestresults')->where('Email',session('email'))->get();
        $shoppingAddictionResults = DB::table('shoppingaddictiontestresults')->where('Email',session('email'))->get();
        $drugAddictionResults = DB::table('drugaddictiontestresults')->where('Email',session('email'))->get();
        $emptyArrayMSG = " You have not taken the results yet.";
        
        return view('pages/progress')
            ->with('GAR',$generalAnxietyResults)
            ->with('AAR',$alcoholAddictionResults)
            ->with('GMAR',$gamblingAddictionResults)
            ->with('SAR',$shoppingAddictionResults)
            ->with('DAR',$drugAddictionResults)
            ->with('emptyArray<SG',$emptyArrayMSG)
            ;
    }
}
