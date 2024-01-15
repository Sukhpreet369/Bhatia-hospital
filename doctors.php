<?php include_once 'connect.php'; ?>
<?php include_once 'header.php';?>


<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Meet Our Qualified Doctors</h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Doctors</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section id="team" class="team section single-page">
<div class="container">
<div class="row">

<?php 
	$sql = 'select * from doctors';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($dr= $rs->fetch_assoc()){
?>
<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="admin2/files/<?php echo $dr['d_img']; ?>" alt="#" >
<div class="t-icon">
<a href="doctor-main.php?dp=<?php echo $dr['d_cid']; ?>" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="doctor-main.php?dp=<?php echo $dr['d_cid']; ?>"><?php echo $dr['d_name']; ?></a></h2>
<p><?php echo $dr['d_educt']; ?></p>
</div>
</div>
</div>

<?php  
}
}
?>






<!--


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/gurjinderpal.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Gurjinderpal-Singh.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Gurjinderpal-Singh.php">Dr. Gurjinderpal Singh </a></h2>
<p>DM (Neurology)<br>PGI Chandigarh, Senior Neurologist</p>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/kanwarneet.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Kanwarneet-Singh.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Kanwarneet-Singh.php">Dr.Kanwarneet Singh</a></h2>
<p>MS, DNB AIIMS, New Delhi, <br>Cancer Surgeon & Laparoscopic Surgeon</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/harjotbagga.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Harjot-Kaur-Bagga.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Harjot-Kaur-Bagga.php">Dr. Harjot Kaur Bagga</a></h2>
<p>(MD, Senior medical oncologist & HematoOncology, Ex. Professor & Head Deptt. of Radiation Oncology GMC, Patiala)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/deepaksingla.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Deepak-Singla.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Deepak-Singla.php">Dr. Deepak Singla</a></h2>
<p>DM Medical Oncology</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Arvinder-Kaur.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Arvinder-Kaur.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Arvinder-Kaur.php">Dr. Arvinder Kaur </a></h2>
<p>MD (Gynecology), Senior Gynaecologist, Ex. Professor Rajindra Hospital, Patiala</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Beant-Singh.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Beant-Singh.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Beant-Singh.php">Dr. Beant Singh</a></h2>
<p>Senior Gynecologist, Ex. Professor Rajindra Hospital, Patiala</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Vaneet-Kaur.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Vaneet-Kaur.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Vaneet-Kaur.php">Dr. Vaneet Kaur</a></h2>
<p>MD (Anaesthesia) IDCCM (Critical Care)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Udham-Singh.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Udham-Singh.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Udham-Singh.php">Dr. Udham Singh </a></h2>
<p>DM (Nephrology) PGI Chandigarh, Senior Consultant</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Rahul-Madan.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Rahul-Madaan.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Rahul-Madaan.php">Dr. Rahul Madaan</a></h2>
<p>PDCC (Cardiology)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Pawan-Kumar-Kamal.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Pawan-Kumar-Kamal.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Pawan-Kumar-Kamal.php">Dr. Pawan Kumar Kamal</a></h2>
<p>MS (Orthopaedics)<br>(DMC LUDHIANA)</p>
<p>JOINT REPLACEMENT AND<br>
SPORTS INJURY EXPERT</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dewan-Nasirudin.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Dewan-Nasirudin.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Dewan-Nasirudin.php">Dr. Dewan Nasirudin</a></h2>
<p>(PHYSIOTHERAPY)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Hitesh.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Hitesh-Kamal.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Hitesh-Kamal.php">Dr. Hitesh Kamal</a></h2>
<p>MCh. (Urology)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Salvinder-Toor.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Salvinder-Toor.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2>
<a href="Dr-Salvinder-Toor.php">Dr. Salvinder Toor </a>
</h2><p>MCh.(Neurosurgery)</p>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Deepak-Joshi.jpg" alt="#">
<div class="t-icon">
<a href="Dr-Deepak-Joshi" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Deepak-Joshi.php">Dr. Deepak Joshi</a></h2>
<p>Mch. (Ortho)</p>
</div>
</div>
</div>
-->

</div>
</div>
</section>


<!--<section class="newsletter section">
<div class="container">
<div class="row ">
<div class="col-lg-6  col-12">

<div class="subscribe-text ">
<h6>Sign up for newsletter</h6>
<p class>Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
</div>

</div>
<div class="col-lg-6  col-12">

<div class="subscribe-form ">
<form action="#" method="get" class="newsletter-inner">
<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required type="email">
<button class="btn">Subscribe</button>
</form>
</div>

</div>
</div>
</div>
</section>-->


<?php include_once 'footer.php';?>