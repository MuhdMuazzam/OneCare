@extends('Login.master')
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog"  >
		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"  id="exampleModalLabel">Request for Support</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
		 			 <div class="modal-body">
					  <form action="/support/create" method="POST">
							{{csrf_field()}}
								<div class="mb-3">
									<label for="supportName" class="form-label">Name :</label>
									<input name="supportName" type="text" class="form-control" id="supportName" placeholder="Name">
								</div>
								<div class="mb-3">
									<label for="supportIC" class="form-label">IC:</label>
									<input name="supportIC" type="text" class="form-control" id="supportIC" placeholder="Identity Card Number">
								</div>
								<div class="mb-3">
									<label for="supportType" class="form-label">Categories:</label>
									<select name="supportType" class="form-select" id="supportType" aria-label="Default select example">
										<option selected>---</option>
										<option value="Food Ingredients">Food Ingredients</option>
										<option value="Clothing,Bags,Shoes">Clothing,Bags,Shoes</option>
										<option value="Babies & Kids">Babies & Kids</option>
										<option value="Bath & Beauty">Bath & Beauty</option>
										<option value="Electronics">Electronics</option>
										<option value="Books & Stationary">Books & Stationary</option>
										<option value="School">School</option>
										<option value="Home Items">Home Items</option>
										<option value="Others">Others</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="supportDesc" class="form-label">Description :</label>
									<br>
									<textarea style="width: 100%;" name="supportDesc" id="supportDesc" placeholder="Description"></textarea>
								</div>
								<div class="mb-3">
									<label for="supportState" class="form-label">State:</label>
									<select name="supportState" class="form-select" id="supportState" aria-label="Default select example">
										<option selected>---</option>
										<option value="Johor">Johor</option>
										<option value="Kedah">Kedah</option>
										<option value="Kelantan">Kelantan</option>
										<option value="Kuala Lumpur">Kuala Lumpur</option>
										<option value="Labuan">Labuan</option>
										<option value="Melaka">Melaka</option>
										<option value="Negeri Sembilan">Negeri Sembilan</option>
										<option value="Pahang">Pahang</option>
										<option value="Perak">Perak</option>
										<option value="Pulau Pinang">Pulau Pinang</option>
										<option value="Putrajaya">Putrajaya</option>
										<option value="Sabah">Sabah</option>
										<option value="Sarawak">Sarawak</option>
										<option value="Selangor">Selangor</option>
										<option value="Terengganu">Terengganu</option>
									</select>
								</div>
								<div class="mb-3">
										<label for="supportKod" class="form-label">Reciever Poscode :</label>
										<input name="supportKod" type="text" class="form-control" id="supportKod" placeholder="Poscode">
								</div>
								<div class="mb-3">
										<label for="supportZon" class="form-label">Reciever Zone :</label>
										<input name="supportZon" type="text" class="form-control" id="supportZon" placeholder="Zone">
								</div>
								<div class="mb-3">
										<label for="supportAdd" class="form-label">Reciever Address :</label>
										<input name="supportAdd" type="text" class="form-control" id="supportAdd" placeholder="Address">
								</div>
								<div class="mb-3">
										<label for="supportPhone" class="form-label">Contact Number :</label>
										<input name="supportPhone" type="text" class="form-control" id="supportPhone" placeholder="xxx-xxxxxxx">
								</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								</form>
							
					</div>
		</div>
	</div>
</div>

<div class="container">
		<h2 style="font-family:verdana;font-weight: bold;"> Request List </h2>
			<div class="row">
				<div class="col mb-2">
					<button type="button" style="float:right;width:80px;" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Add
					</button>
				</div>
		</div>

		@if(session('success'))
			<div class ="alert alert-success" role="alert">
			{{session('success')}}
			</div>
		@endif

			<div class="row">
				@foreach($mydata1 as $support)
				<div class="col-sm-6 mb-2">
					<div class="card border-success">
						<div class="card-header border-success" style="background-color: #c5d8a6;font-weight: bold;font-size:20px;">{{$support -> supportType}}</div>
							<div class="card-body text-success">
							<h5 class="card-title">{{$support -> supportDesc}}</h5>
								<h5 class="card-text">{{$support -> supportState}}</h5>
								<p class="card-text">{{$support -> supportAdd}}</p>
							</div>
						<div class="card-footer bg-transparent border-success"><center><button type="button" class="btn btn-success"style="width: 10rem;"><a href="support/{{$support->id}}/details" style="color: white;">View</a></button></center></div>
					</div>
				</div>
				@endforeach


		</div>
</div>



@endsection