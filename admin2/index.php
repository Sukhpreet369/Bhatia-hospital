<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>

<?php include_once "header.php"; ?>
<?php include_once "config.php"; ?>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <!-- <div id="settings-trigger"><i class="mdi mdi-settings"></i></div> -->
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


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
           <!--  <div class="row">
              <div class="col-lg-12">
                <img src="files/gallery/g6.jpg" class="w-100">
              </div>
            </div> -->


            <div class="my-5"></div>
           
            <!-- first row starts here -->

            <div class="row">
              <div class="col-lg-12">
                <h2 class="text-center mb-5">OUR DOCTORS</h2>
              </div>
              
              <?php 
                $sql="select * from doctors limit 4";
                $rs=$conn->query($sql);
                          
                while($row = $rs->fetch_assoc())
                {
              ?>
              <div class="col-xl-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="card p-0">
                        <div class="card-body p-0 ">
                          <img src="files/<?php echo $row['d_img']; ?>" style="border-radius:0px;width: 100%;">
                        </div>
                        <div class="card-body px-3 text-dark" style="min-height: 160px;">
                          <h5 class="font-weight-semibold"><?php echo $row['d_name']; ?></h5>
                          <div class="d-flex justify-content-between font-weight-semibold">
                            <p class="mb-0">
                              <?php echo $row['d_spec']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php 
                }
              ?>

            </div>
            <div class="text-center">
              <button class="btn btn-success">See All</button>

            </div>
          </div>
          
        
    <?php include_once "footer.php";?>