<?php

namespace App\Http\Controllers;
use App\models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        return view('careers', [
            'careers' => Career::all(),
        ]);
    }
}
