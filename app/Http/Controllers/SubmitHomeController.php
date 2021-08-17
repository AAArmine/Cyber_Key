<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubmitHomeRequest;
use Illuminate\Http\Request;
use App\Models\Submit;

class SubmitHomeController extends Controller
{
    public function submit(SubmitHomeRequest $req){
        $submit = new Submit();
        $submit->email = $req->post('email');
        $submit->save(); 
        return redirect()->back()->with(['success'=>"Success"]);
    }
}
