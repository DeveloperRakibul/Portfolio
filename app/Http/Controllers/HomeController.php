<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        return view(view:"Home");
    }


    public function signin(Request $request){
        return view(view:"User/signin");
    }
    public function signup(Request $request){
        return view(view:"User/signup");
    }
}
