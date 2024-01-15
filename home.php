<?php include_once 'connect.php'; ?>

<!--Slide-1-->
<section class="slider">
<div class="hero-slider">

<?php  
	$sql = 'select * from bh_home_slider';
	$rw= $conn->query($sql);
	if($rw->num_rows>0){
		while($sld = $rw->fetch_assoc()){
?>
<a href="<?php echo $sld['link']; ?>">
<div class="single-slider" style="background-image:url('admin2/files/<?php echo $sld['imageUrl']; ?>')">
<div class="container">
<div class="row">

</div>
</div>
</div>

</a>
<?php 
}
	}
?>

</div>
</section>


<section class="schedule">
<div class="container">
<div class="schedule-inner">
<div class="row">

<?php  
	$sql = 'select * from bh_home_widgets';
	$rw= $conn->query($sql);
	if($rw->num_rows>0){
		while($wd = $rw->fetch_assoc()){
?>

<div class="col-lg-4 col-md-6 col-12 ">

<div class="single-schedule first">
<div class="inner">
<div class="icon">
<i class="fa fa-ambulance"></i>
</div>
<div class="single-content">
<h4><?php echo $wd['w_title']; ?></h4>
<p><?php echo $wd['w_des']; ?></p>
</div>
</div>
</div>
</div>

<?php 
}
	}
?>
</div>
</div>
</div>
</section>


<section class="Feautes section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>We Provide Multi-Specialty Services</h2>
<img src="img/section-img.png" alt="#">
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 col-12">
<div class="single-features">
<div class="signle-icon">
<i class="icofont icofont-ambulance-cross"></i>
</div>
<h3>Emergency Help<br>
24 x 7</h3>
</div>
</div>

<div class="col-lg-4 col-12">
<div class="single-features">
<div class="signle-icon">
<i class="icofont icofont-medical-sign-alt"></i>
</div>
<h3>ICU & <br> Critical Care</h3>
</div>
</div>

<div class="col-lg-4 col-12">
<div class="single-features last">
<div class="signle-icon">
<i class="icofont icofont-stethoscope"></i>
</div>
<h3>Medical Treatment</h3>
</div>
</div>

</div>
</div>
</section>


<div id="fun-facts" class="fun-facts section overlay">
<div class="container">
<div class="row">
<?php 
	$sql = 'select * from bh_home_feautes';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($ft= $rs->fetch_assoc()){
?>

<div class="col-lg-3 col-md-6 col-12">
<div class="single-fun">
<i class="icofont icofont-home"></i>
<div class="content">
<span class="counter"><?php echo $ft['bedno']; ?></span>
<p><?php echo $ft['beddes']; ?></p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-12">
<div class="single-fun">
<i class="icofont icofont-user-alt-3"></i>
<div class="content">
<span class="counter"><?php echo $ft['otno']; ?></span>
<p> <?php echo $ft['otdes']; ?></p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-12">
<div class="single-fun">
<i class="icofont-simple-smile"></i>
<div class="content">
<span class="counter"><?php echo $ft['happyno']; ?></span>
<p><?php echo $ft['happydes']; ?></p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-12">
<div class="single-fun">
<i class="icofont icofont-table"></i>
<div class="content">
<span class="counter"><?php echo $ft['yrsno']; ?></span>
<p><?php echo $ft['years']; ?></p>
</div>
</div>
</div>

<?php  
}
}
?>
</div>
</div>
</div>


<section class="why-choose section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Welcome to bhatia hospital</h2>
<img src="img/section-img.png" alt="#">
</div>
</div>
</div>
<?php 
	$sql = 'select * from bh_homepage_about';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($rw= $rs->fetch_assoc()){
?>
<div class="row">
<div class="col-lg-6 col-12">


<div class="choose-left">
<h3><?php echo $rw['title']; ?></h3>
<p><?php echo $rw['description']; ?> 
</p>

<?php
 	}
}
?>
<ul class="list t-box">
<?php 
	$sql = 'select * from bh_about_list';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($li= $rs->fetch_assoc()){
?>	
<li><i class="fa fa-caret-right"></i><?php echo $li['list_detail']; ?></li>
<?php 	}
	}
	?>
</ul>
</div>
</div>

