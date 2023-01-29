@extends('volunteer.master')
@section('content')



<div class="container">
<!-- Modal -->
<div class="card">
  <div class="card-header">
    Edit Event Details
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
					  <form action="/eventupdate/{{$mydata2->id}}/OrgUpdate" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
								<div class="mb-3">
									<label for="eventName" class="form-label">Event Name :</label>
									<input name="eventName" type="text" class="form-control" id="eventName" value="{{$mydata2->eventName}}">
								</div>
								<div class="mb-3">
									<label for="eventLocation" class="form-label">Event Location:</label>
									<input name="eventLocation" type="text" class="form-control" id="eventLocation" value="{{$mydata2->eventLocation}}">
								</div>
								<div class="mb-3">
										<label for="eventDate" class="form-label">Event Date :</label>
										<input name="eventDate" type="text" class="form-control" id="eventDate" value="{{$mydata2->eventDate}}">
								</div>
								<div class="mb-3">
										<label for="eventTime" class="form-label">Event Time :</label>
										<input name="eventTime" type="text" class="form-control" id="eventTime" value="{{$mydata2->eventTime}}">
								</div>
                                <div class="mb-3">
                                    <label for="eventParticipant" class="form-label">Total Participant :</label>
                                    <input name="eventParticipant" type="number" class="form-control" id="eventParticipant" value="{{$mydata2->eventParticipant}}">
                                </div>
                                <div class="mb-3">
                                    <label for="eventContact" class="form-label">Contact Number :</label>
                                    <input name="eventContact" type="tel" class="form-control" id="eventContact" value="{{$mydata2->eventContact}}">
                                </div>
                                <div class="mb-3">
                                    <label for="eventLink" class="form-label">Registration Form :</label>
                                    <input name="eventLink" type="text" class="form-control" id="eventLink" value="{{$mydata2->eventLink}}">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Event Image :</label>
                                    <input name="image" type="file" class="form-control" id="image" value="{{$mydata2->image}}">
                                    <br>
                                    <label for="image" class="form-label">Current Image :</label><br>
                                    <img src="{{asset($mydata2->image)}}" style="width:30%;" class="card-img-top" alt="...">
                                </div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"><a style="color:black; text-decoration: none;" href="../../proevt">Cancel</a></button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								</form>					
                </blockquote>
  </div>
</div>
		  
</div>


@endsection