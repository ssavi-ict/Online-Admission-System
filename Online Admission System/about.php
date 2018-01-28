<?php session_start();
	include("config.php");
?>

<html>
<head>
<title>About Us</title>


<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" charset="UTF-8">

<style>
	.rsc_css li a:hover{
		background: lime;
	}
	.rsc_css li a{
		text-decoration:none;
		
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
<div class="left_side_content" style="border:1px solid black; border-style:dotted; width:60%; border-radius:15px; margin-left:95;">
	<br>
	<h2 style="margin:0 auto; width:90%;">About Us !!!</h2>
	<br>
	<br>
	<b><p style="margin:0 auto; width:90%;" >
		Online Admission System is an online based Enroller Platform that is fairly easier and helps any applicant to apply from anywhere , any time with
		a device and with an internet connection. This platform is developed by a team of new and enthusiastic developer of Department of ICT, Comilla
		University. All of them are from 4th Batch holding session 2012-13. The team is not so much experienced but they are always ready to learn new
		things related to technology at any time, anywhere. Team members are themselves very much helpful to each other. A very very good understanding
		among the members make this Task possible within this short amount time. We thank you to use our platform.<br><br>
		One thing we want to notified about our platform is we don't have any information up-gradation system. As those informations are very much
		confidential and can cause a great problem as a result of changing frequently we leave it up. 
	</p>
	<br><br><br>
	<p style="margin:0 auto; width:90%;" >
		<b><u>Developers</u></b><br><br>
		<b>(1) <font color="purple">Project Supervisor</font> : MD. Sharif Hossen, Lecturer, Dept. of ICT, Comilla University. </b><br>
		<b>(2) <font color="purple">Team Lead</font> : Avik Sarkar. </b><br>
		<b>(3) <font color="purple">Lead Developer</font> : MD. Mehedi Hasan. </b><br>
		<b>(4) <font color="purple">Co-Lead Developer</font> : MD. Mohi Uddin Ahmed &amp; Najmun Nahar Nishi. </b><br>
		<b>(5) <font color="purple">Developer and Alpha Tester</font> : Mainul Hossain. </b><br>
		<b>(6) <font color="purple">Developer</font> : MD. Oli Ullah.</b><br>
		<b>(7) <font color="purple">Developer</font> : MD. Sadequr Rahman.</b><br>
		<b>(8) <font color="purple">Developer</font> : Abdullah Al Mamun.</b><br>
	</p>
	
	<br><br><br>
</div>


<div id="logo" > 
<br>

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
