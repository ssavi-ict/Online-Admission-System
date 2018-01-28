<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>
<html>
<head>
<title>Contact Us</title>


<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style>
	label {
		display:block;
		margin-top:20px;
		letter-spacing:2px;
	}
	form {
		margin-left:100px;
		width:459px;
	}

	/* Style the text boxes */
	input, textarea {
		width:439px;
		height:27px;
		background:#efefef;
		border:1px solid #dedede;
		padding:10px;
		margin-top:3px;
		font-size:0.9em;
		color:#3a3a3a;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
	}

	textarea {
		height:213px;
	}
	input:focus, textarea:focus {
		border:1px solid #97d6eb;
	}
	#submit{
		height: 40px;
		width: 20%;
		padding: 10px;
		font-size: 17px;
		color: white;
		background: #5F9EA0;
		border: none;
		border-radius: 5px;
		align:center;
	}

	#submit:hover {
		opacity:.9;
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
    <div class="all"><br>
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
	
	<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: TangledDemo'; 
		$to = 'admin@domain.com'; 
		$subject = 'Hello';
				
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
		
		if(isset($_POST['submit']))
		{
				echo "<br/>";		echo "<br/>";		
				echo "<table style = 'border-style: dotted; border-radius:5px; color:white; margin: 0 auto; background: #5F9EA0;'>";
				echo "<tr style = 'height: 50px; padding: 20px; '><td><font size=+2 family: verdana>";
				if ($name != '' && $email != '' && $message != '') {
					if (mail ($to, $subject, $body, $from)) { 
						echo '<p>Your message has been sent!</p>';
					} 
					else { 
						echo '<p>Something went wrong, go back and try again!</p>'; 
					} 
				}
				else {
					echo '<p>You need to fill in all required fields!!</p>';
				}
				echo "</font></td></tr>";
				echo "</table>";
		}
	?>

	<br>
	<h2 style="margin:0 auto; width:90%; text-align:center;">Get in Touch!!</h2><br>
	<p style="margin-left:90px; width:90%;"><font color='red'> * </font>stands for required answer.</p>
	<form method="post" action="">
		<label>Name<font color='red'> *</font></label>
		<input name="name" placeholder="Type Here">
				
		<label>Email<font color='red'> *</font></label>
		<input name="email" type="email" placeholder="Type Here">
				
		<label>Message<font color='red'> *</font></label>
		<textarea name="message" placeholder="Type Here"></textarea>
		<br><br>	
		<input id="submit" name="submit" type="submit" value="Submit">
    </form>
	
	<br><br>
</div>


<br><br><br><br><br><center>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</center>

</div>
</body>
</html>
