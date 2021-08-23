<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicantRequest;

class ApplicationController extends Controller
{

    public function store(ApplicantRequest $request)
    {
        $applicant = new Application();
        $applicant->name = $request->input('name');
        $applicant->email = $request->input('email1');
        $applicant->job_title = $request->input('job_title');

        if ($request->hasfile('attached_cv')) {
            $file = $request->file('attached_cv');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $filename = $filename . time() . "." . $extension;
            $file->move('uploads/applicant', $filename);
            $applicant->attached_cv = $filename;
        } else {
            return $request;
            $applicant->attached_cv = '';
        }
        $applicant->save();
        return redirect()->back()->with(['Application_success' => "Application_success"]);
    }
}
