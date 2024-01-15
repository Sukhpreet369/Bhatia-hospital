<?php include_once 'header.php';?>
<?php include_once 'connect.php'; ?>


<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Neurology</h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Neurology</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="service-details-area section">
<div class="container">
<div class="services-details-img">

<?php 
	$sql="select * from department where dep_title='".$_GET['dep']."'";
	$rs=$conn->query($sql);
	while($row = $rs->fetch_assoc())
	{
?>

<img src="admin2/files/<?php echo $row['dep_feat_img']; ?>" alt="#"  >

<h2><?php echo $row['dep_title']; ?></h2>
<?php echo htmlspecialchars_decode($row['dep_des']); ?>

</div>

<br></br>

<div class="services-details-img">
<blockquote>
	<h2>Treatment</h2>
	<?php echo htmlspecialchars_decode($row['treatments']); ?>
</blockquote>
</div>
</div>

<?php 
	}
?>

<section class="team single-page">
<div class="container">
<div class="row">

<!---Dr. Gurjinderpal Singh--->
<div class="col-lg-3 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/gurjinderpal.jpg" alt="#">
</div>
<div class="t-bottom">
<h2><a href="Dr-Gurjinderpal-Singh.php">Dr. Gurjinderpal Singh </a></h2>
<p>DM (Neurology)<br>PGI Chandigarh, Senior Neurologist</p>
</div>
</div>
</div>

<!---Dr. Salvinder Toor --->
<div class="col-lg-3 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="img/Dr-Salvinder-Toor.jpg" alt="#">
<div class="t-icon"><a href="Dr-Salvinder-Toor.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom"><h2>
<a href="Dr-Salvinder-Toor.php">Dr. Salvinder Toor </a>
</h2><p>MCh.(Neurosurgery)</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-12"></div>

<div class="col-lg-3 col-md-6 col-12">
<div class="single-team1">
<h4>Facilities Available</h4>
<ul>
<li><i class="fa fa-caret-right"></i> Digital EEG</li>
<li><i class="fa fa-caret-right"></i> Neuro Physiology lab </li>
<li><i class="fa fa-caret-right"></i> NCV </li>
</ul> 
</div>
</div>


</div>
</div>
</div>

</div>




<?php include_once 'footer.php';?>

