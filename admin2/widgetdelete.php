<?php include_once "config.php";?>
<?php
$sid=$_GET['wid'];

$sql="delete from bh_home_widgets where w_id='$sid'";
  if ($conn->query($sql)===TRUE) {
  
 header("location:widgets.php");
  }
  else
  {
  echo $conn->error;
  }