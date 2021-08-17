<?php

namespace App\Http\Controllers;
use App\Models\Industries;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index(){
        return view('industries', [
            'industries' => Industries::all(),
        ]);
    }
    public function show_one(Request $request){
        $Industries=new Industries;
        return view('industries_separate', ['data'=>$Industries->find($request->id)]); 
    } 
}