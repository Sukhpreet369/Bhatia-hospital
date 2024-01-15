<?php include_once "config.php"; ?>
<?php
$srid=$_GET['fl'];

$sql="delete from facilities where f_id='$srid'";

  if ($conn->query($sql)===TRUE) {
  
 header("location:facilities.php");
  }
  else
  {
  echo $conn->error;
  }