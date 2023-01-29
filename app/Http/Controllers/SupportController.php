<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\support;
use App\Models\donate;

class SupportController extends Controller
{
    public function create(Request $request){
		\App\Models\support::create($request ->all());
		return redirect('/locals/req')->with('success','Great! We hope that you will receive your item request sooner!');
	}
    public function viewSupport(){
		$mydata1 = support::all();
		return view('/locals/SupportHome',['mydata1'=>$mydata1]);
	}

    public function supportDetail($id){
		$mydata1  = \App\Models\support::find($id);
		return view('/locals/SupportDetail',['mydata1'=>$mydata1]);
	}

    public function supportProfile(){
		$mydata1 = support::all();
        $mydata = \App\Models\donate::all();
		return view('Login.Profile',['mydata1'=>$mydata1],['mydata'=>$mydata]);
	}

	public function delete($id)
	{
		$mydata1 = \App\Models\support::find($id);
		$mydata1-> delete($mydata1);
		return redirect('/locals/Profile')->with('success','Data Deleted');
	}

	public function viewEdit($id){
		$mydata1  = \App\Models\support::find($id);
		return view('/Support/UpdateSupport',['mydata1'=>$mydata1]);
	}

	public function update(Request $request, $id){
		$mydata1  = \App\Models\support::find($id);
		$mydata1 -> update($request->all());
		return redirect('/locals/Profile')->with('success','Request Successfully Update');
	}

	
	//Admin
	public function AdminviewSupport(){
		$mydata1 = support::all();
		return view('/admin/SupportHome',['mydata1'=>$mydata1]);
	}

    public function AdminsupportDetail($id){
		$mydata1  = \App\Models\support::find($id);
		return view('/admin/SupportDetail',['mydata1'=>$mydata1]);
	}

    public function AdminsupportProfile(){
		$mydata1 = support::all();
        $mydata = \App\Models\donate::all();
		return view('Admin.Profile',['mydata1'=>$mydata1],['mydata'=>$mydata]);
	}

	public function Admindelete($id)
	{
		$mydata1 = \App\Models\support::find($id);
		$mydata1-> delete($mydata1);
		return redirect('/admin/Profile')->with('success','Data Deleted');
	}

	public function AdminviewEdit($id){
		$mydata1  = \App\Models\support::find($id);
		return view('/Admin/UpdateSupport',['mydata1'=>$mydata1]);
	}

	public function Adminupdate(Request $request, $id){
		$mydata1  = \App\Models\support::find($id);
		$mydata1 -> update($request->all());
		return redirect('/admin/Profile')->with('success','Request Successfully Update');
	}

		
}
