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
                  <a class="pl-3 mr-4" href="gallery.php">
                    <p class="m-0">Gallery</p>
                  </a>
                </div>
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php 
  if(isset($_POST['submit'])){
    
    $glry = $_FILES['gallery_img_nme']['name'];
	$ord = $_POST['orderno'];
    $path="files/gallery/".$glry;

    if(move_uploaded_file($_FILES['gallery_img_nme']['tmp_name'],$path)){
  
      $sql="insert into gallery (gallery_img_nme, orderno) values('$glry', '$ord')";
  
       if ($conn->query($sql)===TRUE) {
            echo "Gallery Created";
          }
          else
          {
              echo $conn->error;
          }
       }
     }
?>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label>Gallery Name</label>
                        <input type="file" name="gallery_img_nme" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Gallery" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                        <span style="font-size:14px;color:#ff0000;">( Image Size 800 x 533 )</span>
                        
                      </div>
					  
                      <div class="froom-group">
                          <label>Gallery Order By</label>
                          <input type="text" name="orderno" class="form-control" placeholder="order by" />
                      </div>
                                    
                      <button type="submit" class="btn btn-primary mr-2 mt-4" name="submit"> Save </button>
                      
                    </form>


                    
                  </div>
                </div>
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>