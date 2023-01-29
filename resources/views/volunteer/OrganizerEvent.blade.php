@extends('volunteer.master')
@section('content')

<div class="container">
<br>
<br>
@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif
<br>

<h2 style="font-family:verdana;font-weight: bold;margin-top:2px;"> Event </h2><br>
<div class="row">

@foreach($mydata2 as $evt)
	<div class="col-sm-6 mb-2">
		<div class="card border-success">
			<div class="card-header border-success" style="background-color: #c5d8a6;font-weight: bold;font-size:20px;">{{$evt -> eventName}}</div>
          <div class="card-body text-success">
          <h5 class="card-title">{{$evt -> eventLocation}}</h5>
            <h5 class="card-text">{{$evt -> eventContact}}</h5>
            <p class="card-text">{{$evt -> eventDate}}</p>
          </div>
          <div class="card-footer bg-transparent border-success">
            <a href="/event/{{$evt->id}}/Orgdelete" class="btn btn-danger" onClick="return confirm('Confirm Delete?')">Delete</a>
            <a href="/display/{{$evt->id}}/Orgview" class="btn btn-info">Update</a>

          </div>
		</div>
    <br>
	</div>
@endforeach


<br>

<h2 style="font-family:verdana;font-weight: bold;margin-top:2px;"> Event History</h2><br>
<div class="row">

@foreach($mydata4 as $evtapp)
	<div class="col-sm-6 mb-2">
		<div class="card border-success">
			<div class="card-header border-success" style="background-color: #c5d8a6;font-weight: bold;font-size:20px;">{{$evtapp -> eventName}}</div>
          <div class="card-body text-success">
          <h5 class="card-title">{{$evtapp -> eventLocation}}</h5>
            <h5 class="card-text">{{$evtapp -> eventContact}}</h5>
            <p class="card-text">{{$evtapp -> eventDate}}</p>
          </div>
          <div class="card-footer bg-transparent border-success">
            <a href="/event/{{$evtapp->id}}/Orgdelete" class="btn btn-danger" onClick="return confirm('Confirm Delete?')">Delete</a>
            <a href="/display/{{$evtapp->id}}/Orgview" class="btn btn-info">Update</a>


          </div>
		</div>
    <br>
	</div>
@endforeach


</div>



@endsection