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
                  <a class="pl-3 mr-4" href="department.php">
                    <p class="m-0">Department</p>
                  </a>
                </div>
              </div>
            </div>

                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					<?php 
						if(isset($_POST['submit'])){
						
						$deptitle = $_POST['dep_title'];
						$depdes = $conn->real_escape_string($_POST['dep_des']);
						$deptrm =$conn->real_escape_string($_POST['treatments']);

						$depimg = $_FILES['dep_feat_img']['name'];

						$path="files/".$depimg;

						if(move_uploaded_file($_FILES['dep_feat_img']['tmp_name'],$path)){
					  $sql = "insert into department (dep_title, dep_des, treatments, dep_feat_img) values('$deptitle', '$depdes', '$deptrm', '$depimg')";
					  //echo $sql;

						if ($conn->query($sql) === TRUE) {
								echo "Department Created";
							}
							else
							{
								echo $conn->error;
							}
						}
					}
					?>
					
					
					
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
						
					
						<div class="form-group">
							<label for="exampleInputName1">Department Title</label>
							<input type="text" class="form-control" name="dep_title" placeholder="Title" />
						</div>
					  
						<div class="form-group">
							<label for="exampleInputName1">Department Des</label>
						<textarea class="form-control" id="editor" style="height:500px;text-wrap:balance;" name="dep_des" value=""></textarea>
						</div>

							<div class="form-group">
							<label for="exampleInputName1">Treatments</label>
							<textarea class="form-control" id="editor1" style="text-wrap:balance;" rows="8" cols="100" name="treatments" value=""></textarea>
						</div>

					            <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="dep_feat_img" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                        
                      </div>
						
						
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    
                  </div>
				  
                </div>
				
              </div>
              </div>
			  
			   <script>
                    ClassicEditor
						.create( document.querySelector( '#editor' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                         ClassicEditor
                         
						.create( document.querySelector( '#editor1' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
              <?php include_once "footer.php";?>