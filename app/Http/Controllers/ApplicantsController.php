<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicantsRequest;
use App\models\Applicants;

class ApplicantsController extends Controller
{
    public function index(ApplicantsRequest $req){
        $Applicants = new Applicants();
        
        // dd($file = $req->file('applcv'));
        if($file = $req->file('applcv')){
            $name =$file->getClientOriginalName();
           $file->move('images', $name);
                // $Applicants->applicant_cv=$name;
          
        };

        // $Applicants->applicant_name = $req->input('applName');
        // $Applicants->applicant_email = $req->input('applEmail');
        // $Applicants->positionTitle = $req->input('applTitle');
        // $Applicants->save();
        // return redirect()->back()->with(['success_application'=>"success_application"]);
    }
}
