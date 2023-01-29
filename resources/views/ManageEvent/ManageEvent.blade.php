@extends('Login.master')
@section('content')


<a style="color:black; text-decoration: none;" href="displayedit/{{$evt ->id}}/view">Update</a>

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
            <a href="event/{{$evt ->id}}/delete" class="btn btn-danger" onClick="return confirm('Confirm Delete?')">Delete</a>
            
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
	                  <a style="color:black; text-decoration: none;" href="displayedit/{{$evt ->id}}/view">Update</a>
	          </button>

          </div>
		</div>
    <br>
	</div>
@endforeach


</div>



@endsection