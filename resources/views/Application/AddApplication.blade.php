@extends('Login.master')
@section('content')

<div class="container">
<!-- Modal -->
<div class="card">
  <div class="card-header">
    Update Donation Details
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
					  <form action="/addApply/create" method="POST">
							{{csrf_field()}}
                            
                                        <div class="mb-3">
                                            <label for="requestName" class="form-label">Item Name:</label>
                                            <input name="requestName" type="text" class="form-control" id="donationItem" placeholder="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="donationID" class="form-label">Donation ID:</label>
                                            <input name="donationID" type="text" class="form-control" id="donationID" value="{{$mydata->id}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="donationItem" class="form-label">Donation ID:</label>
                                            <input name="donationItem" type="text" class="form-control" id="donationItem" value="{{$mydata->donationItem}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestState" class="form-label">State:</label>
                                            <select name="requestState" class="form-select" id="requestState" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Labuan">Labuan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Pulau Pinang" >Pulau Pinang</option>
                                            <option value="Putrajaya">Putrajaya</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Terengganu">Terengganu</option>
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestAdd" class="form-label">Address:</label>
                                            <input name="requestAdd" type="text" class="form-control" id="requestAdd" placeholder="Applicant Address">
                                        </div>
                                        <div class="mb-3">
                                          <label for="requestDesc" class="form-label">Description :</label>
                                          <br>
                                          <textarea style="width: 100%;" name="requestDesc" id="requestDesc" placeholder="Description"></textarea>
                                        </div>
                                          <div class="mb-3">
                                              <label for="requestPhone" class="form-label">Contact Number :</label>
                                              <input name="requestPhone" type="text" class="form-control" id="requestPhone" placeholder="Applicant Contact">
                                          </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"><a style="color:black; text-decoration: none;" href="../../donate">Cancel</a></button>
                                              <button type="submit" class="btn btn-primary">Apply</button>
                                          </form>
                </blockquote>
  </div>
</div>
		  
</div>

@endsection