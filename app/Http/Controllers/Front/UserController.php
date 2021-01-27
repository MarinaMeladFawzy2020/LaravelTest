<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth')-> except('showuser1');
    }

    public function showuser()
    {
        return 'Marina Melad';
    }

    public function showuser1()
    {
        return 'Marina Melad - Method 2 No Authentication ';
    }

}
