<?php include_once "config.php";?>
<?php
$sid=$_GET['sid'];

$sql="delete from bh_home_slider  where sid='$sid'";
  //echo $sql;
  if ($conn->query($sql)===TRUE) {
  
 header("location:slider.php");
  }
  else
  {
  echo $conn->error;
  }