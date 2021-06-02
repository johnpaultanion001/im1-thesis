<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    // 
    function userLogin(Request $req) 
    {
        return $req->input();
    }
}
