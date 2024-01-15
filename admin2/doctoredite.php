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
                  <a class="pl-3 mr-4" href="doctor.php">
                    <p class="m-0">Doctor</p>
                  </a>
                </div>
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                    <?php 
                         
						$sql="select * from `doctors` where d_cid=".$_GET['did'];
                            $rs=$conn->query($sql);
                           //echo $rs->num_rows;
                           while($row = $rs->fetch_assoc())
                            {
					?>
                      <form class="forms-sample" method="post" action="uploaddoctor.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" class="form-control" name="d_name" placeholder="Title" value="<?php echo $row['d_name'];?>" />
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="text" class="form-control" name="d_email" placeholder="Slide Content" value=" <?php echo $row['d_email'];?>"/>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="text" class="form-control" name="d_phone" placeholder="Slide Content" value=" <?php echo $row['d_phone'];?>"/>
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail3">Education</label>
                        <input type="text" class="form-control" name="d_educt" placeholder="Slide Content" value=" <?php echo $row['d_educt'];?>"/>
                      </div>


                        <div class="form-group">
                        <label for="exampleInputEmail3">Address</label>
                        <input type="text" class="form-control" name="d_add" placeholder="Slide Content" value=" <?php echo $row['d_add'];?>"/>
                      </div>




                       <div class="form-group">
                        <label for="exampleInputEmail3">Doctor Specialist</label>
                        <input type="text" class="form-control" name="d_spec" placeholder="Slide Content" value=" <?php echo $row['d_spec'];?>"/>
                      </div>




                      <div class="form-group">
          						  <img src="<?php echo "files/".$row['d_img'];?>" alt="image"  width="150px" border="5"/>
          						  <input type="text" name="oldimg" value="<?php echo $row['d_img']; ?>">  
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
                      
                      <input type="hidden" value="<?php echo $row['d_cid'];?>" name="did">
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    <?php }
                   
                    ?>
                    </div>
                  </div>
            </div>
        </div>
              <?php include_once "footer.php";?>

<
