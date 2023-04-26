<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class LandingPageController extends Controller
{
    public function LDPG(){
        

        return view('layouts/app')
            ->with('sub','pages.home');
    }
}
