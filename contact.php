<?php include_once 'header.php';?>

<div class="breadcrumbs overlay">
<div class="container">
<div class="bread-inner">
<div class="row">
<div class="col-12">
<h2>Contact Us</h2>
<ul class="bread-list">
<li><a href="index.php">Home</a></li>
<li><i class="icofont-simple-right"></i></li>
<li class="active">Contact Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="contact-us section">
<div class="container">
<div class="inner">
<div class="row">
<div class="col-lg-6">
<div class="contact-us-left">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.6044857836114!2d76.37089067447022!3d30.333766004806776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910292077577409%3A0xc503c0cba573d346!2sBhatia%20Hospital%20Neuro%20and%20Multispeciality!5e0!3m2!1sen!2sin!4v1690271402426!5m2!1sen!2sin" width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- <div id="myMap"></div> -->

</div>
</div>
<div class="col-lg-6">
<div class="contact-us-form">
<h2>Contact With Us</h2>
<p>If you have any questions please fell free to contact with us.</p>


<?php if(isset($_GET['msg']))
{
	if($_GET['msg']=='err')
		 echo "Sorry Unable to send your email";
	 else if($_GET['msg']=='Thanks')
		 echo "Thanks for your Equiry. We will be in touch with you in short span of Time";
}
 else
 {?>
<form class="form" method="post" action="sendemail.php">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="name" placeholder="Name" required {this.value = 'Name';}>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" name="email" placeholder="Email" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="phone" placeholder="Phone" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="subject" placeholder="Subject" required>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea name="message" placeholder="Your Message" required></textarea>
</div>
</div>
<div class="col-12">
<div class="form-group login-btn">
<button class="btn" type="submit">Send</button>
</div>

</div>
</div>
</form>
 <?php }?>
</div>
</div>
</div>
</div>
<div class="contact-info">
<div class="row">

<div class="col-lg-4 col-12 ">
<div class="single-info">
<i class="icofont icofont-ui-call"></i>
<div class="content">
<h3>94630-49848</h3>
<h3>0175-2306630</h3>
<h3>0175-2970990</h3>
<p><a href="#" class="__cf_email__">bhatiahospital01@gmail.com</a></p>
</div>
</div>
</div>


<div class="col-lg-4 col-12 ">
<div class="single-info">
<i class="icofont-google-map"></i>
<div class="content">
<h3>Patel Enclave, Near Khalsa College, Patiala</h3>
<p>Patiala</p>
</div>
</div>
</div>


<div class="col-lg-4 col-12 ">
<div class="single-info">
<i class="icofont icofont-wall-clock"></i>
<div class="content">
<h3>24 Hours</h3>
<p>Emergency and Ambulance Services</p>
</div>
</div>
</div>

</div>
</div>
</div>
</section>

<?php include_once 'footer.php';?>
