<?php  

			include_once "config.php";
  
    
                    $bedno=$_POST['bedno'];
                        $beddes=$_POST['beddes'];
                        $otno=$_POST['otno'];
                        $otdes=$_POST['otdes'];
                        $happyno=$_POST['happyno'];
						$happydes = $_POST['happydes'];
						$yrsno = $_POST['yrsno'];
						$years = $_POST['years'];
						$fid=$_POST['fid'];
						echo $bedno;
                      
                        //echo $slideimg;
                        $sql="UPDATE bh_home_feautes SET 
						bedno ='$bedno', 
						beddes ='$beddes', 
						otno = '$otno', 
						otdes = '$otdes', 
						happyno = '$happyno',
						happydes = '$happydes', 
						yrsno = '$yrsno', 
						years = '$years'";
						
                        //echo $sql;
                        if ($conn->query($sql)===TRUE) {
                       header("location:feautes.php");
                        //echo "updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
?>
