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
                </div>
                
              </div>
            </div>
      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                    <?php 
                         
                       $sql="select * from user";                        
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                            {
                  ?>

                  <form class="l-form" action="updatepassword.php" method="post" >
                    <div class="form-group">    
                      <label>Username</label>
                      <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="pwd" value="<?php echo $row['pwd']; ?>" id="myInput" class="form-control pass" required>
                           <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>

                    <div class="form-group">
                          <label>Confirm Password</label>
                          <input type="password" name="pwd" id="myInput2" class="form-control pass" required>
                           <input type="checkbox" onclick="myFunction2()"> Show Password
                    </div>

                    <button class="btn btn-success" name="submit">change Password</button>
                  </form>
                    <?php echo $msg; ?>

                    <?php 
                      }                   
                    ?>



                    </div>
                  </div>
            </div>
        </div>
              <?php include_once "footer.php";?>


