<?php  

			include_once "config.php";
  
    
                    $sertitl = $_POST['sertitl'];
                        $serdes=$_POST['serdes'];
						$srid = $_POST['srid'];
                      
                        //echo $slideimg;
                        $sql="UPDATE bh_home_services SET 
						sertitl ='$sertitl', 
						serdes ='$serdes' where srid =$srid ";
						
                        //echo $sql;
                        if ($conn->query($sql)===TRUE) {
                       header("location:service.php");
                        //echo "updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
?>
