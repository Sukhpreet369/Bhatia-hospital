<?php  
include_once "config.php";
  
    
                        $fl=$_POST['list'];
                        
                        $cid=$_POST['fl'];

                
                $sql = "update facilities SET 
                        list = '$fl'
                          where 
                        f_id='$cid'";

                        if ( $conn->query($sql) === TRUE ) {

                          header("location:facilities.php");
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
