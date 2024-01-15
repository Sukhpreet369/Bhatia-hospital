<?php  
include_once "config.php";
  
    
                        $wt=$_POST['w_title'];
                        $wd=$_POST['w_des'];
                        $wid=$_POST['w_id'];    

                        //echo $slideimg;
                        $sql="update bh_home_widgets set w_title ='$wt', w_des ='$wd' where w_id='$wid'";
                        //echo $sql;
                        if ($conn->query($sql)===TRUE) {
                        header("location:widgets.php");
                        //echo "updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