<div class="col-lg-6 col-12">
<?php 
	$sql = 'select * from bh_homepage_about';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($rw= $rs->fetch_assoc()){
?>

<div class="choose-right">
<div class="video-image">
	<img src="admin2/files/<?php echo $rw['imageurl']; ?>" alt="#">
</div>
</div>
<?php 
}
}
?>
</div>

</div>

	
</section>


<section class="call-action overlay" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-12">
<div class="content">
<h2>Do you need Emergency Medical Care? Call @ 94630-49848, <br>
0175-2306630,
0175-2970990
</h2>
<p></p>
<div class="button">
<a href="contact.php" class="btn">Contact Now</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="portfolio section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Photo Gallery</h2>
<img src="img/section-img.png" alt="#">
<!-- <p></p> -->
</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-12">
<div class="owl-carousel portfolio-slider">
<?php  
		include_once 'connect.php';
		$sql = "Select * from gallery";
		$rs = $conn->query($sql);
		if($rs->num_rows>0){
			while ($rw=$rs->fetch_assoc()) {
	?>
<div class="single-pf">
<img src="admin2/files/gallery/<?Php echo $rw['gallery_img_nme']; ?>" alt="" loading="lazy"/>
</div>

<?php
			}
		}

	?>
	</div>
</div>
</div>
</div>

</section>


<section class="services section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>TAKE THE FIRST STEP TOWARDS A HEALTHY LIFE</h2>
<img src="img/section-img.png" alt="#">
<p></p>
</div>
</div>
</div>
<div class="row">

	<?php

	$sql = 'select * from bh_home_services limit 6';
	$rs = $conn->query($sql);
	if($rs->num_rows>0){
		while($sr = $rs->fetch_assoc()){			

	?>

<div class="col-lg-4 col-md-6 col-12">

<div class="single-service">
<?php echo $sr['icon']; ?>
<h4><a href="Neurology.php"><?php echo $sr['sertitl']; ?></a></h4>
<p><?php echo $sr['serdes']; ?></p>
</div>

</div>

<?php }
	}
?>

</div>
</div>
</section>


<section id="team" class="team section overlay" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>Our Doctors</h2>
<img src="img/section-img.png" alt="#">
<!-- <p></p> -->
</div>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-12">
<div class="owl-carousel portfolio-slider">

<?php 
	$sql = 'select * from doctors';
	$rs=$conn->query($sql);
	if($rs->num_rows>0){
		while($dr= $rs->fetch_assoc()){
?>
	
<div class="single-pf">
<div class="single-team">
<div class="t-head">
<img src="admin2/files/<?php echo $dr['d_img']; ?>" alt="#" >
<div class="t-icon">
<a href="Dr-Gurjinderpal-Singh.php" class="btn">Doctor Details</a>
</div>
</div>
<div class="t-bottom">
<h2><a href="Dr-Gurjinderpal-Singh.php"><?php echo $dr['d_name']; ?></a></h2>
<p><?php echo $dr['d_educt']; ?></p>
	<!--DM (Neurology)<br>PGI Chandigarh, Senior Neurologist-->
</div>
</div>
</div>

<?php 
		}
	}
?>

</div>
</div>
</div>
</div>

</section>

<section class="appointment" id="appointment">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>We Are Always Ready to Help You. Book An Appointment</h2>
<img src="img/section-img.png" alt="#">
<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> -->
</div>
</div>
</div>
<div class="row">

