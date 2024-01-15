<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>


<?php include_once "config.php";?>
<?php include_once "header.php"?>


  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
	  
	<?php include_once "top_navbar.php";?>
	
      
        <!-- partial -->

<div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
               
              </div>
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <a class="pl-3 mr-4" href="slider.php">
                    <p class="m-0">Slide</p>
                  </a>
                </div>
                
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php 
  if(isset($_POST['submit'])):
  $slideimg=$_FILES['slideimage']['name'];
  $btntxt=$_POST['btntxt'];
  $btnurl=$_POST['btnurl'];
  $lnk = $_POST['link'];
  $extension = pathinfo($slideimg,PATHINFO_EXTENSION);

  $path="files/".$slideimg;
  if(move_uploaded_file($_FILES['slideimage']['tmp_name'],$path)){
  
$sql="insert into bh_home_slider (imageUrl,ButtonText,ButtonUrl,link) values('$slideimg','$btntxt','$btnurl','$lnk')";
  
  if ($conn->query($sql)===TRUE) {
            echo "Slide Created";
        }
        else
        {
            echo $conn->error;
        }
      }
endif;
?>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="slideimage" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group d-none">
                        <label for="exampleInputPassword4">Slide Button Text</label>
                        <input type="text" class="form-control" name="btntxt" placeholder="Button Text" />
                      </div>
                      <div class="form-group d-none">
                        <label for="exampleInputPassword4">Slide Button Url</label>
                        <input type="text" class="form-control" name="btnurl" placeholder="Button Url" />
                      </div>

                       <div class="form-group">
                        <label>Slide Url</label>
                        <input type="text" class="form-control" name="link" placeholder="Slide Url" />
                      </div>
                   
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>


                    
                  </div>
                </div>
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>