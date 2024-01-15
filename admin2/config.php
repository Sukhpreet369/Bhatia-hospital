<?php 
//$base_url="https://bhatiahospital.in/bhatiahospital";$base_url="https://localhost/bhatia-hospital"
$servername="localhost";
$db="bhatia-data";
//$username="bhatia_data";$username="root";
//$password="Pass@123#@";password='';

$conn = new mysqli("localhost", $username, $password,$db);
if($conn->connect_error)
{
    echo "unable to established connection";
}else{
    
}
?>