<?php if(isset($_GET['msg']))
{
	if($_GET['msg']=='err')
		 echo "Sorry Unable to send your email";
	 else if($_GET['msg']=='Thanks')
		 echo "Thanks for your Equiry. We will be in touch with you in short span of Time";
}
 else
 {
	 ?>
	 


<div class="col-lg-6 col-md-12 col-12">
<form class="form" id="form" method="post" action="sendemailhome.php" >
<div class="row">
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<input name="name" id="name" type="text" placeholder="Name">
			<div class="error"></div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<input name="email" id="email" type="email" placeholder="Email">
			<div class="error"></div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<input name="phone" id="phone" type="text" placeholder="Phone">
			<div class="error"></div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<div class="form-control wide1" tabindex="0">
				<select name="department" id="department">
					<option data-value="1" value="" class="option selected ">Department</option>
					<option data-value="2" value="neurology" class="option">Neurology</option>
					<option data-value="3" value="cancer" class="option">Cancer</option>
					<option data-value="4" value="gynaecology" class="option">Gynaecology</option>
					<option data-value="5" value="icu" class="option">Icu & Critical Care</option>
					<option data-value="6" value="cardiology" class="option">Cardiology</option>
					<option data-value="7" value="nephrology" class="option">nephrology</option>
					<option data-value="8" value="orthopaedics" class="option">orthopaedics</option>
					<option data-value="9" value="physiotherapy" class="option">Physiotherapy</option>
					<option data-value="10" value="urology" class="option">Urology</option>
					<option data-value="11" value="gereralsurgery" class="option">Gereral Surgery</option>
				</select>
				<div class="error"></div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<div class="form-control wide1" tabindex="0">
				<select name="doctors" id="doctors">
					<option data-value="1" value="Dr. Gurjinderpal Singh" class="option selected ">Dr. Gurjinderpal Singh</option>
					<option data-value="2" value="Dr. Salvinder Toor" class="option">
					<option data-value="3" value="Dr. Kanwarneet Singh" class="option">Dr. Kanwarneet Singh</option>
					<option data-value="4" value="Dr. Deepak Singla" class="option">Dr. Deepak Singla</option>
					<option data-value="5" value="Dr. Harjot Kaur Bagga" class="option">Dr. Harjot Kaur Bagga</option>
					<option data-value="6" value="Dr. Arvinder Kaur" class="option">Dr. Arvinder Kaur</option>
					<option data-value="7" value="Dr. Beant Singh" class="option">Dr. Beant Singh</option>
					<option data-value="8" value="Dr. Vaneet Kaur" class="option">Dr. Vaneet Kaur</option>
					<option data-value="9" value="Dr. Rahul Madaan" class="option">Dr. Rahul Madaan</option>
					<option data-value="10" value="Dr. Udham Singh" class="option">Dr. Udham Singh</option>
					<option data-value="11" value="Dr. Pawan Kumar Kamal" class="option">Dr. Pawan Kumar Kamal</option>
					<option data-value="12" value="Dr. Dewan Nasirudin" class="option">Dr. Dewan Nasirudin</option>
					<option data-value="13" value="Dr. Kanwarneet Singh" class="option">Dr. Kanwarneet Singh</option>
					<option data-value="14" value="Dr. Deepak Joshi" class="option">Dr. Deepak Joshi</option>
				</select>
				<div class="error"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<div class="form-group">
			<input type="date" name="date" placeholder="Date" id="datepicker">
			<div class="error"></div>
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12 col-12">
		<div class="form-group">
			<textarea name="message" placeholder="Write Your Message Here....."></textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-5 col-md-4 col-12">
		<div class="form-group">
			<div class="button">
				<button type="submit" class="btn">Book An Appointment</button>
			</div>
		</div>
	</div>
</div>
</form>
 <?php }?>
 
</div>

<div class="col-lg-6 col-md-12 ">
<div class="appointment-image">
<img src="img/contact-img.png" alt="#">
</div>
</div>
</div>
</div>
</section>

<script >

const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const department = document.getElementById('department');
const doctors = document.getElementById('doctors');
const datepicker = document.getElementById('datepicker');

form.addEventListener('submit', e => {
	
    e.preventDefault();
    validateInputs();
	
});

const setError = (element, message) => {
	
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
	
}

const setSuccess = element => {
	
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
	
};

const isValidEmail = email => {
	
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
	
}



const validateInputs = () => {
	
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const departmentValue = department.value.trim();
	const doctorsValue = doctors.value.trim();
	const datepickerValue = datepicker.value.trim();

    if(nameValue === '') {
        setError(name, '* name is required');
    } else {
        setSuccess(name);
    }

    if(emailValue === '') {
        setError(email, '* Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(phoneValue === '') {
        setError(phone, '* phone is required');
    } else if (phoneValue.length < 8 ) {
        setError(phone, 'phone must be at least 8 character.')
    } else {
        setSuccess(password);
    }
	
	 if(departmentValue === '') {
        setError(department, '* department is required');
    }else {
        setSuccess(password);
    }
	
/*	 if(doctorsValue === '') {
        setError(doctors, '* doctors is required');
    }else {
        setSuccess(password);
    }
	
	 if(datepickerValue === '') {
        setError(datepicker, '* datepicker is required');
    } else {
        setSuccess(password);
    }*/
};


</script>
