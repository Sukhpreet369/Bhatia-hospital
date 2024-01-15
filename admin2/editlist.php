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
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">Edit list</p>
                  </a>
                </div>
                <a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addlist.php">
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
                    if(isset($_POST['submit'])):
                      $list_id=$_POST['list_id'];
                      $listtext=$_POST['listtext'];
                      $sql="update bh_about_list set list_detail='$listtext' where list_id='$list_id'";
                        //echo $sql;
                        if ($conn->query($sql)===TRUE) {
                        
                        echo "List updated";
                        }
                        else
                        {
                        echo $conn->error;
                        }
                    else:
                     $list_id=$_GET['list_id'];
                    endif;
                   
                    $sql="select * from bh_about_list where list_id=".$list_id;
                            $rs=$conn->query($sql);
                           //echo $rs->num_rows;
                           while($row = $rs->fetch_assoc())
                            {
  ?>
                      <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Slide Title</label>
                        <input type="text" class="form-control" name="listtext" placeholder="List Text" value="<?php echo $row['list_detail'];?>" />
                      </div>
                     
                      
                      <input type="hidden" value="<?php echo $row['list_id'];?>" name="list_id">
                                    
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
