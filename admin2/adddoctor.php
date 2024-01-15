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
                  <a class="pl-3 mr-4" href="doctor.php">
                    <p class="m-0">Doctor</p>
                  </a>
                </div>
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<?php 
						if(isset($_POST['submit'])):
						
						//$did = $_POST['d_cid'];
						$dnme = $_POST['d_name'];
						$de = $_POST['d_educt'];
						$dsp = $_POST['d_spec'];
            $dpt = $_POST['dep_title']	;
					  
						
						$dimg = $_FILES['d_img']['name'];
					 
						$path="files/".$dimg;
						if(move_uploaded_file($_FILES['d_img']['tmp_name'],$path)){
					  
						$sql="insert into doctors(d_name, d_educt, d_spec, d_img, dep_title) values('$$dnme', '$de', '$dsp', '$dimg', '$dpt')";
					  
						if ($conn->query($sql)===TRUE) {
								echo "Record Succesfully";
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
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" class="form-control" name="d_name" placeholder="Doctor Name" />
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputEmail3">Doctor Education</label>
                        <input type="text" class="form-control" name="d_educt" placeholder="Doctor Education" />
                      </div>
					  
					           <div class="form-group">
                        <label for="exampleInputEmail3">Doctor Specialist </label>
                        <input type="text" class="form-control" name="d_spec" placeholder="Doctor Specialist" />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Doctor Department</label>
                        <input type="text" class="form-control" name="dep_title" placeholder="Doctor Department" />
                      </div>
					  
					  
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="d_img" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                        <span style="font-size:14px;color:#ff0000;">( Image Size 558 x 575 )</span>
                      </div>
					  
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    
                  </div>
				  
                </div>
				
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>