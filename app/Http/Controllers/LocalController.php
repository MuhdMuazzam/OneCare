<?php

namespace App\Http\Controllers;
use App\Models\Local;
use App\Models\event;
use App\Models\hotspot;

use DB;
use Auth;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function view(){
	$locals_data = Local::all();
	return view('locals/Profile',['locals_data'=>$locals_data]);
	}
    public function viewDonates($id) 
	{
	$users  =  DB::table("donates")->where('LocalsID','=',$id);
	$users  =  $users->get();
	return view('locals/viewDonates',['users'=>$users]);
	}
    public function viewSupports($id) 
	{
		$users  =  DB::table("supports")->where('LocalsID','=',$id);
		$users  =  $users->get();
		return view('locals/viewSupports',['users'=>$users]);
	}
	
	public function viewEvent(){
		$mydata = event::all();
		return view('/locals/EventDisplay',['mydata'=>$mydata]);
	}

    public function viewHotspot(){
		$mydata3 = hotspot::all();
		return view('locals.HotspotDisplay',['mydata3'=>$mydata3]);
	}
	public function noti(){
	$locals_data = DB::table('applications')
	    ->where('requestStatus', '=', 'Pending')
		->where('OwnerID', '=', Auth::guard('local')->user()->id)
        ->get();
	return view('/locals/Profile',['locals_data'=>$locals_data]);

	}
}
