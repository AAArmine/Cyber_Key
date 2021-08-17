<?php

namespace App\Http\Controllers;

use App\models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('careers', [
            'careers' => Career::all(),
            "jobTitleEn" => Career::select('job_title')->distinct()->get(),
        ]);
    }
    public function show_one(Request $request)
    {
        $Career = new Career;
        return view('jobs_separate', [
            "careerData" => $Career->find($request->id),
        ]);
    }
}
