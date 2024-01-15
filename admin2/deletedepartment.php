<?php include_once "config.php"; ?>
<?php
  $did = $_GET['dp'];

  $sql="delete from department where dep_id ='$did'";
  echo $sql;
  if ($conn->query($sql)===TRUE) {

    header("location:department.php");

  }
  else
  {
    echo $conn->error;
  }