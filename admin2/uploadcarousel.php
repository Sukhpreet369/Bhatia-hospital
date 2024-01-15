<?php  
include_once "config.php";
  
    
                    /*$stitle=$_POST['stitle'];
                        $scontent=$_POST['scontent']; */
                        echo $_POST['oldimg'];
                       /* $btntxt=$_POST['btntxt'];
                        $btnurl=$_POST['btnurl'];
                       */
                        $cid=$_POST['cid'];
                      
                      //$link=$_POST['link'];
                       
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
                        $sql="update gallery set gallery_img_nme ='$slideimg' where gallery_id='$cid'";
                        echo $sql;
                        if ($conn->query($sql)===TRUE) {
                        header("location:carousel.php");
                        //echo "updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
