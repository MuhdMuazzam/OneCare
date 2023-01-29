<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\support;
use App\Models\donate;
use App\Models\hotspot;
use App\Models\event;

class HotspotController extends Controller
{

	//Citizen
    
    public function viewHotspot(){
		$mydata3 = hotspot::all();
		return view('/local/HotspotDisplay',['mydata3'=>$mydata3]);
	}
    public function hotspotDetail($id){
		$mydata3 = \App\Models\hotspot::find($id);
		return view('/locals/ViewHotspot',['mydata3' => $mydata3]);
	}

	//Admin

	public function create(Request $request){
		\App\Models\hotspot::create($request ->all());
		return redirect('/admin/hot');
	}

	public function Adminview(){
		$mydata3 = hotspot::all();
		return view('/admin/HotspotMain',['mydata3'=>$mydata3]);
	}
	
    public function Admindetail($id){
		$mydata3 = \App\Models\hotspot::find($id);
		return view('/admin/ViewHotspot',['mydata3' => $mydata3]);
	}

	public function manageHotspot(){
		$mydata3 = hotspot::all();
		return view('/admin/ManageHotspot',['mydata3'=>$mydata3]);
	}

    public function delete($id)
	{
		$mydata3 = \App\Models\hotspot::find($id);
		$mydata3-> delete($mydata3);
		return redirect('managehot')->with('success','Data Deleted');
	}

    public function viewEdit($id){
		$mydata3  = \App\Models\hotspot::find($id);
		return view('/admin/HotspotDetail',['mydata3'=>$mydata3]);
	}

	public function update(Request $request, $id){
		$mydata3  = \App\Models\hotspot::find($id);
		$mydata3 -> update($request->all());
		return redirect('managehot')->with('success','Center Successfully Update');
	}


	// public function filterLocation(Request $request){
	// 	$mydata3 = Hotspot::where('LocationState', $request->get('LocationState'))->get();
	// 	return view('Hotspot.HotspotMain', compact('mydata3'));
	// }
    // public function delete($id)
	// {
	// 	$mydata3 = \App\Models\hotspot::find($id);
	// 	$mydata3-> delete($mydata3);
	// 	return redirect('managehot')->with('success','Data Deleted');
	// }

    // public function viewEdit($id){
	// 	$mydata3  = \App\Models\hotspot::find($id);
	// 	return view('hotdetail',['mydata3'=>$mydata3]);
	// }

	// public function update(Request $request, $id){
	// 	$mydata3  = \App\Models\hotspot::find($id);
	// 	$mydata3 -> update($request->all());
	// 	return redirect('hotdetail')->with('success','Request Successfully Update');
	// }
}
