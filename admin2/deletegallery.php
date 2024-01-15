<?php include_once "config.php";?>
<?php
$glid=$_GET['gid'];

$sql="delete from gallery where gallery_id='$glid'";

  if ($conn->query($sql)===TRUE) {
  
 header("location:gallery.php");
  }
  else
  {
  echo $conn->error;
  }