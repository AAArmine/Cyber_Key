<?php

namespace App\Http\Controllers;
use App\Models\Applicants;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function index(Request $request){
        $applicant=new Applicants;
        $applicant->applicant_name=$request->applName;
        $applicant->applicant_email=$request->applEmail;
        $applicant->positionTitle=$request->applEmail;

        $applicant->save();
        return redirect()->back()->with(['Application_sent' => "Application_sent"]);

    }
}
