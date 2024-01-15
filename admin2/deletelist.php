<?php include_once "config.php";?>
<?php
$list_id=$_GET['list_id'];

$sql="delete from bh_about_list  where list_id='$list_id'";
  //echo $sql;
  if ($conn->query($sql)===TRUE) {
  
 header("location:about_feature_list.php");
  }
  else
  {
  echo $conn->error;
  }