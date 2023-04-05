<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "Hey there from Controller";
    }

    public function show($id){
        $data = array(
            'id' => $id,
            'name' => 'Angelo',
            'age' => '21',
            'email' => 'qwerty@gmail.com'
        );
        return view('user',['data'=>$data]);
    }
}
