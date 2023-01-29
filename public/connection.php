<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "onecare";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "<br>";
	echo "Connection failed!";
}

?>