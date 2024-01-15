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
   
   <?php include_once "top_navbar.php"; ?>

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
                  <a class="pl-3 mr-4" href="about_feature_list.php">
                    <p class="m-0">About Feature List</p>
                  </a>
                </div>
                <!--<a type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addslide.php">
                  <i class="mdi mdi-plus-circle"></i> New List </a>-->
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <?php 
  if(isset($_POST['submit'])):
  $listtext=$_POST['listtext'];
  
  
  $sql="insert into bh_about_list (list_detail) values('$listtext')";
  if ($conn->query($sql)===TRUE) {
            echo "List Item added";
        }
        else
        {
            echo $conn->error;
        }
    
endif;
?>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Add List Item</label>
                        <input type="text" class="form-control" name="listtext" placeholder="List Text" />
                      </div>
                     
                   
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>


                    
                  </div>
                </div>
              </div>
                  
                  
              </div>
              <?php include_once "footer.php";?>