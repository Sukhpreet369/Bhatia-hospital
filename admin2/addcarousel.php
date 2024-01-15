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
                  <a class="pl-3 mr-4" href="carousel.php">
                    <p class="m-0">Carousel</p>
                  </a>
                </div>
                <!--<a type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addslide.php">
                  <i class="mdi mdi-plus-circle"></i> New Slide </a>-->
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<?php 
						if(isset($_POST['submit'])):
					  
						
						$cimg = $_FILES['carousel_img']['name'];
					 
						$path="files/".$cimg;
						if(move_uploaded_file($_FILES['carousel_img']['tmp_name'],$path)){
					  
						$sql="insert into bh_home_carousel(carousel_img) values('$cimg')";
					  
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
					
                     <!-- <div class="form-group">
                        <label for="exampleInputName1">Slide Title</label>
                        <input type="text" class="form-control" name="stitle" placeholder="Title" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputEmail3">Slide Text</label>
                        <input type="text" class="form-control" name="scontent" placeholder="Slide Content" />
                      </div>-->
					  
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="carousel_img" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                      </div>
					  
                      <!-- <div class="form-group">
                        <label for="exampleInputPassword4">Slide Button Text</label>
                        <input type="text" class="form-control" name="btntxt" placeholder="Button Text" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputPassword4">Slide Button Url</label>
                        <input type="text" class="form-control" name="btnurl" placeholder="Button Url" />
                      </div> -->                  
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    
                  </div>
				  
                </div>
				
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>