<?php include_once 'header.php';?>

<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Facilities</h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Facilities</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="service-details-area section">
<div class="container">
<div class="services-details-img marker">

<h2>Facilities</h2>

<div class="row">
<div class="col-lg-6">
<div class="choose-left">
<?php
	$sql="select * from facilities";
	$rs=$conn->query($sql);                          
	while($row = $rs->fetch_assoc())
	{
?>
<ul class="list">
	<li><i class="fa fa-caret-right"></i><?php echo $row['list']; ?></li>
<!--
<li><i class="fa fa-caret-right"></i>Cancer Surgery & Chemotherapy</li>
<li><i class="fa fa-caret-right"></i>24 Hrs Emergency Facility</li>
<li><i class="fa fa-caret-right"></i>Air Conditioned modern patient rooms</li>
<li><i class="fa fa-caret-right"></i>Two modular operation theater with hepafilters.</li>
<li><i class="fa fa-caret-right"></i>Trauma including Neurosurgery</li>
<li><i class="fa fa-caret-right"></i>Labour room equipped with NST</li>
<li><i class="fa fa-caret-right"></i>Neurology including Stroke Unit</li>
<li><i class="fa fa-caret-right"></i>ICU with Ventilator Facility</li>

<li><i class="fa fa-caret-right"></i>Joint Replacement (Knee/Hip)</li>
<li><i class="fa fa-caret-right"></i>Dialysis & Nephrology Services</li>
<li><i class="fa fa-caret-right"></i>Gynaecology - Painless Delivery, Cesarean Section, Gynae Surgery</li>
<li><i class="fa fa-caret-right"></i>Laparoscopic surgeries (Lap Cholecystectomy & Hysterectomy)</li>
<li><i class="fa fa-caret-right"></i>X-Ray, CT Scan & Lab Facilities</li>
<li><i class="fa fa-caret-right"></i>EEG, Neurophysiology Lab</li>
<li><i class="fa fa-caret-right"></i>Laparoscopic Treatment for all kinds of Cancer</li>
--->
</ul>

<?php 
	}
?>
</div>
</div>

<div class="col-lg-6">
<div class="choose-left">
<img src="img/hospital-02.jpg" alt="#">

</div>
</div>

</div>

</div>
</div>
</div>

<?php include_once 'footer.php';?>