<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Hash;

class CustomAuthController extends Controller{
    public function signUp(){ //GET the Sign-up Page
        return view('layouts/signup');  
    }

    public function insertCredentials(Request $request){ //POST the Credentials to the Database
        $name = $request->input('name');
        $password = bcrypt($request->input('password')); //password is encrypted
        $email = $request->input('email'); 

        if (Hash::check($request->input('password'), $password)){
            DB::select("insert into accounts (Name, Email, Password) VALUES ('".$name."','".$email."','".$password."');");
            $request->session()->put('user', $name);
            $request->session()->put('email',$email);
            return redirect()->intended('/app/home');
            //catch some exceptions like when email is already taken (keywords catch exception in SWL input error: input is not unique)
        } else {
            
            return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);
        }
    }

    public function logInPage(){ //GET the Log In Page
        return view('layouts/login');  
    }

    public function logIn(Request $request){ //POST Check if account exists in DB, If yes continue, If no, give error
        $email = $request->input('email');
        $password = $request->input('password');

        $query = DB::select("select * from accounts where Email = '".$email."' Limit 1");
        $passwordQuery = $query[0]->Password;
        if (Hash::check($password, $passwordQuery)){
            $request->session()->put('user', $query[0]->Name);
            $request->session()->put('email',$email);
            return redirect()->intended('/app/home');
        }else{
            return redirect()->back()->withInput()->withErrors(['login' => 'No Records of credentials']);
        }
    }

    public function logOut(){ //logs out user
        if (session()->has('user')){
            session()->pull('user');
        }
        return redirect()->intended('/app/home');
    }
}
