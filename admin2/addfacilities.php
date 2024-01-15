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
                  <a class="pl-3 mr-4" href="facilities.php">
                  <p class="m-0">Facilities</p>
                  </a>
                </div>
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<?php 
						if(isset($_POST['submit'])):
						
						$fl = $_POST['list'];

						$sql="insert into facilities(list) values('$fl')";
					  
						if ($conn->query($sql)===TRUE) {
								echo "Record Succesfully";
							}
							else
							{
								echo $conn->error;
							}
						endif;
					?>
					
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
                     <div class="form-group">
                        <label for="exampleInputName1">Facilities List</label>
                        <input type="text" class="form-control" name="list" placeholder="Doctor Name" />
                      </div>
					  
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    
                  </div>
				  
                </div>
				
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>