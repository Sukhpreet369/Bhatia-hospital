<?php 

	$base_url="http://localhost/bhatiahospital";
	$servername="localhost";
	$db="bhatia-data";
	$username="root";
	$password="";
	$conn = mysqli_connect($servername,$username,$password,$db);
	//$conn = mysqli_connect('localhost','bhatia_data','Pass@123#@','bhatia_data');
	if($conn->connect_error){
		echo "Database Error !!";
	}

?>
