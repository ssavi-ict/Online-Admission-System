<?php session_start();
	include("config.php");
?>

<html>
<head>
<title>Homepage</title>


<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" charset="UTF-8">

<style>
	@keyframes slidy {
	0% { left: 0%; }
	20% { left: 0%; }
	25% { left: -100%; }
	45% { left: -100%; }
	50% { left: -200%; }
	70% { left: -200%; }
	75% { left: -300%; }
	95% { left: -300%; }
	100% { left: -400%; }
	}

	body { margin: 0; } 
	div#slider { overflow: hidden; border: 2px solid black; border-style:dotted; border-radius:25px; }
	div#slider figure img { width: 20%; float: left; }
	div#slider figure:hover { animation-play-state:paused; }
	div#slider figure { 
	  position: relative;
	  width: 500%;
	  margin: 0;
	  left: 0;
	  text-align: left;
	  font-size: 0;
	  animation: 20s slidy infinite; 
	}
	.rsc_css li a:hover{
		background: lime;
	}
	.rsc_css li a{
		text-decoration:none;
		border-radius: 4px;
	}
	.rsc_css li {
		padding-left:20px;
		height:22px;
		width: auto;
	}
	
	

</style>
</head>

<body >
    <div class="all">
	<br>
    <center> <img src="images/3.jpg" alt="edu " /> </center>
	<div class=" main_menu">
			<ul >
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="index.php">Home</a></li>
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="about.php" target="_blank">About</a></li>
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="#">Features</a>
					<ul >
						<li class="hvr-shutter-in-vertical"><a href="admform.php">Apply</a></li>
						<li class="hvr-shutter-in-vertical"><a href="profile.php">Profile</a></li>
						<li class="hvr-shutter-in-vertical"><a href="Payment.php">Payment</a></li>
						
								
					</ul> 
						
				</li>
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="login.php">Login</a></li>
				
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="register.php">Registration</a> </li>
				<li class="hvr-shutter-in-vertical hvr-float-shadow"><a href="contact.php">Contact</a></li>
			</ul>
		
		</div>
		<br>
		<p style='float:right; margin-right:80;'>
			<?php
				if(!$_SESSION['valid']){
					echo "Hi Anonymous!";
				}
				else{
					echo "Hi <a href='profile.php'>".$_SESSION['username']."</a>";
					echo " | ";
					if($_SESSION['username']=='admin'){
						echo "<a href = 'adminframe.php'> Admin Panel </a>";
						echo " | ";
					}
					echo "<a href='logout.php'>LOG OUT</a>";
				}
			?>
		</p> 
		<br><br><br><br><br>
		<div id="slider" style="height:250;width:900;margin-left:95;">
		<figure>
		<img src="images\banner-image.jpg" alt="" height=250 width=500>
		<img src="images\Admission - 1.jpg" alt="" height=250 width=500>
		<img src="images\Admission - 2.jpg" alt="" height=250 width=500>
		<img src="images\Admission - 3.jpg" alt="" height=250 width=500>
		<img src="images\banner-image.jpg" alt="" height=250 width=500>
		</figure>
		</div>
		<br><br><br>

<div id="right_side_content" style="width:20%; border-radius:15px;float:right; margin-right:70; background:#F0F4F1;">
	<ul class="rsc_css" style='list-style-type:none; padding-left:20;'>
		<h3>Important Links</h3>
		<li><a href="#">Selected List</a></li><li><a href="how.php">Rules to Apply</a></li>
		<li><a href="howphoto.php">Upload Guidelines</a></li><li><a href="admform.php">Fill Up The Form</a></li>
		<li><a href="#">FAQ</a></li><li><a href="#">Quick Links 1</a></li>
		<li><a href="#">Quick Links 2</a></li><li><a href="#">Quick Links 3</a></li>
	</ul>
	<br>
	<ul class="rsc_css" style='list-style-type:none; padding-left:20;'>
		<h3>Quick Links</h3>
		<li><a href="#">About Institution</a></li><li><a href="#">About Department</a></li>
		<li><a href="#">Faculty</a></li><li><a href="#">Publications</a></li>
		<li><a href="#">Syllabus</a></li><li><a href="#">Achievements</a></li>
		<li><a href="#">Photo Gallery</a></li><li><a href="#">Alumnus</a></li>
		<li><a href="#">SiteMap</a></li>
		<br>
	</ul>
	
