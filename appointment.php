<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>

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
	<div class="main_about">

	<h1>My Information</h1>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php session_start();
			if (isset($_SESSION['username'])): ?>
	    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
	    
	    <a href="logout.php">Logout</a>
		<?php else: ?>
    <p>Please <a href="login.php">login</a>.</p>
<?php endif; ?>
 
</div>
		
		
	<!-- <a href="login.php">login </a> | -->

	</div>

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