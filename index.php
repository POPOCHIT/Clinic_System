<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	<title>Specialist Clinic System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/logo.png">
	
	
</head>
<body>
 

	<!-- ROW of Content -->
	<div class="row1">
	<a class="navbar-brand" href="index.php" >Specialist Clinic</a>
		<div class="column1">
			<img src="img/ig_logo.png" alt="ig_logo" class="ig_logo">
		</div>

		<div class="column1">
			<a href="https://www.facebook.com/Thet-Taw-Shay-114047997105364">
				<img src="img/fb_logo.png" alt="fb_logo" class="fb_logo">
			</a>
		</div>
	</div>

	<!-- LOGO -->
	<div class="logo-row">
		<img src="img/logo.png" alt="logo" class="logo">
	</div>

	<!-- MENU  -->
	<div class="menu_bar">
		<div class="menu_bar_img">
		<!-- <img src="img/bgcolor.png" class="menu_bar_img"> -->
		<div class="menu_link">
			<a href="index.php">Home </a> |
			<a href="about.php">About Us </a> |
			<a href="appointment.php">Appointment </a> |
			<a href="service.php">Service </a> |
			<a href="doctors.php">Doctors </a> |
			<a href="contact.php">Contact Us </a>
		</div>
		</div>
	</div>

	<!-- Welcome to my clinic -->
	

	<div class="main">
		<figure>
		<div class="main_photo1"></div>
		<div class="main_photo2"></div>
		<div class="main_photo3"></div>
		</figure>
	</div>

	<!-- date highlight -->
	<div class="open_time">
	 <h4 align="center">Open Hours</h4>
	 <img src="img/heart_beat_rate.png" alt="beatline" class="beatline">
		
		<p class="mon">Monday &nbsp&nbsp: 9:00 ~ 24:00</p>
		<p class="tue">Tuesday &nbsp&nbsp: 9:00 ~ 24:00</p>
		<p class="wed">Wednesday  : 9:00 ~ 24:00</p>
		<p class="thu">Thursday &nbsp: 9:00 ~ 24:00</p>
		<p class="fri">Friday &nbsp &nbsp: 9:00 ~ 24:00</p>
		<p class="sat">Saturday &nbsp: 9:00 ~ 22:00</p>
		<p class="sun">Sunday &nbsp&nbsp: 9:00 ~ 22:00</p>
	</div>
	<script>
		var d = new Date();
		var weekday = new Array(7);
		weekday[0] = "sun";
		weekday[1] = "mon";
		weekday[2] = "tue";
		weekday[3] = "wed";
		weekday[4] = "thu";
		weekday[5] = "fri";
		weekday[6] = "sat";

	document.getElementsByClassName(weekday[d.getDay()])[0].classList.add("todaysDay");
	ByClassName(weekday[d.getDay()])[0].classList.add("todaysDay");
	</script>
		


	<!-- BODY -->
	<div class="heartbeat">
		<a href="doctors.php">
			<img src="img/finddoctor.png" class="finddoctorimg">
			<!-- <p>Find a Doctor</p> -->
		</a>
	</div>

	<!-- doctors Profile -->
    <div class="container">
	<div class="row">
		<div class="col-lg-4 d-flex flex-column text-center justify-content-center align-items-center">
			<img src="img/drmyatwinaung_Fotor.jpg" alt="drprofile" class="rounded-circle" width="150" height="150" >
			<h2>Dr.Myat Win Aung</h2>
			<p>M.B.,B.S , M.Med.Sc (Surgery) , <br>
			F.R.C.S (Ireland), F.I.C.S (USA) <br>
			University of medicine (1) Yangon <br>
			Department of Surgery</p>
			<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-lg-4 d-flex flex-column text-center justify-content-center align-items-center">
		<img src="img/zinlintun_Fotor.jpg" alt="drprofile" class="rounded-circle" width="150" height="150" >
			<h2>Dr. Zin Lin Tun</h2>
			<p>
			M.B.,B.S., MRCP (UK) <br>
M.Med.Sc (Internal Medicine),<br> University of Medicine (1) Yangon <br>
Department of Internal Medicine

			</p>
			<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-lg-4 d-flex flex-column text-center justify-content-center align-items-center">
		<img src="img/myinzu.jpg" alt="drprofile" class="rounded-circle" width="150" height="150" >
			<h2>Dr. Myat Myintzu</h2>
			<p>
			
M.B.,B.S (Ygn), M.Med.Sc (Int. Med), <br>
MRCP (UK), Dr.Med.Sc (Cardiology) <br> University of medicine Magway <br>
Department of Cardiology
			</p>
			<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		</div>
		<div class="col-lg-4 d-flex flex-column text-center justify-content-center align-items-center">
		<img src="img/kyawzinmyint_Fotor.jpg" alt="drprofile" class="rounded-circle" width="150" height="150" >
			<h2>Dr.Kyaw Zin Myint</h2>
			<p>
			M.B.,B.S, M.Med.Sc (Int.Med), <br>
Dr.Med.Sc ( Neurology) <br>
University of medicine (1) Yangon <br>
Department of Neurology

			</p>
			<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		</div>
	</div> 


	 <!-- START THE FEATURETTES -->

	 <hr class="featurette-divider">

	<div class="row featurette featurette_clr">
	<div class="col-md-7">
		<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
		<p class="lead"> COVID OF IMPORTANT CONTANT PH constant  </p>
	</div>
	<div class="col-md-5">
		<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

	</div>
	</div>

	<hr class="featurette-divider">
	<div class="featurette_clr1">
	<div class="row featurette">
	<div class="col-md-7 order-md-2">
		<h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	<div class="col-md-5 order-md-1">
		<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

	</div>
	</div>
	</div>
	<hr class="featurette-divider">

	<div class="featurette_clr">
	<div class="row featurette">
	<div class="col-md-7">
		<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	<div class="col-md-5">
		<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

	</div>
	</div>
	</div>

	<hr class="featurette-divider">
	</div>


	<!-- FOOTER -->
	<div class="footer">
		<table>
			<tr>
				<td><img src="img/banner.jpg" alt="ig_logo" class="ft_logo"></td>
				<td align="center">
					<h3>Contact Information</h3>
					<table class="contact_info">
						<tr>
							<td> Tel </td>
							<td>:</td>
							<td>(+95) 95405071, +(951)247635</td>
						</tr>
						<tr>
							<td> Email </td>
							<td>:</td>
							<td>tts.specialistclinic@gmail.com</td>
						</tr>
						<tr>
							<td> Address </td>
							<td>:</td>
							<td>No65, Min Nandar Road, <br> Dawpon Township, Yangon</td>
						</tr>
						
					</table>
					
				</td>
			</tr>
		
		</table>
	
	
	</div>
	<div class="banner">
		
	
</div>
</body>
</html>