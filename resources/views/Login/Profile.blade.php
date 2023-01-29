@extends('Login.master')
@section('content')


<div class="container">

<br>
@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif
<br>
<h2 style="font-family:verdana;font-weight: bold;"> Request </h2><br>


<div class="row">

@foreach($mydata1 as $support)
    <div class="col-sm-6 mb-2">
		<div class="card border-success">
			<div class="card-header border-success" style="background-color: #c5d8a6;font-weight:bold;font-size:20px;">{{$support -> supportType}}</div>
          <div class="card-body text-success">
          <h5 class="card-title">{{$support -> supportDesc}}</h5>
            <h5 class="card-text">{{$support -> supportState}}</h5>
            <p class="card-text">{{$support -> supportAdd}}</p>
          </div>
          <div class="card-footer bg-transparent border-success">
            <a href="support/{{$support ->id}}/delete" class="btn btn-danger" onClick="return confirm('Confirm Delete?')">Delete</a>
            
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
	                  <a style="color:black; text-decoration: none;" href="supportedit/{{$support ->id}}/view">Update</a>
	          </button>
          </div>
		</div>
    <br>
	</div>
@endforeach

  </div>



<h2 style="font-family:verdana;font-weight: bold;margin-top:2px;"> Donate </h2><br>
<div class="row">

@foreach($mydata as $donation)
	<div class="col-sm-6 mb-2">
		<div class="card border-success">
			<div class="card-header border-success" style="background-color: #c5d8a6;font-weight: bold;font-size:20px;">{{$donation -> donationType}}</div>
          <div class="card-body text-success">
          <h5 class="card-title">{{$donation -> donationItem}}</h5>
            <h5 class="card-text">{{$donation -> donationState}}</h5>
            <p class="card-text">{{$donation -> donationAdd}}</p>
          </div>
          <div class="card-footer bg-transparent border-success">
            <a href="donation/{{$donation ->id}}/delete" class="btn btn-danger" onClick="return confirm('Confirm Delete?')">Delete</a>
            
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
	                  <a style="color:black; text-decoration: none;" href="viewedit/{{$donation ->id}}/view">Update</a>
	          </button>

            <a style="float: right;" href="list/{{$donation->id}}/overview" class="btn btn-info" >Applicant</a>

          </div>
		</div>
    <br>
	</div>
@endforeach



</div>



@endsection