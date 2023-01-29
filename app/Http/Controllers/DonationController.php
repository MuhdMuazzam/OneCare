<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\support;
use App\Models\donate;


class DonationController extends Controller
{
    public function create(Request $request){
		$donate =  new donate; 
		$donate->LocalsID = $request->input('LocalsID');
		$donate->donationItem = $request->input('donationItem');
		$donate->donationType = $request->input('donationType');
		$donate->donationState = $request->input('donationState');
		$donate->donationAdd = $request->input('donationAdd');
		$donate->donationNum = $request->input('donationNum');
		$donate->donationDesc = $request->input('donationDesc');
		$donate->donationPhone = $request->input('donationPhone');
		$donate->donationZon = $request->input('donationZon');
		$donate->donationKod = $request->input('donationKod');
		$donate->latitude = $request->input('latitude');
		$donate->longitude = $request->input('longitude');
		$donate->donationBal = $request->input('donationNum');
		$donate->save();
		return redirect('/locals/donate');
	}

    public function viewDonation(Request $request){
		$mydata = donate::all();
		return view('locals.DonationHome',['mydata'=>$mydata]);
	}


    public function viewDetail($id){
		$mydata  = \App\Models\donate::find($id);
		return view('/locals/DonationDetail',['mydata'=>$mydata]);
	}

    public function donateProfile(){
		$mydata = donate::all();
        $mydata1 = \App\Models\support::all();
		return view('Login.Profile',['mydata'=>$mydata],['mydata1'=>$mydata1]);
	}

    public function viewEdit($id){
		$mydata  = \App\Models\donate::find($id);
		return view('Donation.UpdateDonation',['mydata'=>$mydata]);
	}

    public function update(Request $request, $id)
	{
		$users= \App\Models\donate::find($id);
		$users-> update($request->all());
		return redirect('/locals/Profile')->with('success','Donation Item Updated!');;
	}

    public function delete($id)
	{
		$mydata = \App\Models\donate::find($id);
		$mydata-> delete($mydata);
		return redirect('/locals/Profile')->with('success','Data Deleted');
	}

//Admin

public function Admincreate(Request $request){
	$donate =  new donate; 
	$donate->LocalsID = $request->input('LocalsID');
	$donate->donationItem = $request->input('donationItem');
	$donate->donationType = $request->input('donationType');
	$donate->donationState = $request->input('donationState');
	$donate->donationAdd = $request->input('donationAdd');
	$donate->donationNum = $request->input('donationNum');
	$donate->donationDesc = $request->input('donationDesc');
	$donate->donationPhone = $request->input('donationPhone');
	$donate->donationZon = $request->input('donationZon');
	$donate->donationKod = $request->input('donationKod');
	$donate->latitude = $request->input('latitude');
	$donate->longitude = $request->input('longitude');
	$donate->donationBal = $request->input('donationNum');
	$donate->save();
	return redirect('/admin/donate');
}

public function AdminviewDonation(Request $request){
	$mydata = donate::all();
	return view('admin.DonationHome',['mydata'=>$mydata]);
}


public function AdminviewDetail($id){
	$mydata  = \App\Models\donate::find($id);
	return view('/admin/DonationDetail',['mydata'=>$mydata]);
}

public function AdminviewEdit($id){
	$mydata  = \App\Models\donate::find($id);
	return view('/Admin.UpdateDonation',['mydata'=>$mydata]);
}

public function Adminupdate(Request $request, $id)
{
	$users= \App\Models\donate::find($id);
	$users-> update($request->all());
	return redirect('/admin/Profile')->with('success','Donation Item Updated!');;
}

public function Admindelete($id)
{
	$mydata = \App\Models\donate::find($id);
	$mydata-> delete($mydata);
	return redirect('/admin/Profile')->with('success','Data Deleted');
}

public function AdminDonate(){
	$mydata = donate::all();
	$mydata1 = \App\Models\support::all();
	return view('Admin.Profile',['mydata'=>$mydata],['mydata1'=>$mydata1]);
}


}
