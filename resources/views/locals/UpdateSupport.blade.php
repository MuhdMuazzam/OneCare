@extends('locals.master')
@section('content')


<div class="container">
<!-- Modal -->
<div class="card">
  <div class="card-header">
    Update Request Details
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
					  <form action="/supportupdate/{{$mydata1->id}}/update" method="POST">
							{{csrf_field()}}
								<div class="mb-3">
									<label for="supportName" class="form-label">Name :</label>
									<input name="supportName" type="text" class="form-control" id="supportName" value="{{$mydata1->supportName}}">
								</div>
								<div class="mb-3">
									<label for="supportIC" class="form-label">IC:</label>
									<input name="supportIC" type="text" class="form-control" id="supportIC" value="{{$mydata1->supportIC}}">
								</div>
								<div class="mb-3">
									<label for="supportType" class="form-label">Categories:</label>
									<select name="supportType" class="form-select" id="supportType" aria-label="Default select example">
										<option selected></option>
										<option value="Food Ingredients" @if($mydata1->supportType=='Food Ingredients') selected @endif>Food Ingredients</option>
										<option value="Clothing,Bags,Shoes"  @if($mydata1->supportType=='Clothing,Bags,Shoes') selected @endif>Clothing,Bags,Shoes</option>
										<option value="Babies & Kids" @if($mydata1->donationType=='Babies & Kids') selected @endif>Babies & Kids</option>
										<option value="Bath & Beauty" @if($mydata1->supportType=='Bath & Beauty') selected @endif>Bath & Beauty</option>
										<option value="Electronics" @if($mydata1->supportType=='Electronics') selected @endif>Electronics</option>
										<option value="Books & Stationary" @if($mydata1->supportType=='Books & Stationary') selected @endif>Books & Stationary</option>
										<option value="School" @if($mydata1->supportType=='School') selected @endif>School</option>
										<option value="Home Items" @if($mydata1->supportType=='Home Items') selected @endif>Home Items</option>
										<option value="Others" @if($mydata1->supportType=='Others') selected @endif>Others</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="supportDesc" class="form-label">Description :</label>
                  <br>
									<textarea style="width: 100%;" name="supportDesc" id="supportDesc">{{$mydata1->supportDesc}}</textarea>
								</div>
								<div class="mb-3">
									<label for="supportState" class="form-label">State:</label>
									<select name="supportState" class="form-select" id="supportState" aria-label="Default select example">
										<option selected></option>
										<option value="Johor" @if($mydata1->supportState=='Johor') selected @endif>Johor</option>
										<option value="Kedah" @if($mydata1->supportState=='Kedah') selected @endif>Kedah</option>
										<option value="Kelantan" @if($mydata1->supportState=='Kelantan') selected @endif>Kelantan</option>
										<option value="Kuala Lumpur" @if($mydata1->supportState=='Kuala Lumpur') selected @endif>Kuala Lumpur</option>
										<option value="Labuan" @if($mydata1->supportState=='Labuan') selected @endif>Labuan</option>
										<option value="Melaka" @if($mydata1->supportState=='Melaka') selected @endif>Melaka</option>
										<option value="Negeri Sembilan" @if($mydata1->supportState=='Negeri Sembilan') selected @endif>Negeri Sembilan</option>
										<option value="Pahang" @if($mydata1->supportState=='Pahang') selected @endif>Pahang</option>
										<option value="Perak" @if($mydata1->supportState=='Perak') selected @endif>Perak</option>
										<option value="Pulau Pinang" @if($mydata1->supportState=='Pulau Pinang') selected @endif>Pulau Pinang</option>
										<option value="Putrajaya" @if($mydata1->supportState=='Putrajaya') selected @endif>Putrajaya</option>
										<option value="Sabah" @if($mydata1->supportState=='Sabah') selected @endif>Sabah</option>
										<option value="Sarawak" @if($mydata1->supportState=='Sarawak') selected @endif>Sarawak</option>
										<option value="Selangor" @if($mydata1->supportState=='Selangor') selected @endif>Selangor</option>
										<option value="Terengganu" @if($mydata1->supportState=='Terengganu') selected @endif>Terengganu</option>
									</select>
								</div>
								<div class="mb-3">
										<label for="supportKod" class="form-label">Reciever Poscode :</label>
										<input name="supportKod" type="text" class="form-control" id="supportKod" value="{{$mydata1->supportKod}}">
								</div>
								<div class="mb-3">
										<label for="supportZon" class="form-label">Reciever Zone :</label>
										<input name="supportZon" type="text" class="form-control" id="supportZon" value="{{$mydata1->supportZon}}">
								</div>
								<div class="mb-3">
										<label for="supportAdd" class="form-label">Reciever Address :</label>
										<input name="supportAdd" type="text" class="form-control" id="supportAdd" value="{{$mydata1->supportAdd}}">
								</div>
								<div class="mb-3">
										<label for="supportPhone" class="form-label">Contact Number :</label>
										<input name="supportPhone" type="text" class="form-control" id="supportPhone" value="{{$mydata1->supportPhone}}">
								</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"><a style="color:black; text-decoration: none;" href="../../us">Cancel</a></button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								</form>					
                </blockquote>
  </div>
</div>
		  
</div>


@endsection