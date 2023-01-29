@extends('locals.master')
@section('content')


<div class="container">
<!-- Modal -->
<div class="card">
  <div class="card-header">
    Update Donation Details
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
					  <form action="/donationupdate/{{$mydata->id}}/Adminupdate" method="POST">
							{{csrf_field()}}
                            <div class="mb-3">
                                <label for="donationType" class="form-label">Categories:</label>
                                <select name="donationType" class="form-select" id="donationType" aria-label="Default select example">
                                <option selected></option>
										<option value="Food Ingredients" @if($mydata->donationType=='Food Ingredients') selected @endif>Food Ingredients</option>
										<option value="Clothing,Bags,Shoes"  @if($mydata->donationType=='Clothing,Bags,Shoes') selected @endif>Clothing,Bags,Shoes</option>
                                        <option value="Babies & Kids" @if($mydata->donationType=='Babies & Kids') selected @endif>Babies & Kids</option>
										<option value="Bath & Beauty" @if($mydata->donationType=='Bath & Beauty') selected @endif>Bath & Beauty</option>
										<option value="Electronics" @if($mydata->donationType=='Electronics') selected @endif>Electronics</option>
										<option value="Books & Stationary" @if($mydata->donationType=='Books & Stationary') selected @endif>Books & Stationary</option>
										<option value="School" @if($mydata->donationType=='School') selected @endif>School</option>
										<option value="Home Items" @if($mydata->donationType=='Home Items') selected @endif>Home Items</option>
										<option value="Others" @if($mydata->donationType=='Others') selected @endif>Others</option>
									</select>
                            </div>
                            <div class="mb-3">
                                <label for="donationItem" class="form-label">Item Name:</label>
                                <input name="donationItem" type="text" class="form-control" id="donationItem" value="{{$mydata -> donationItem}}">
                            </div>
                            <div class="mb-3">
                                <label for="donationState" class="form-label">State:</label>
                                <select name="donationState" class="form-select" id="donationState" aria-label="Default select example">
                                <option selected></option>
										<option value="Johor" @if($mydata->donationState=='Johor') selected @endif>Johor</option>
										<option value="Kedah" @if($mydata->donationState=='Kedah') selected @endif>Kedah</option>
										<option value="Kelantan" @if($mydata->donationState=='Kelantan') selected @endif>Kelantan</option>
										<option value="Kuala Lumpur" @if($mydata->donationState=='Kuala Lumpur') selected @endif>Kuala Lumpur</option>
										<option value="Labuan" @if($mydata->donationState=='Labuan') selected @endif>Labuan</option>
										<option value="Melaka" @if($mydata->donationState=='Melaka') selected @endif>Melaka</option>
										<option value="Negeri Sembilan" @if($mydata->donationState=='Negeri Sembilan') selected @endif>Negeri Sembilan</option>
										<option value="Pahang" @if($mydata->donationState=='Pahang') selected @endif>Pahang</option>
										<option value="Perak" @if($mydata->donationState=='Perak') selected @endif>Perak</option>
										<option value="Pulau Pinang" @if($mydata->donationState=='Pulau Pinang') selected @endif>Pulau Pinang</option>
										<option value="Putrajaya" @if($mydata->donationState=='Putrajaya') selected @endif>Putrajaya</option>
										<option value="Sabah" @if($mydata->donationState=='Sabah') selected @endif>Sabah</option>
										<option value="Sarawak" @if($mydata->donationState=='Sarawak') selected @endif>Sarawak</option>
										<option value="Selangor" @if($mydata->donationState=='Selangor') selected @endif>Selangor</option>
										<option value="Terengganu" @if($mydata->donationState=='Terengganu') selected @endif>Terengganu</option>
									</select>
                            </div>
                            <div class="mb-3">
                                <label for="donationKod" class="form-label">Poscode:</label>
                                <input name="donationKod" type="text" class="form-control" id="donationKod" value="{{$mydata->donationKod}}">
                            </div>
                            <div class="mb-3">
                                <label for="donationZon" class="form-label">Zone:</label>
                                <input name="donationZon" type="text" class="form-control" id="donationZon" value="{{$mydata->donationZon}}">
                            </div>
                            <div class="mb-3">
                                <label for="donationAdd" class="form-label">Address:</label>
                                <input name="donationAdd" type="text" class="form-control" id="donationAdd" value="{{$mydata->donationAdd}}">
                            </div>
                            <div class="mb-3">
                                <label for="donationNum" class="form-label">Quantity :</label>
                                <input name="donationNum" type="number" class="form-control" id="donationNum" value="{{$mydata->donationNum}}">
                            </div>
                            <div class="mb-3">
                                <label for="donationDesc" class="form-label">Description :</label>
                                <br>
									<textarea style="width: 100%;" name="donationDesc" id="donationDesc">{{$mydata->donationDesc}}</textarea>
								</div>
                            <div class="mb-3">
                                <label for="donationPhone" class="form-label">Contact Number :</label>
                                <input name="donationPhone" type="text" class="form-control" id="donationPhone" value="{{$mydata->donationPhone}}">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"><a style="color:black; text-decoration: none;" href="../../us">Cancel</a></button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                </blockquote>
  </div>
</div>
		  
</div>


@endsection