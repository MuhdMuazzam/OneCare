<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\support;
use App\Models\donate;
use App\Models\event;
use DB;
class EventController extends Controller
{

	//Citizen

	public function viewDetail($id){
		$mydata2=\App\Models\event::find($id);
		return view('locals.EventDetail',['mydata2'=>$mydata2]);
	}


	//event organizer

	public function create(Request $request)
	{
		$requestData = $request->all();
		$filename = time().$request->file('image')->getClientOriginalName();
		$path = public_path('images/.$filename');
		// the first one is the location where the file will be stored, the second one is the file name, and the third one is the visibility like public or private.
		$path = $request->file('image')->storeAs('images',$filename,'public');
		$requestData["image"]= '/storage/'.$path;
		event::create($requestData);
		return redirect('event/Orgevent')->with('success','Event Successfully Added');
	}

	public function viewEvent(){
		$mydata = event::all()->where('status','=','Approve');;
		return view('/volunteer/EventHome',['mydata'=>$mydata]);
	}

	public function OrgviewDetail($id){
		$mydata2=\App\Models\event::find($id);
		return view('volunteer.EventDetail',['mydata2'=>$mydata2]);
	}

	public function OrganizeEvent($id){
		$mydata2 = DB::table("events")->where('OrgID','=',$id)
		->where('status','=','Pending')->get();
		$mydata4 = DB::table("events")->where('OrgID','=',$id)
		->where('status','=','Approve')->get();
		return view('volunteer.OrganizerEvent',['mydata2'=>$mydata2],['mydata4'=>$mydata4]);
	}

	public function delete($id)
	{
		
		$mydata2 = Event::find($id);
		$image = $mydata2->image;
		if(File::exists(public_path($image))) {
			File::delete(public_path($image));
		}
		$mydata2->delete();

		return redirect('/orgevt')->with('success','Event Successfully Deleted');
	}

	public function OrgviewEdit($id){
		$mydata2=\App\Models\event::find($id);
		return view('volunteer.UpdateEvent',['mydata2'=>$mydata2]);
	}

	public function update(Request $request, $id)
	{
		$event = Event::find($id);
		$requestData = $request->all();

		if ($request->hasFile('image')) {
			$filename = time().$request->file('image')->getClientOriginalName();
			$path = public_path('images/.$filename');
			$path = $request->file('image')->storeAs('images',$filename,'public');
			$requestData["image"]= '/storage/'.$path;
			if(File::exists(public_path($event->image))) {
				File::delete(public_path($event->image));
			}
		} else {
			$requestData["image"] = $event->image;
		}
		$event->update($requestData);

		return redirect('event/Orgevent')->with('success','Event Successfully Updated');
	}

	

//Admin

public function AdminviewEvent(){
	$mydata = event::all()->where('status','=','Approve');;
	return view('admin.EventAdmin',['mydata'=>$mydata]);
}

public function status($id)
{
	$accept = 'Approve';
	$mydata2= \App\Models\event::find($id);
	$mydata2->update(['status'=> $accept]);
	return redirect('proevt');
}

public function AdminmanageEvent(){
	$mydata2 = event::all()
	->where('status','=','Pending');
	$mydata4 = event::all()
	->where('status','=','Approve');
	return view('admin.ManageEvent',['mydata2'=>$mydata2],['mydata4'=>$mydata4]);
}

public function Admincreate(Request $request)
{
	$requestData = $request->all();
	$filename = time().$request->file('image')->getClientOriginalName();
	$path = public_path('images/.$filename');
	// the first one is the location where the file will be stored, the second one is the file name, and the third one is the visibility like public or private.
	$path = $request->file('image')->storeAs('images',$filename,'public');
	$requestData["image"]= '/storage/'.$path;
	event::create($requestData);
	return redirect('admin/event')->with('success','Event Successfully Added');
}


public function Admindelete($id)
	{
		
		$mydata2 = Event::find($id);
		$image = $mydata2->image;
		if(File::exists(public_path($image))) {
			File::delete(public_path($image));
		}
		$mydata2->delete();

		return redirect('/proevt')->with('success','Event Successfully Deleted');
	}

public function AdminviewEdit($id){
		$mydata2=\App\Models\event::find($id);
		return view('admin.UpdateEvent',['mydata2'=>$mydata2]);
	}

public function Adminupdate(Request $request, $id)
	{
		$event = Event::find($id);
		$requestData = $request->all();

		if ($request->hasFile('image')) {
			$filename = time().$request->file('image')->getClientOriginalName();
			$path = public_path('images/.$filename');
			$path = $request->file('image')->storeAs('images',$filename,'public');
			$requestData["image"]= '/storage/'.$path;
			if(File::exists(public_path($event->image))) {
				File::delete(public_path($event->image));
			}
		} else {
			$requestData["image"] = $event->image;
		}
		$event->update($requestData);

		return redirect('event')->with('success','Event Successfully Updated');
	}

}
