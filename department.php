<?php include_once 'header.php';?>
<?php include_once 'connect.php'; ?>


<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
	<?php
	
	$sql=" select * from department where dep_slug ='" .$_GET['dep']. "' ";
	$rs=$conn->query($sql);
	while($row = $rs->fetch_assoc())
	{

?>
<div class="col-12">
<h2><?php echo $row['dep_title']; ?></h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active"><?php echo $row['dep_title']; ?></li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="service-details-area section">
<div class="container">
<div class="services-details-img lit">

<img src="admin2/files/<?php echo $row['dep_feat_img']; ?>" alt="#"  >

<h2><?php echo $row['dep_title']; ?></h2>
<span class="hding">
<?php echo htmlspecialchars_decode($row['dep_des']); ?>
	</span>
</div>

<?php if($row['treatments']!=''): ?>
<div class="services-details-img">

<blockquote>
	<h2>Treatment</h2>
	<?php echo htmlspecialchars_decode($row['treatments']); ?>
</blockquote>



</div>
<?php endif;?>
</div>

<section class="team single-page">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-6 col-12">
	<div class="row">

<?php 
	$sql = "SELECT * FROM doctors where dep_title ='" .$_GET['dep']. "'";
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($dr= $rs->fetch_assoc()){
?>

<div class="col-lg-4 col-md-6 col-12">
<div class="single-team">
<div class="t-head">
<img src="admin2/files/<?php echo $dr['d_img']; ?>" alt="#">
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
}
?>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12">
<?php if($_GET['dep']=='Neurology'): ?>
<div class="single-team1">
<h4>Facilities Available</h4>
<ul>
<li><i class="fa fa-caret-right"></i> Digital EEG</li>
<li><i class="fa fa-caret-right"></i> Neuro Physiology lab </li>
<li><i class="fa fa-caret-right"></i> NCV </li>
</ul> 
</div>
<?php endif;?>
</div>


</div>


</div>
</section>
</div>

</div>




<?php include_once 'footer.php';?>

 <!--  -->

