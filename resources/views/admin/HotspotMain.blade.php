@extends('admin.master')
@section('content')


<?php
include 'connection.php';
?>

<body onload="getLocation()">

<div class="container" >
	<h2 style="font-family:verdana;font-weight: bold;"> Care Center </h2><br>
		<div class="row">
			<div class="col mb-2">
				<div class="text-center"style="margin-left:20px">
					<button class="btn btn-danger mb-3" data-toggle="modal" data-target="#modalAddForm" style="float:right;width:120px;">Add Center</button>

					<a style="float:right;width:150px;margin-right:10px;" href="/managehot" class="btn btn-info" >Manage Center</a>
				</div>
			</div>
		</div>

	@foreach($mydata3 as $hotspot)
	<div class="col-sm-6 mb-2">
		<div class="card">
		<div class="card-body">
			<h5 class="card-title">{{$hotspot->LocationName}}</h5>
			<p class="card-text">{{$hotspot->Add}}</p>
			<a type="button" class="btn btn-primary"  onclick="approve(<row id>)" href="/hotspot/{{$hotspot->id}}/hotspotDetail">View</a></td>
		</div>
		</div>
	</div>
	@endforeach
	
	
<div class="Stats" id="Stats">
<div class="container mt-3" style="overflow-x:auto;">
<div id="chartContainer" style="width:100%; height:100%;overflow-y:scroll"></div>
</div></div>


<?php  
 $query = "SELECT LocationState, count(*) as number FROM hotspots GROUP BY LocationState";  
 $result = mysqli_query($conn, $query);  
 ?>  

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
         var myMapsApiKey = 'AIzaSyDBd-QLjHquKqDso6U_bu86hK3_m0DOL9c';
      google.charts.load("current", {packages:["geochart"], mapsApiKey: myMapsApiKey  });
      google.charts.setOnLoadCallback(drawRegionsMap);
      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
                          ['State', 'Number'],  
                          <?php
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["LocationState"]."', ".$row["number"]."],";  
                          }  
                          ?>
                        //   ['Kelantan',2],['Pahang',3],['Terengganu',4],['Pulau Pinang',6]
                     ]);  
                     var options = {
          title: 'Overall  by States',
          region:'MY',
          displayMode: 'markers',
          colorAxis: {colors: ['red']},
          backgroundColor: 'darkgrey',
          datalessRegionColor: 'grey',
          defaultColor: 'green',
        //   is3D: true,
        //   animationEnabled:true,
        //   backgroundColor: '#DCDCDC',
           chartArea: {left:30, right:40,top:20, width:'50%', height:'90%'},
        };
        var chart = new google.visualization.GeoChart(document.getElementById('chartContainer'));
        chart.draw(data, options);
      }
    </script>



	
	<div class="modal fade" id="modalAddForm" tabindex="-1" aria-labelledby="modalAddForm" aria-hidden="true">
		<div class="modal-dialog"  >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"  id="modalAddFormLabel">Add Charity Center</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<form action="/addhot/create" method="POST"> <!--Create to sent it to db -->
					{{csrf_field()}}
						<div class="mb-3">
							<label for="LocationName" class="form-label">Center Name:</label>
							<input name="LocationName" type="text" class="form-control" id="LocationName" placeholder="Name">
						</div>

						<div class="mb-3">
							<label for="LocationState" class="form-label">State:</label>
							<select name="LocationState" class="form-control" id="LocationState" aria-label="Default select example">
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
								<input type="hidden" class="form-control" placeholder="lat" name="latitude" id="lat" >
							</div>
							<div class="col-md-12"><br>
								<input type="hidden" class="form-control" placeholder="lng" name="longitude" id="lng" >
							</div>
						</div>

						<div class="modal-footer d-flex justify-content-center" style="padding:20px;text-align:center">
							<button class="btn btn-unique" style="background-color:blue;color:white;padding-left:30px;"> Publish Center <i class="fas fa-paper-plane-o ml-1"></i></button>
						</div>
				</div>
			</div>
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