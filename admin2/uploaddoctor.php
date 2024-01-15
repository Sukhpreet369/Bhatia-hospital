<?php  
include_once "config.php";
  
    
                        $dname=$_POST['d_name'];
                        $demail=$_POST['d_email']; 
                        $dphone=$_POST['d_phone'];
                        $deduct=$_POST['d_educt'];
                        $dadd=$_POST['d_add'];
                        $dspec=$_POST['d_spec'];
                        
                        $cid=$_POST['did'];
                       
                      $slideimg=$_FILES['slideimage']['name'];
  
                      if($slideimg!=''){

                        $slideimg=$_FILES['slideimage']['name'];
                          unlink("files/".$_POST['oldimg']);  
                        $path="files/".$slideimg;
                        $extension = pathinfo($slideimg, PATHINFO_EXTENSION);

                        move_uploaded_file($_FILES['slideimage']['tmp_name'],$path);

                      }
                      else
                      {
                        $slideimg=$_POST['oldimg'];
                       }  
                        echo $slideimg;

                
                $sql = "update doctors SET 
                        d_name = ' $dname', 
                        d_email = '$demail', 
                        d_phone = '$dphone', 
                        d_educt = '$deduct', 
                        d_add =' $dadd',
                        d_spec = ' $dspec', 
                        d_img = '$slideimg' 
                          where 
                        d_cid='$cid'";

                        if ( $conn->query($sql) === TRUE ) {

                          header("location:doctor.php");
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
