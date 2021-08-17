<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InvestorRequest;
use App\models\Investor;

class InvestorController extends Controller
{
    public function submit_email(InvestorRequest $req){
      $Investor=new Investor;
      $Investor->email = $req->input('investorEmail');
      $Investor->save();
      return redirect()->back()->with(['success_investor'=>"Success"]);
    }
}
