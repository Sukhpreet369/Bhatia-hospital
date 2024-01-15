<?php  
include_once "config.php";
  
    
                    /*$stitle=$_POST['stitle'];
                        $scontent=$_POST['scontent']; */
                        echo $_POST['oldimg'];
                       /* $btntxt=$_POST['btntxt'];
                        $btnurl=$_POST['btnurl'];
                       */
                        $sid=$_POST['sid'];
                      
                      $link=$_POST['link'];
                       
                      $slideimg=$_FILES['slideimage']['name'];
  
                      if($slideimg!=''){
                        echo "hello";
                        $slideimg=$_FILES['slideimage']['name'];
                          unlink("files/".$_POST['oldimg']);  
                        $path="files/".$slideimg;
                        $extension = pathinfo($slideimg,PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['slideimage']['tmp_name'],$path);
                      }
                      else
                      {
                        $slideimg=$_POST['oldimg'];
                       }  
                        //echo $slideimg;
                        //$sql="update bh_home_slider set slide_title='$stitle',slide_content='$scontent',imageUrl='$slideimg',ButtonText='$btntxt',ButtonUrl='$btnurl' where sid='$sid'";
                        //echo $sql;
                        $sql="update bh_home_slider set imageUrl='$slideimg',link='$link' where sid='$sid'";
                        echo $sql;
                        if ($conn->query($sql)===TRUE) {
                        header("location:slider.php");
                        //echo "updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
