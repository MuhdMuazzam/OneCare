@extends('admin.master')
@section('content')

<div class="container">
<!-- Modal -->
<div class="card">
  <div class="card-header">
    Update Donation Details
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
					  <form action="/hotspotupdate/{{$mydata3 -> id}}/update" method="POST">
							{{csrf_field()}}
              <div class="mb-3">
							<label for="LocationName" class="form-label">Center Name:</label>
							<input name="LocationName" type="text" class="form-control" id="LocationName" value="{{$mydata3 -> LocationName}}">
						</div>

						<div class="mb-3">
							<label for="LocationState" class="form-label">State:</label>
							<select name="LocationState" class="form-control" id="LocationState" aria-label="Default select example">
              <option selected></option>
										<option value="Johor" @if($mydata3->LocationState=='Johor') selected @endif>Johor</option>
										<option value="Kedah" @if($mydata3->LocationState=='Kedah') selected @endif>Kedah</option>
										<option value="Kelantan" @if($mydata3->LocationState=='Kelantan') selected @endif>Kelantan</option>
										<option value="Kuala Lumpur" @if($mydata3->LocationState=='Kuala Lumpur') selected @endif>Kuala Lumpur</option>
										<option value="Labuan" @if($mydata3->LocationState=='Labuan') selected @endif>Labuan</option>
										<option value="Melaka" @if($mydata3->LocationState=='Melaka') selected @endif>Melaka</option>
										<option value="Negeri Sembilan" @if($mydata3->LocationState=='Negeri Sembilan') selected @endif>Negeri Sembilan</option>
										<option value="Pahang" @if($mydata3->LocationState=='Pahang') selected @endif>Pahang</option>
										<option value="Perak" @if($mydata3->LocationState=='Perak') selected @endif>Perak</option>
										<option value="Pulau Pinang" @if($mydata3->LocationState=='Pulau Pinang') selected @endif>Pulau Pinang</option>
										<option value="Putrajaya" @if($mydata3->LocationState=='Putrajaya') selected @endif>Putrajaya</option>
										<option value="Sabah" @if($mydata3->LocationState=='Sabah') selected @endif>Sabah</option>
										<option value="Sarawak" @if($mydata3->LocationState=='Sarawak') selected @endif>Sarawak</option>
										<option value="Selangor" @if($mydata3->LocationState=='Selangor') selected @endif>Selangor</option>
										<option value="Terengganu" @if($mydata3->LocationState=='Terengganu') selected @endif>Terengganu</option>
								</select>
						</div>
						<div class="mb-3">
							<label for="LocationKod" class="form-label">Location Poscode :</label>
							<input name="LocationKod" type="text" class="form-control" id="LocationKod" value="{{$mydata3 -> LocationKod}}">
						</div>

						<div class="mb-3">
							<label for="LocationAdd" class="form-label">Address:</label>
							<input name="LocationAdd" type="text" class="form-control" id="LocationAdd" value="{{$mydata3 -> LocationAdd}}">
						</div>

						<div class="mb-3">
							<label for="detail" class="form-label">Location Detail :</label>
							<input name="detail" type="text" class="form-control" id="detail" value="{{$mydata3 -> detail}}">
						</div>
						<div class="row mt-5">
							<div class="col-md-12"><label class="labels">Pin Charity Center Location</label><br>
								<div id="map-container-google-18" class="z-depth-1-half map-container-11"  style="height: 300px">
									<div name="mapform">                
										<div id="map"></div>
									</div>
								</div>
							</div>    
						</div>                   
			
						<div class="row">
							<div class="col-md-12"><br>
								<input type="text" class="form-control" value="{{$mydata3->latitude}}" name="latitude" id="lat" >
							</div>
							<div class="col-md-12"><br>
								<input type="text" class="form-control" value="{{$mydata3->longitude}}" name="longitude" id="lng" >
							</div>
						</div>


            			</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"><a style="color:black; text-decoration: none;" href="/managehot">Cancel</a></button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                </blockquote>
  </div>
</div>
		  
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
<br>

</html>
</body>


@endsection