<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    //
       public function welcome(Request $request) 
    {
       $firstname = $request["firstname"];
       $lastname = $request["lastname"];
        return view('welcome')
        -> with('firstname',$firstname)
        -> with('lastname',$lastname);
    }

    public function register() 
    {
        return view('register');         
    }
       
}
