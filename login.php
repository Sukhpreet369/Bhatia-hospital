<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="img/favicon_2.png" />

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
    </script>
	
  </head>
  
	<body style="height:100vh;margin:0;padding:0;">

	<div class="login">
	
		<div class="login-box">
			
			<img src="img/logo-05.png">
		
			<?php  
				if(isset($_POST['submit'])){
				
				$user = $_POST['username'];
				$pwd = $_POST['pwd'];

				$sql = "Select * from user where username = '$user' and pwd = '$pwd'";
				$rs = $conn->query($sql);
				if($rs->num_rows>0){
					@session_start();
					$_SESSION['username'] = $user;
					header ('location:admin2/index.php');				}
				else
					{
					echo "Error !!!";
					}
				}

			?>
			<form class="l-form" action="" method="post" >
				<div class="mb-3">    
					<label>Username</label>
					<input type="text" name="username" class="feild">
				</div>
				<div class="mb-3">
					<label>Password</label>
					<input type="password" name="pwd" class="feild" id="myInput">
					<input type="checkbox" onclick="myFunction()">Show Password
				</div>
				<button class="btn" name="submit">Login</button>
			</form>
		</div>
	</div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>

	<script src="js/jquery-migrate-3.0.0.js"></script>

	<script src="js/easing.js"></script>

	<script src="js/colors.js"></script>

	<script src="js/popper.min.js"></script>

	<script src="js/bootstrap-datepicker.js"></script>

	<script src="js/jquery.nav.js"></script>

	<script src="js/slicknav.min.js"></script>

	<script src="js/jquery.scrollUp.min.js"></script>

	<script src="js/niceselect.js"></script>

	<script src="js/tilt.jquery.min.js"></script>

	<script src="js/owl-carousel.js"></script>

	<script src="js/jquery.counterup.min.js"></script>

	<script src="js/steller.js"></script>

	<script src="js/wow.min.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>

	<script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>

	<script src="js/gmaps.min.js"></script>

	<script src="js/map-active.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2cb3a2ab87c5498db5ce7e6608cf55231689030342039" integrity="sha512-DI3rPuZDcpH/mSGyN22erN5QFnhl760f50/te7FTIYxodEF8jJnSFnfnmG/c+osmIQemvUrnBtxnMpNdzvx1/g==" data-cf-beacon='{"rayId":"7ec212846843364e","version":"2023.4.0","r":1,"b":1,"token":"3248e93e0d6447329c4d6bcc351d5700","si":100}' crossorigin="anonymous"></script>
</body>
</html>