</div>
<div id="left_side_content" style="border:1px solid black; border-style:dotted; width:60%; border-radius:15px; margin-left:95;">
	<br>
	<h2 style="margin:0 auto; width:90%;">Hello Everyone!!! Admission For XYZ University is happening right now. Details are given below.</h2>
	<br>
	<br>
	<img src="images/1.jpg" alt="edu " height="30%" width="75%" style='margin-left:30;'/><br><br>
	<b><p style="margin:0 auto; width:90%;" >Welcome from XYZ University. We would happy to let you know that XYZ University Authority has decided to enrol students in 
	Fall Session for YYYY-YY Session. The authority has decided that about XXX students will be taken under X different streams. After completing preliminary application
	and admission tests, selected students are authorized to apply and payment online from anywhere over the world to complete their admission. Classes of Fall session
	will start at XX/YY/ZZZZ.<br><br>&#8680; The procedure to apply in short given below -<br><br>
	1) To complete online application you must complete site <a href="register.php"> registration.</a> <br>
	2) A unique <font color = "purple">Registration Code</font> will be given which will be needed to apply next. You're requested to store it very carefully.<br>
	3) You have to <a href="login.php">Login</a> now.<br>
	4) The next step is to <a href="admform.php">Apply for Admission</a> .You can see <a href="how.php">HOW TO APPLY</a> if needed.<br>
	5) Fill all the information correctly with authorized informations and submit. You can see the <a href="howphoto.php">Image Uploading Guideline</a> if needed.<br>
	6) After completion of Form Fill Up you can view your <a href="profile.php">Profile</a>.<br>
	7) The next step is to complete <a href="Payment.php">Payment</a>. Be sure about the informations needed to complete payment.<br><br>
	Bingo !! Thanks for Applying!! We will get in touch with you ASAP. Give us feedback about our system <a href="contact.php">Here</a>. 
	<br><br><br>
	</p>

</div>


<div id="logo" > 
<br>
<b><p style="margin-left:95; width:85%; " > 
The Online Admission system is a integrated platform of enrolling yourself by following some easy steps.
Logged user will get the privileges of having authorized profile information with all the important information.
The appearance of this platform is pretty enough and user-friendly. 
The Enroller platform is different from a typical software development scenario.
It is especially designed for academic institute's admission needs and no additional software development is required. 
Compared to custom software development, moving to Enroller will be cost effective and time saving. 
Enroller acts as an interface between your institute and applicants. It provides a platform to publish, collect &amp; manage admission forms. 
Institutes benefit by reducing cost. Applicants benefit by easy and flexible process.</b>
</p>
<center><br>
<img src="images/2.png" alt="edu " width="85%" style='margin-left:20;' /></center>
<br>
<p style="margin-left:100px;"> <font size="4" face="verdana" color="brown">Session to fill  the application form begins once registration is done or Login is done .....</font>
</p>
<p style="margin:0;margin-left:100px;">
You must be logged in to fill the admission form / check the status of application . </p><br>


<?php

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
	
	
	

	while($row = mysql_fetch_assoc($result))
	{
		$username = $row['username'];
		$password = $row['password'];
		$date = $row['dtime'];
		
	}
	
}
else
{
	//echo "</p You must be logged in to fill the admission form / check the status of application . .<br/>";	
}

?>

<br><br><br><center>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</center>
</div>

</div>
</body>
</html>
