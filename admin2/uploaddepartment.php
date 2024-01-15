<?php  
include_once "config.php";
  
    
                        $dept = $_POST['dep_title'];
                        $deps = $_POST['dep_slug'];
                        $depdes =$conn->real_escape_string($_POST['dep_des']);;
                        $trm = $conn->real_escape_string($_POST['treatments']);

                        $cid=$_POST['dp'];
                      
                      //$link=$_POST['link'];
                       
                      $slideimg=$_FILES['slideimage']['name'];
  
                      if($slideimg!=''){
                        echo "hello";
                        $slideimg=$_FILES['slideimage']['name'];
                          unlink("files/".$_POST['oldimg']);  
                        $path="files/".$slideimg;
                        
                        $extension = pathinfo($slideimg,PATHINFO_EXTENSION);

                        move_uploaded_file($_FILES['slideimage']['tmp_name'], $path);
                      }
                      else
                      {
                        $slideimg=$_POST['oldimg'];
                       }

                        $sql="update department SET 
                              dep_title = '$dept',
                              dep_slug = '$deps', 
                              dep_des = '$depdes', 
                              treatments = '$trm',
                              dep_feat_img ='$slideimg' 
                                  where 
                              dep_id ='$cid'";

                        //echo $sql;

                        if ($conn->query($sql) === TRUE) {
                          header("location:department.php");
                        }
                        else
                        {
                        echo $conn->error;
                        }
                        
                       
                        ?>
                      
                    
