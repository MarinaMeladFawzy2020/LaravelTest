<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;   //Bulit in to Extends Controller 

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showUser2' , 'showUser3'); 

    }
    public function showUser(){
        return "Marina Melad" ;
    }

    public function showUser2(){
        return "Marina Melad2" ;
    }

    public function showUser3(){
        return "Marina Melad23" ;
    }
}
