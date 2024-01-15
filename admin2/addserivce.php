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
                  <a class="pl-3 mr-4" href="service.php">
                    <p class="m-0">Service</p>
                  </a>
                </div>
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<?php 
						if(isset($_POST['submit'])){
					  
						
						$srt = $_POST['sertitl'];
						$srdes = $_POST['serdes'];
            $sricon = $_POST['icon'];
					  
						$sql="insert into bh_home_services(sertitl, serdes, icon) values('$srt', '$srdes', '$sricon')";
					  
							if ($conn->query($sql)===TRUE) {
								echo "Services Created";
							}
							else
							{
								echo $conn->error;
							}
						}
					?>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
                      <div class="form-group">
                        <label for="exampleInputName1">Service Title</label>
                        <input type="text" class="form-control" name="sertitl" placeholder="Title" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputEmail3">Service Des</label>
                        <input type="text" class="form-control" name="serdes" placeholder="Slide Content" />
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail3">Service Icon</label>
                        <input type="text" class="form-control" name="icon" placeholder="Slide Content" />
                      </div>
					             
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    
                  </div>
				  
                </div>
				
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>