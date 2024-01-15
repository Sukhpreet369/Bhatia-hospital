<?php include_once "config.php"; ?>
<?php
$srid=$_GET['srid'];

$sql="delete from bh_home_services  where srid='$srid'";
  //echo $sql;
  if ($conn->query($sql)===TRUE) {
  
 header("location:service.php");
  }
  else
  {
  echo $conn->error;
  }