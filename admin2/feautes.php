<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>


<?php include_once "header.php"?>
<?php include_once "config.php"?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
      
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
		
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>

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
  					  <a class="pl-3 mr-4" href="slider.php">
  						  <p class="m-0">Feautes</p>
  					  </a>
					  </div>
				  </div>
				</div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Bed No</th>							
              							<th>Bed Des</th>
              							<th>OT No</th>
              							<th>Operation Theaters Des</th>
              							<th>HP No</th>
              							<th>Happy Patients des</th>
              							<th>Years No</th>
              							<th>Years Des</th>                            
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                            $sql="select * from bh_home_feautes";
                            $rs=$conn->query($sql);
                            while($row = $rs->fetch_assoc())
                            {
                          ?>

                          <tr>
              							<td><?Php echo $row['bedno']; ?></td>
              							<td><?Php echo $row['beddes']; ?></td>
              							<td><?Php echo $row['otno']; ?></td>
              							<td><?Php echo $row['otdes']; ?></td>
              							<td><?Php echo $row['happyno']; ?></td>
              							<td><?Php echo $row['happydes']; ?></td>
              							<td><?Php echo $row['yrsno']; ?></td>
              							<td><?Php echo $row['years']; ?></td>
                            <td><a href="updatefeautes.php?fid=<?php echo $row['fid'];?>">Update</a></td>
							
                            <!--<td><a href="carouseldelete.php?cid=<?php //echo $row['c_id'];?>">Delete</a></td>-->
                          </tr>

                          <?php } ?>                            

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <?php include_once "footer.php";?>