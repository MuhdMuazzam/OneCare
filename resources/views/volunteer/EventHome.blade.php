@extends('volunteer.master')
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog"  >
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
		  
			<form action="/event/Orgcreate" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="eventName" class="form-label">Event Name :</label>
				<input name="eventName" type="text" class="form-control" id="eventName" placeholder="Event name">
			  </div>
			  <div class="mb-3">
				<label for="OrgID" class="form-label">ID :</label>
				<input name="OrgID" type="text" class="form-control" id="OrgID" placeholder="ID" value="{{Auth::guard('volunteer')->user()->id}}">
			  </div>
			  <div class="mb-3">
				<label for="eventLocation" class="form-label">Event Location :</label>
				<input name="eventLocation" type="text" class="form-control" id="eventLocation" placeholder="Event venue">
			  </div>
			  <div class="mb-3">
				<label for="eventDate" class="form-label">Event Date :</label>
				<input name="eventDate" type="date" class="form-control" id="eventDate" placeholder="Event date">
			  </div>
			  <div class="mb-3">
				<label for="eventTime" class="form-label">Event Time :</label>
				<input name="eventTime" type="time" class="form-control" id="eventTime" placeholder="Event time">
			  </div>
        	<div class="mb-3">
				<label for="eventParticipant" class="form-label">Total Participant :</label>
				<input name="eventParticipant" type="number" class="form-control" id="eventParticipant" placeholder="Participant number">
			  </div>
       	 	<div class="mb-3">
				<label for="eventContact" class="form-label">Contact Number :</label>
				<input name="eventContact" type="text" class="form-control" id="eventContact" placeholder="Organizer Contact">
			  </div>
        	<div class="mb-3">
				<label for="eventLink" class="form-label">Registration Form :</label>
				<input name="eventLink" type="text" class="form-control" id="eventLink" placeholder="Register Link">
			  </div>
        	<div class="mb-3">
				<label for="image" class="form-label">Event Image :</label>
				<input name="image" type="file" class="form-control" id="image" placeholder="Event image">
		    </div>
			<div class="mb-3">
				<input name="status" type="hidden" class="form-control" id="status"  value="Pending">
		    </div>
	
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>



<div class="container">
  <div class="container">
          <h2 style="font-family:verdana;font-weight: bold;">Event List</h2><br>

          <div class="row">
          <div class="col mb-2">
          <button type="button" style="float:right;width:100px;" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Event
          </button>

		  <a style="float:right;width:130px;margin-right:10px;" href="/event/{{{Auth::guard('volunteer')->user()->id}}}/orgevt" class="btn btn-info" >Manage Event</a>


          </div>
          </div>

          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <center>
            @foreach($mydata as $evt)  
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <div class="container">
                            <div class="row-cols-1 row-cols-xl-4 g-6">
                                  <div class="shadow p-3 mb-3 bg-body rounded card mb-3">
                                            <img src="{{asset($evt->image)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <h5 class="card-title">{{$evt -> eventName}}</h5>
                                                <p class="card-text">{{$evt -> eventLocation}}</p>
                                                <a href="evd" class="btn btn-primary">{{$evt -> eventDate}}</a>
                                        </div>
                                  </div>
                            </div>
                        </div>
                  </div>         
            </div>
            @endforeach
          </center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

  </div>
</div>

@endsection