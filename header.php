<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Bhatia Hospital | Patiala</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content="pavilan">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Bhatia Hospital & Multispecialty Hospital at Patiala Punjab, Established in Sep 2018, is one of the tertiary care hospital in the city. It is situated on the Badungar Road Near Khalsa College. The State-of-the-art ICU (Intensive Care Unit) at the hospital is fully equipped to help stabilise accident victims and effectively handle all kinds of emergency cases.">
<meta name="keywords" content="Bhatia Hospital, Bhatia Hospital Patiala, Best Neurology Hospital, Best Neurology Hospital, Cancer Center, Bhatia Hospital & Multispecialty Hospital at Patiala Punjab"> 


<link rel="icon" href="img/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/nice-select.css">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/icofont.css">

<link rel="stylesheet" href="css/slicknav.min.css">

<link rel="stylesheet" href="css/owl-carousel.css">

<link rel="stylesheet" href="css/datepicker.css">

<link rel="stylesheet" href="css/animate.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet" href="css/color/color1.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" id="colors">
</head>
<body>



<header class="header">

<div class="topbar">
<div class="container">
<div class="row">

<div class="col-lg-5 col-md-2 col-12">
<section class="fxd-box text-center text-sm-left">
	<a href="cashless.php" class="btn btn-success" >Cashless Treatment</a>
</section>
</div>

<div class="col-lg-7 col-md-7 col-12">

<ul class="top-contact">
<li><i class="fa fa-phone"></i>+91 94630-49848</li>
<li><i class="fa fa-envelope"></i><a href="#">bhatiahospital01@gmail.com</a></li>
</ul>

</div>
</div>
</div>
</div>


<div class="header-inner">
<div class="container">
<div class="inner">
<div class="row">
<div class="col-lg-3 col-md-3 col-12">

<div class="logo">
<a href="index.php"><img src="img/logo-07.png" alt="#"></a>
</div>


<div class="mobile-nav"></div>

</div>
<div class="col-lg-7 col-md-9 col-12">

<div class="main-menu">
<nav class="navigation">
<ul class="nav menu">
<li class="active"><a href="index.php">Home</a>
</li>
<li><a href="doctors.php">Doctors</a></li>

<li><a href="#">Department <i class="icofont-rounded-down"></i></a>
<ul class="dropdown">
<?php 
		include_once 'connect.php';
		$sql  = "Select * from department order by orderno";
		
		$dp = $conn->query($sql);
		if($dp->num_rows>0){
			while ($row = $dp->fetch_assoc()) {
	?>

<li><a href="department.php?dep=<?php echo $row['dep_slug']; ?>"><?php echo htmlspecialchars_decode($row['dep_title']); ?></a></li>

<?php  
		}
	}
?>

</ul >
</li>


<li><a href="facilities.php">Facilities</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>

</div>
<div class="col-lg-2 col-12">
<div class="get-quote">
<a href="/#appointment" class="btn"> Appointment</a>
</div>
</div>
</div>
</div>
</div>
</div>

</header>



