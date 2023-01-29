<?php

$conn = mysqli_connect('mysql.vcari.net', 'suryantiawang','yantiump22', 'floodres');


	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
if(isset($_POST['Confirm']))
{

    $id = $_GET['GetID'];
	$RN = $_POST['ReliefCentre_Name'];	
    $Locals_Name = $_POST['Locals_Name'];
	$Total_Resident = $_POST['Total_Resident'];
	$CurrentAddress = $_POST['CurrentAddress'];
	$Date = $_POST['Date'];
	$isRegistered = $_POST['isRegistered'];

		
	$query = "UPDATE checkins 
              SET 
                ReliefCentre_Name ='$RN',
                Locals_Name = '$Locals_Name',
                Total_Resident =  '$Total_Resident',
                CurrentAddress = '$CurrentAddress', 
                Date =  '$Date',
                isRegistered = '$isRegistered'
                WHERE id = '$id'";
                      
	$result = mysqli_query($conn, $query);
		
		$que = "SELECT * FROM reliefcentres WHERE ReliefCentre_Name='$RN'";
		$que_run = mysqli_query($conn, $que);
        //$balance = mysqli_num_rows($que_run);
		if (mysqli_num_rows($que_run)>0){
			while($row=mysqli_fetch_assoc($que_run)){
				$test=$row['ReliefCentre_Capacity'];
			}
		}
		
		$newQuant=$test-$Total_Resident;
				
		$qry = "UPDATE reliefcentres
				SET ReliefCentre_Capacity='$newQuant'
				WHERE ReliefCentre_Name='$RN'";

		$rest = mysqli_query($conn, $qry);
        
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:/admin/listallocate");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location: /allocatePHP.php");
		}
	
}
else{
	header("Location: /allocatePHP.php");
	exit();
	
}
    

?>