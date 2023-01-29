@extends('admin.master')
@section('content')

<?php
include 'connection.php';
?>

<body onload="getLocation()">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog"  >
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title"  id="exampleModalLabel">Add donation</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		<div class="modal-body">
		<form action="/donation/Admincreate" method="POST">
			{{csrf_field()}}
			<div class="mb-3">
				<label for="LocalsID" class="form-label">Locals ID:</label>
				<input name="LocalsID" type="text" class="form-control" id="LocalsID" placeholder="Item Name" value="{{Auth::guard('admin')->user()->id}}">
			</div>
			<div class="mb-3">
				<label for="donationType" class="form-label">Categories:</label>
				<select name="donationType" class="form-select" id="donationType" aria-label="Default select example">
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
				<label for="donationItem" class="form-label">Item Name:</label>
				<input name="donationItem" type="text" class="form-control" id="donationItem" placeholder="Item Name">
			</div>
			<div class="mb-3">
				<label for="donationState" class="form-label">State:</label>
				<select name="donationState" class="form-select" id="donationState" aria-label="Default select example">
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
				<label for="donationKod" class="form-label">Poscode:</label>
				<input name="donationKod" type="text" class="form-control" id="donationKod" placeholder="Poscode">
			</div>
			<div class="mb-3">
				<label for="donationZon" class="form-label">Zone:</label>
				<input name="donationZon" type="text" class="form-control" id="donationZon" placeholder="Zone">
			</div>
			<div class="mb-3">
				<label for="donationAdd" class="form-label">Address:</label>
				<input name="donationAdd" type="text" class="form-control" id="donationAdd" placeholder="address">
			</div>
        	<div class="mb-3">
				<label for="donationNum" class="form-label">Quantity :</label>
				<input name="donationNum" type="number" class="form-control" id="donationNum" placeholder="--">
			</div>
			<div class="mb-3">
				<label for="donationDesc" class="form-label">Description :</label>
				<br>
				<textarea name="donationDesc" id="donationDesc" style="width: 100%;" placeholder="desc">
                </textarea>
			</div>
			<div class="mb-3">
				<label for="donationPhone" class="form-label">Contact Number :</label>
				<input name="donationPhone" type="text" class="form-control" id="donationPhone" placeholder="xxx-xxxxxxx">
			</div>
			</div>
			<div class="mb-3">
							<div class="col-md-12"><label class="labels">Pin Donation Location</label><br>
								<div id="map-container-google-18" class="z-depth-1-half map-container-11"  style="height: 300px">
									<div name="mapform">                
										<div id="map"></div>
									</div>
								</div>
							</div>                      
			</div>
			<div class="mb-3">
							<div class="col-md-12"><br>
								<input type="text" class="form-control" placeholder="lat" name="latitude" id="lat" >
							</div>
							<div class="col-md-12"><br>
								<input type="text" class="form-control" placeholder="lng" name="longitude" id="lng" >
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
<h2 style="font-family:verdana;font-weight: bold;"> Donation List </h2>
<div class="row">
<div class="col mb-2">
<button type="button" style="float:right;width:80px;" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Add
</button>
</div>
</div>


<div class="container">
<br>
@if(session('success'))
	<div class ="alert alert-success" role="alert">
	{{session('success')}}
	</div>
@endif

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
        <div class="card-footer bg-transparent border-success"><center><button type="button" class="btn btn-success"style="width: 10rem;"><a href="/donation/{{$donation->id}}/Admindetails" style="color: white;">View</a></button></center></div>
    </div>
</div>
@endforeach

</div>

<script
	  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBd-QLjHquKqDso6U_bu86hK3_m0DOL9c&callback=initMap" defer>
</script>

<script>
	let map;
			function initMap() 
			{
				map = new google.maps.Map(document.getElementById("map"), 
				{
					center:  { lat: 3.5468566208792414, lng: 103.43563681852979 },
					zoom: 15,
					scrollwheel: true,
				});
				let marker = new google.maps.Marker(
					{
						setCurrentPosition: true, // You can omit this, defaults to true
						position:  { lat: 3.5468566208792414, lng: 103.43563681852979 },
						map: map,
						draggable: true
					});
			
					google.maps.event.addListener(marker,'position_changed',
					function ()
					{
						let lat = marker.position.lat()
						let lng = marker.position.lng()
						$('#lat').val(lat)
						$('#lng').val(lng)
					})
					google.maps.event.addListener(map,'click',
					function (event)
						{
							pos = event.latLng
							marker.setPosition(pos)
						})
			}
</script>

<script 
	async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBd-QLjHquKqDso6U_bu86hK3_m0DOL9c&callback=initMap">
</script>

<script>
	function initAutocomplete() 
	{
  		const map = new google.maps.Map(document.getElementById("map"), 
		{
			center: { lat: -33.8688, lng: 151.2195 },
			zoom: 13,
			mapTypeId: "roadmap",
  		});
  		
		// Create the search box and link it to the UI element.
  		const input = document.getElementById("pac-input");
  		onst searchBox = new google.maps.places.SearchBox(input);

		map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		// Bias the SearchBox results towards current map's viewport.
		map.addListener("bounds_changed", () => 
		{
			searchBox.setBounds(map.getBounds());
		});

  		let markers = [];

  		// Listen for the event fired when the user selects a prediction and retrieve
  		// more details for that place.
  		searchBox.addListener("places_changed", () => {
    		const places = searchBox.getPlaces();
			if (places.length == 0) {
				return;
    		}

    	// Clear out the old markers.
    	markers.forEach((marker) => {
      	marker.setMap(null);
    	});
    	markers = [];

    // For each place, get the icon, name and location.
    	const bounds = new google.maps.LatLngBounds();

    	places.forEach((place) => {
			if (!place.geometry || !place.geometry.location) {
				console.log("Returned place contains no geometry");
				return;
			}

		const icon = {
			url: place.icon,
			size: new google.maps.Size(71, 71),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(17, 34),
			scaledSize: new google.maps.Size(25, 25),
		};

		// Create a marker for each place.
		markers.push(
			new google.maps.Marker({
			map,
			icon,
			title: place.name,
			position: place.geometry.location,
			})
		);
		if (place.geometry.viewport) {
			// Only geocodes have viewport.
			bounds.union(place.geometry.viewport);
		} else {
			bounds.extend(place.geometry.location);
		}
		});
		map.fitBounds(bounds);
	});
}

	window.initAutocomplete = initAutocomplete;
</script>

<script src="{{ asset('/sw.js') }}"></script>

<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

</body>
</div>







@endsection