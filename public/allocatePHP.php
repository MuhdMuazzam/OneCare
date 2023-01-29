<?php

$conn = mysqli_connect('mysql.vcari.net', 'suryantiawang','yantiump22', 'floodres');

	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
  $id = $_GET['GetID'];

	$query = "SELECT * FROM checkins WHERE id='".$id."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{

        $ReliefCentre_Name = $row['ReliefCentre_Name'];
        $Locals_Name = $row['Locals_Name'];
        $Total_Resident = $row['Total_Resident'];
        $CurrentAddress = $row['CurrentAddress'];
        $Date = $row['Date'];
        $isRegistered = $row['isRegistered'];
    
	
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- Plugin file 
<link rel="stylesheet" href="./css/addons/datatables.min.css"> -->
<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>
  <style>

     /* width */
     ::-webkit-scrollbar {
  width: 2px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:lightgrey; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
 body{
    overflow-y:hidden;
  }
.text-center{
  margin-top:20px;
  padding-right:50px;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
body {
    background-color: #f9f9fa
}

.padding {
    padding: 300px!important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.nav-link, .title{
    font-size:19px;
    color:gray;
    margin-left:9px;
    font-weight:bold;
    padding:20px 10px 25px;
    font-family:"SoDO Sans";
}

     </style>
   <!-- </head>
   <body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">FloodCare</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
          <i class="material-icons" style="font-size:36px">dashboard</i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="material-icons" style="font-size:36px">group</i>
            <span class="links_name">List Users</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="material-icons" style="font-size:36px">people</i>
            <span class="links_name">List Victims</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="material-icons" style="font-size:36px">home</i>
            <span class="links_name">Relief Centre</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="material-icons" style="font-size:36px">person</i>
            <span class="links_name">My Profile</span>
          </a>
        </li>
        <li>
          <a href="/admin/report">
          <i class="material-icons" style="font-size:36px">folder</i><br>
          <span class="links_name">Report</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
          <i class="material-icons" style="font-size:36px">logout</i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div> -->
  
<header>        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="title active"href="http://127.0.0.1:8000/admin/admin2home" style="padding-right:10px;text-decoration:none;">
  <span class="h2 fw-bold mb-0" style="font-family:sans-serif;color:#00918f;"><b>Flood</b> <span style="color:darkgray"><b>Res</b> </span> </span>
</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="margin"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="/admin/admin2home">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Relief Centre
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/admin/listallocate">Allocate</a>
        <a class="dropdown-item" href="/admin/listcentre">Manage Centre</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Report
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/admin/victimOverview">Victims</a>
        <a class="dropdown-item" href="/admin/usersOverview">Users</a>
        <a class="dropdown-item" href="/admin/centreOverview">Relief Centre</a>
      </div>
    </li>
      <hr>
      <li class="nav-item">
        <a class="nav-link" href="/admin/profile">Prem Sashi</a>
      </li>
<hr>
    </ul>
</nav>
</header>
<article>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Plugin file -->
<script src="./js/addons/datatables.min.js"></script>

	
<body style="background:offwhite">
<table style="background-color:darkgrey">
<div class="text-center" style="width:100%;padding-left:15px;margin-top:-7px; overflow-y:hidden;">
    <tr>
        <td style="background-color:silver;padding:15px;padding-bottom:5px;padding-top:20px;">
        <a href="/locals/home" class="w3-xlarge" style="color:grey; ext-decoration:none;"><i class="fa fa-chevron-left	"></i></li></a>   
        </td>
    <td style="background-color:silver;width:100%;float:center;">
    <h5 class="text-center"style="font-size:20px" >
        Check-in Relief Centre
    </h5>          
    </td>         
    </tr></div>
</table>
<br>
<div class="d-flex justify-content-center"> 
<div class="col-md-5 border-right"style="background:offwhite">
            <div class="p-4 py-5">
            <div style="text-align:center;font-style:bold">
            <a href="/data/<?php echo $id?>/showcentre">Show Nearby Centre</a>
            </div>
            <form action="/dispense.php?GetID=<?php echo $id?>" method="post">
        <?php
        $query1 = "SELECT * FROM reliefcentres";

        $result = mysqli_query($conn, $query1);
      ?>
        <div class="row mt-0">
				</div>
				<div class="col-md-12">
				<div class="input-group mb-3">
				</div> 					
				</div>
					<div class="col-md-12"><label class="labels" style="margin-top:5px;border:1px lightgrey">Name</label><br><input style="width:100%"class="form-control"type="text" name="Locals_Name" id="Locals_Name"value="<?php echo $row['Locals_Name']?>"></div>
					<div class="col-md-12"><label class="labels" style="margin-top:5px;border:1px lightgrey">Address</label><br><input style="width:100%"class="form-control"type="text" name="CurrentAddress" id="CurrentAddress"value="<?php echo $row['CurrentAddress']?>"></div>
         			 <div class="col-md-12"><label class="labels" style="margin-top:5px;border:1px lightgrey">Date</label><br><input style="width:100%"class="form-control"type="date" name="Date" id="datetime"value="<?php echo $row['Date']?>"></div>
					<div class="col-md-12"><label class="labels" style="margin-top:5px;border:1px lightgrey">Total Residents</label><br><input style="width:100%"class="form-control"type="number" name="Total_Resident" id="Total_Resident"value="<?php echo $row['Total_Resident']?>"></div>
        	<!-- <div class="col-md-12"><label class="labels" style="margin-top:5px;border:1px lightgrey">Relief Centre Name</label><br><input style="width:100%"class="form-control"type="text" name="ReliefCentre_Name" id="ReliefCentre_Name"value=""></div> -->
          <div class="col-md-12">
          <label class="labels" >Relief Centre</label>
          <select class="form-control style="width:100%" name="ReliefCentre_Name" id="ReliefCentre_Name">            
            <?php
           while($row=mysqli_fetch_assoc($result))
           {
           $ReliefCentre_Name = $row['ReliefCentre_Name'];
            ?>      
            <option><?php echo $row['ReliefCentre_Name']?></option>
            <?php
            }
            ?>
          </select>
          </div>
					<br><div class="col-md-12">
					<div class="form-check">
					<input class="form-check-input" type="radio" name="isRegistered" id="isRegistered"value="Done Allocated">
					<label class="form-check-label" for="isRegistered">
						Confirm Allocate
					</label>
					</div>
          </div>  
          <div class="mt-4 text-center"><button class="btn btn-primary primary-button" type="submit" name="Confirm" style="font-size:20px;margin-left: 20px;">Allocate</button></div>
          </div>
            </div>
        </div>
    </div>
</div>
<?php }
?>
</body>
</article>
</html>
