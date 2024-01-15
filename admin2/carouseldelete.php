<?php include_once "config.php";?>

<?php
$cid=$_GET['cid'];

$sql="delete from bh_home_carousel  where c_id='$cid'";
  //echo $sql;
  if ($conn->query($sql)===TRUE) {
  
 header("location:carousel.php");
  }
  else
  {
  echo $conn->error;
  }