<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="/logo_fixaflood.png">
<link rel="manifest" href="/manifest.json">

    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
 <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  <link
    rel="stylesheet"
    href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"
  />
  <link
    rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
  </script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> 
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy52JvksdgB7fRSFztHAYtM3cACUaETzk&callback=initMap"></script> -->
<!-- <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy52JvksdgB7fRSFztHAYtM3cACUaETzk"></script> -->
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBd-QLjHquKqDso6U_bu86hK3_m0DOL9c&callback=initMap">
    </script> 
      <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- playground-hide -->
    <script>
      const process = { env: {} };
      process.env.GOOGLE_MAPS_API_KEY =
        "AIzaSyDBd-QLjHquKqDso6U_bu86hK3_m0DOL9c";
    </script>
    <!-- playground-hide-end -->

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <script src="./js/addons/datatables.min.js"></script>


<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
  </script>
  <script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style>
			#map {
      width: 100%;
      height: 550px;
    }
    .map-container-9,
.map-container-10,
.map-container-11 {
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-9 iframe,
.map-container-10 iframe,
.map-container-11 iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}
.form_wrapper,
.form_wrapper_splited {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
}

.form_wrapper {
  select {
    width: 100%;
  }
}
.form_wrapper_splited {
  label {
    display: block;
    width: 100%;
  }
  select {
    display: inline-block;
    width: 49%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
}
		body {
		  background-image: url('https://img.freepik.com/free-photo/light-olive-green-watercolor-texture-wallpaper_53876-95514.jpg?w=2000');
		  	
		}

		a:link { text-decoration: none; }


		a:visited { text-decoration: none; }


		a:hover { text-decoration: none; }


		a:active { text-decoration: none; }

    
		</style>
		
		</head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c5d8a6;">
		  <div class="container-fluid">
			<a class="navbar-brand" href="/">
			  <img src="https://cdn-icons-png.flaticon.com/512/171/171789.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
			</a>
				<a class="navbar-brand" style="color: black;font-style: oblique;font-weight: bold;font-size:25px;" href="/">OneCare</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<a class="nav-link active" aria-current="page" style="color:black;font-size:17px;" href="/locals/Homepage">Home</a>
				<a class="nav-link" style="color:black;font-size:17px;" href="/locals/donate">Donate</a>
				<a class="nav-link" style="color:black;font-size:17px;" href="/locals/req">Request</a>
				<a class="nav-link" style="color:black;font-size:17px;" href="/locals/event">Event</a>
				<a class="nav-link" style="color:black;font-size:17px;" href="/locals/hot">HotSpot</a>
				<a class="nav-link" style="color:black;font-size:17px;" href="/locals/Profile">Profile</a>
      
			  </div>
			  
			</div>
			<span class="navbar-text" style="color: black;font-style: oblique;font-weight: bold;">
			Giving goes beyond donations.
			</span>
		  </div>
		</nav>
		
		<br>
		@yield('content')
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	</body>
</html>