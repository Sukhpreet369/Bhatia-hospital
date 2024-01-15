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
                  <a class="pl-3 mr-4" href="widgets.php"><p class="m-0">widgets</p></a>
                </div>
                <!-- <a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addcarousel.php">
                  <i class="mdi mdi-plus-circle"></i> Add slide </a> -->
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                  
                      <?php 
                         
						              $sql="select * from bh_home_widgets where w_id=".$_GET['wid'];
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                            {
					             ?>

                      <form class="forms-sample" method="post" action="uploadwidgets.php" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label>Widget Title</label>
                        <input type="text" class="form-control" name="w_title" value="<?php echo $row['w_title'];?>" />
                      </div>

                      <div class="form-group">
                        <label>Widget Text</label>
                        <input type="text" class="form-control" name="w_des" value=" <?php echo $row['w_des'];?>"/>
                      </div>

                      <input type="hidden" value="<?php echo $row['w_id'];?>" name="w_id">
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    <?php }
                   
                    ?>
                    </div>
                  </div>
            </div>
        </div>
              <?php include_once "footer.php";?>


