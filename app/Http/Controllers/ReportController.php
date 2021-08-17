<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Latestnews;
use App\Models\Event;



class ReportController extends Controller
{
    public function index()
    {
        return view('forInvestors', [
            'report' => Report::all(),
            'latestnews'=>Latestnews::orderBy('id', 'desc')->take(4)->get(),
            'events'=>Event::orderBy('id', 'desc')->take(3)->get(),
            
        ]);
    }
}

