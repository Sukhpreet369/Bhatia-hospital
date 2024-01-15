<?php  
include_once "config.php";
  
    
                        
                        $usr=$_POST['username'];
                        $pwd =$_POST['pwd'];


      $sql="UPDATE user set pwd ='".$_POST['pwd']. "' WHERE username ='" . $_POST['username']."'";

                        echo $sql;
                        if ($conn->query($sql)===TRUE) {
                        header("location:changepassword.php?msg='Your password is Changed'");
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
