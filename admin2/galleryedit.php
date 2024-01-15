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
        <?php include_once "top_navbar.php";?>>
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
                  <a class="pl-3 mr-4" href="gallery.php">
                    <p class="m-0">Gallery</p>
                  </a>
                </div>
                
              </div>
            </div>
      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                    <?php 
                         
                       $sql="select * from `gallery` where gallery_id=".$_GET['gid'];                        
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                            {
                  ?>
                      <form class="forms-sample" method="post" action="uploadgallery.php" enctype="multipart/form-data">
                    
                      <div class="form-group">
                        <img src="<?php echo "files/".$row['gallery_img_nme'];?>" alt="image" width="150px" border="5"/>
                        <input type="text" name="oldimg" value="<?php echo $row['gallery_img_nme']; ?>">  
                      </div> 
            
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
                      
                      <input type="hidden" value="<?php echo $row['gallery_id'];?>" name="gid">
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    <?php }
                   
                    ?>
                    </div>
                  </div>
            </div>
        </div>
              <?php include_once "footer.php";?>


