<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use Illuminate\Http\Request;
use App\Models\Submit;

class SubmitController extends Controller
{
    public function submit(SubmitRequest $req)
    {
        // dd($req->all())
        // dd($req->all());
        // $validated = $req->validated();
        $submit = new Submit();
        // dd($submit);
        $submit->email = $req->post('email');
        $submit->save();
        return redirect()->back()->with(['success' => "Success"]);
    }
}
