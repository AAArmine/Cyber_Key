<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(Request $req){
        return $file= $req('user_cv')->store('docs');
    }
}
