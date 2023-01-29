
@extends('Login.master')
@section('content')

<?php
include 'connection.php';
?>

<div class="container">

				<form class="myForm" action="" method="POST" autocomplete="off" >
				
					<div class="mb-3">
						<label for="LocationName" class="form-label">Center Name:</label>
						<input name="LocationName" type="text" class="form-control" id="LocationName" placeholder="Name">
					</div>

					<div class="mb-3">
						<label for="LocationState" class="form-label">State:</label>
						<select name="LocationState" class="form-select" id="LocationState" aria-label="Default select example">
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
						<label for="LocationKod" class="form-label">Location Poscode :</label>
						<input name="LocationKod" type="text" class="form-control" id="LocationKod" placeholder="--">
					</div>

					<div class="mb-3">
						<label for="LocationAdd" class="form-label">Address:</label>
						<input name="LocationAdd" type="text" class="form-control" id="LocationAdd" placeholder="address">
					</div>

					<div class="mb-3">
						<label for="detail" class="form-label">Location Detail :</label>
						<input name="detail" type="text" class="form-control" id="detail" placeholder="Description">
					</div>
					
					<div class="mb-3">
						<input type="text" name="latitude" ><br><br>
						<input type="text" name="longitude"><br>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
				</form>
</div>

<body onload="getLocation()">

</body>

<script type="text/javascript">
        function getLocation()
        {
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position){
            document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;

        }
        // function showError(error){
        //     switch(error.code){
        //         case error.PERMISSION_DENIED;
        //         alert("You Must Allow The Location");
        //         location.reload();
        //         break;
        //     }
        // }

</script>

@endsection