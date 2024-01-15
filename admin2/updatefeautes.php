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
        <?php include_once "top_navbar.php"; ?>
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
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">Edit Slide</p>
                  </a>
                </div>
                <a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addslide.php">
                  <i class="mdi mdi-plus-circle"></i> Add slide </a>
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Striped Table</h4>
					<p class="card-description"> Add class <code>.table-striped</code>
                    </p>-->
                  
                    <?php 
                        
						$fid = $_GET['fid'];
						 
						$sql="select * from bh_home_feautes where fid= $fid ";
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                            {
					?>
                      <form class="forms-sample" method="post" action="upfeautes.php" enctype="multipart/form-data">
                      
					  
					   <div class="form-group">
                        <label for="exampleInputName1">Bed No</label>
                        <input type="text" class="form-control" name="bedno" placeholder="Title" value="<?php echo $row['bedno'];?>" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputName1">Bed Des</label>
                        <input type="text" class="form-control" name="beddes" placeholder="Title" value="<?php echo $row['beddes'];?>" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputName1">Operation Theaters No</label>
                        <input type="text" class="form-control" name="otno" placeholder="Title" value="<?php echo $row['otno'];?>" />
                      </div> 
					
                   
                      <div class="form-group">
                        <label for="exampleInputName1">Operation Theaters</label>
                        <input type="text" class="form-control" name="otdes" placeholder="Title" value="<?php echo $row['otdes'];?>" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputName1">Happy Patients No</label>
                        <input type="text" class="form-control" name="happyno" placeholder="Title" value="<?php echo $row['happyno'];?>" />
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Happy Patients</label>
                        <input type="text" class="form-control" name="happydes" placeholder="Title" value="<?php echo $row['happydes'];?>" />
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Years No</label>
                        <input type="text" class="form-control" name="yrsno" placeholder="Title" value="<?php echo $row['yrsno'];?>" />
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Years</label>
                        <input type="text" class="form-control" name="years" placeholder="Title" value="<?php echo $row['years'];?>" />
                      </div>
					  
                      <input type="hidden" value="<?php echo $row['fid'];?>" name="fid">
                                    
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
