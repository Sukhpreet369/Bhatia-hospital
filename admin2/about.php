<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>

<?php include_once "header.php";?>
<?php include_once "config.php";?>
<body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
      
        <!-- partial:partials/_settings-panel.html -->
        <?php include_once "top_navbar.php";?>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
               
              </div>
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="index.php">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <a class="pl-3 mr-4" href="about.php">
                    <p class="m-0">About</p>
                  </a>
                </div>
                <!--<a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addslide.php">
                  <i class="mdi mdi-plus-circle"></i> Add slide </a>-->
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     <!-- <h4 class="card-title">Striped Table</h4>
                  <p class="card-description"> Add class <code>.table-striped</code>
                    </p>-->
                  <?php

                  if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    //echo $_POST['oldimg'];
                   $section_id=$_POST['section_id'];
                   $slideimg=$_FILES['slideimage']['name'];

                  if($slideimg!=''){
                     $slideimg=$_FILES['slideimage']['name'];
                     if(isset($_POST['oldimg'])): 
                     unlink("../img/".$_POST['oldimg']);  
                     endif;
                     $path="../img/".$slideimg;
                    $extension = pathinfo($slideimg,PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['slideimage']['tmp_name'],$path);
                  }
                  else
                  {
                    $slideimg=$_POST['oldimg'];
                   }  
                    //echo $slideimg;
                    $sql="update bh_homepage_about set title='$title',description='$description',imageUrl='$slideimg' where section_id='$section_id'";
                    //echo $sql;
                    if ($conn->query($sql)===TRUE) {
                
                    echo "updated";
                    }
                    else
                    {
                    echo $conn->error;
                    }          
                  }
                  ?>

                    <?php 
                         
                    $sql="select * from bh_homepage_about where section_id=1";
                            $rs=$conn->query($sql);
                           //echo $rs->num_rows;
                           while($row = $rs->fetch_assoc())
                            {
					?>
                      <form class="forms-sample" method="post"  enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $row['title'];?>" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <textarea class="form-control" rows="15" name="description" value="<?php echo $row['description'];?>"><?php echo $row['description'];?></textarea>
                       
                      </div>
                      <div class="form-group">
                      <?php if(isset($row['imageurl'])):?>
                     <img src="../img/<?php echo $row['imageurl'];?>" alt="image"  width="150px" border="5"/>
                      <input type="hidden" name="oldimg" value="<?php echo $row['imageurl']; ?>"> 
                    <?php endif;?>
                    </div> 
                    <div class="form-group">
                    <label>File About Image upload</label>
                        <input type="file" name="slideimage" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                      </div>
                                            
                      <input type="hidden" value="<?php echo $row['section_id'];?>" name="section_id">
                        
                      
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    <?php }
                   
                    ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php include_once "footer.php";?>


