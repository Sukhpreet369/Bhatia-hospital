<?php include_once 'header.php'; ?>

<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Gallery</h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Gallery</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<section>
<div class="container">
<div class="row">
<div  class="gallery">
	
	<?php  
		include_once 'connect.php';
		$sql = "Select * from gallery ORDER BY orderno DESC";
		$rs = $conn->query($sql);
		if($rs->num_rows>0){
			while ($rw=$rs->fetch_assoc()) {
	?>

<a class="cwa-lightbox-image" href="admin2/files/gallery/<?Php echo $rw['gallery_img_nme']; ?>" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="admin2/files/gallery/<?Php echo $rw['gallery_img_nme']; ?>" alt="admin2/files/gallery/<?Php echo $rw['gallery_img_nme']; ?>" loading="lazy"/>
</a>

	<?php
			}
		}

	?>
  <!--           
	<a class="cwa-lightbox-image" href="img/gallery/g1.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g1.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g2.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g2.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g3.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g3.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g4.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g4.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g5.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g5.jpg" alt="" loading="lazy"/>
	</a> -->

	<!--<a class="cwa-lightbox-image" href="img/gallery/g6.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g6.jpg" alt="" loading="lazy"/>
	</a>-->
   <!-- 
	<a class="cwa-lightbox-image" href="img/gallery/g7.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g7.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g8.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g8.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g9.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g9.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g10.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g10.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g11.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g11.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g12.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g12.jpg" alt="" loading="lazy"/>
	</a>
	
	<a class="cwa-lightbox-image" href="img/gallery/g13.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g13.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g14.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g14.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g15.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g15.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g16.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g16.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g17.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g17.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g18.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g18.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g19.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g19.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g20.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g20.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g21.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g21.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g22.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g22.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g23.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g23.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g24.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g24.jpg" alt="" loading="lazy"/>
	</a>

	<a class="cwa-lightbox-image" href="img/gallery/g25.jpg" data-desc="cwa_lightbox: jQuery Lightbox Gallery Plugin. https://www.jqueryscript.net">
		<img src="img/gallery/g25.jpg" alt="" loading="lazy"/>
	</a> -->
	
</div>
</div>
</div>
</div>

<?php include_once 'footer.php';?>