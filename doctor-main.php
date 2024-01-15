<?php include_once 'header.php';?>

<?php 
	$di = $_GET['dp'];
	$sql = "select * from doctors where d_cid = $di";
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($dr= $rs->fetch_assoc()){
?>

<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Doctor Details</h2>
<ul class="bread-list">
<li><a href="index.html">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Doctor Details</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="doctor-details-area section">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="doctor-details-item doctor-details-left">
<img src="admin2/files/<?php echo $dr['d_img']; ?>" alt="#">
<div class="doctor-details-contact">
<h3>Contact info</h3>
<ul class="basic-info">
<li>
<i class="icofont-ui-call"></i>
Call : 94630-49848
</li>
<li>
<i class="icofont-ui-message"></i><a href="mailto:bhatiahospital01@gmail.com" class="__cf_email__">bhatiahospital01@gmail.com</a></li>
<li><i class="icofont-location-pin"></i><?php echo $dr['d_educt']; ?></li>
</ul>

</div>
</div>
</div>
<div class="col-lg-7">
<div class="doctor-details-item">
<div class="doctor-details-right">
<div class="doctor-name">
<h3 class="name"><?php echo $dr['d_name']; ?></h3>
<p class="degree"><?php echo $dr['d_educt']; ?></p>
<p><?php echo $dr['d_spec']; ?></p>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<?php  
	}
}
?>

<?php include_once 'footer.php';?>

