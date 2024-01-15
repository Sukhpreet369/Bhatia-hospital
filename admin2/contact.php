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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					

					<?php 
						if(isset($_POST['submit'])){
						
						$nme = $_POST['c_name'];
						$eml = $_POST['c_email'];
						$phn = $_POST['c_phone'];
						$sub = $_POST['subject'];
						$msg = $_POST['msage'];


					  $sql = "insert into contact (c_name, c_email, c_phone, subject, msage) values('$nme', '$eml', '$phn', '$sub', '$msg')";


						if ($conn->query($sql) === TRUE) {
								echo "Thanks....";
							}
							else
							{
								echo $conn->error;
							}
						}
					?>
					
					
                    
                  </div>



              <div class="card">
                <div class="card-body">
                  <h2>Contact Detail</h2>
                  <table class="table">
                  	<tr>
                  		<th>Name</th>
                  		<th>Email</th>
                  		<th>Phone</th>
                  		<th>Subject</th>
                  		<th>Your Message</th>
                  	</tr>
                  	<?php  
                  		$con= "SELECT * from contact";
                  		$rs = $conn->query($con);
                  		if($rs->num_rows>0){
                  			while ($dat=$rs->fetch_assoc()) {
                  		?>

                  	<tr>
                  		<td><?php echo $dat['c_name']; ?></td>
                  		<td><?php echo $dat['c_email']; ?></td>
                  		<td><?php echo $dat['c_phone']; ?></td>
                  		<td><?php echo $dat['subject']; ?></td>
                  		<td><?php echo $dat['msage']; ?></td>
                  	</tr>
                  	<?php
                  			}
                  		}
                  	?>
                  </table>
				  
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
                </script>
              <?php include_once "footer.php";?>