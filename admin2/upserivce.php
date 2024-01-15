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
                  <a class="pl-3 mr-4" href="service.php">
                    <p class="m-0">Serivce</p>
                  </a>
                </div>
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                     <?php 
                        
						          $srid = $_GET['srid'];
						 
						             $sql="select * from bh_home_services where srid = $srid";
                          
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                               {
					               ?>
                      <form class="forms-sample" method="post" action="updateservice.php" enctype="multipart/form-data">
                      					  
					   <div class="form-group">
                        <label for="exampleInputName1">Service Title</label>
                        <input type="text" class="form-control" name="sertitl" placeholder="Title" value="<?php echo $row['sertitl'];?>" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputName1">Service Des</label>
                        <textarea class="form-control" name="serdes" placeholder="Title" value="<?php echo $row['serdes'];?>">
							               <?php echo $row['serdes'];?>
						            </textarea>
						
                      </div>
                      
					  
					  
                      <input type="hidden" value="<?php echo $row['srid'];?>" name="srid">
                                    
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
