<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\application;
use App\Models\support;
use App\Models\donate;

class ApplicationController extends Controller
{
    public function create(Request $request){
		\App\Models\application::create($request ->all());
		return redirect('/locals/donate');
	}

    //overview to add
	public function overview($id){
		$mydata  = \App\Models\donate::find($id);
		return view('locals.AddApplication',['mydata'=>$mydata]);
	}


    // public function viewapply($id){
	// 	$mydata  = \App\Models\donate::join('applications', 'donates.id', '=', 'applications.id')
	// 	->select('donates.*', 'applications.*')
	// 	->get();
	// 	return view('Application.ListApplicant',compact('mydata'));
	// }

	public function viewapply($id){
		$mydata  = \App\Models\application::where('donationID', $id)->get();
		return view('locals.ListApplicant',['mydata'=>$mydata]);
	}

	
	public function subBalance($donationID,$id)
	{

		$current_balance=\App\Models\donate::find($donationID)->donationBal;
		$accept = 'Approve';

		$new_balance=$current_balance-1;
		\App\Models\donate::where('id',$donationID)->update(['donationBal'=>$new_balance]);
		\App\Models\application::where('id',$id)->update(['requestStatus'=>$accept]);
		$mydata  = \App\Models\application::where('donationID', $donationID)->get();	
		return redirect('/locals/Profile')->with("success","Application successfully approved!");
	}

}
