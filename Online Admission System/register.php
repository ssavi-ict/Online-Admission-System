<?php 
	session_start(); 
?>

<html>
<head>
<title>Register</title>
<style>
	.reg_frm_cntnt {
		font-size: 120%;
		background: none;
	}
	.regfrm_header {
		width: 50%;
		height: 75px;
		margin: 0 auto 0px;
		color: white;
		background: #5F9EA0;
		text-align: center;
		border: 1px solid #B0C4DE;
		border-bottom: none;
		border-radius: 10px 10px 0px 0px;
		
	}
	form {
		width : 48%;
		margin: 0px auto;
		padding-bottom: 5px;
		padding-left: 20px;
		border: 1px solid #B0C4DE;
		background: white;
		border-radius: 0px 0px 10px 10px;
	}
	
	.input-group {
		margin: 10px 0px 10px 0px;
	}

	.input-group label {
		display: block;
		text-align: left;
		margin: 3px;
	}
	.input-group input {
		height: 40px;
		width: 93%;
		padding: 5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
	}
	.button_hisab{
		margin: 10px 0px 10px 0px;
		padding-top: 10;
	}
	.button_hisab input{
		width: 15%;
		padding: 10px;
		font-size: 17px;
		color: white;
		background: #5F9EA0;
		border: none;
		border-radius: 5px;
	}
	.button_hisab input:hover{
		opacity: .85;
		color: purple;
		font-weight: bold;
	}
</style>

<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" charset="UTF-8">
</head>


<body bgcolor="#F0F4F1" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">
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
<p style='float:right; margin-right:120;'>
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
<br><br>
<br><br>
<?php

include("config.php");

$query = 'CREATE TABLE login( '.
         'firstname VARCHAR(20) NOT NULL, '.
		 'lastname VARCHAR(20) NOT NULL, '.
         'email VARCHAR(30) NOT NULL, '.
         'username VARCHAR(30) NOT NULL, '.
		 'password VARCHAR(30)NOT NULL, '.
		 'dtime DATE NOT NULL, '.
		'regId VARCHAR(10) NOT NULL, '.
		'submission INTEGER )';

$result = mysql_query($query);

if(isset($_POST['submit']))
{   

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
    
	if($user == "" || $pass == "" )
	{
			echo "<br/>";echo "<br/>";echo "<br/>";
		echo "Please fill up all the details.";
		echo "<br/>";
	}
	else
	{  $regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
      // Validate the syntax 
		if(!preg_match($regexp, $email))
		{
			echo "<br/>";
			echo "Email address entered is not valid.";
			echo "</br>";
			echo "Please enter a correct email address";
			
		}
		else 
		{
			$regId=mt_rand(100000000,999999999);
			mysql_query("insert into login(firstname,lastname,email,username,password,regId,dtime) values('$firstname','$lastname','$email','$user','$pass','$regId',now())",$conn)
			or die("Error ! refresh the page or relogin .");
		
			echo "<br/>";		echo "<br/>";		//echo "<br/>";
			echo "<table style = 'border-style: dotted; border-radius:5px; color:white; margin: 0 auto; background: #5F9EA0;'>";
			echo "<tr style = 'height: 100; padding: 20px; '><td><font size=+2 family: verdana>";
			echo "Your registration id is $regId.";
			echo "</br>";
			echo "Please note down your registration ID.";
			echo "</br>";
			echo " Use this for checking status.";
		//echo "Registration successfully done now login ";
			echo "<br/>";
			echo "</font></td></tr>";
			echo "</table>";
			echo "<br><br>";
		}
	}
}
?>
<div class="reg_frm_cntnt" style=''> 
	<div class="regfrm_header">
		<h2>Register</h2>
	</div>
	<form method="post" action="" autocomplete="off">
	
			<div class="input-group">
				<label>First Name</label>
				<input type="text" name="firstname">
			</div>
			
			<div class="input-group">
				<label>Last Name</label>
				<input type="text" name="lastname">
			</div>
			
			<div class="input-group">
				<label>Email</label>
				<input type="text" name="email">
			</div>
		
			<div class="input-group">
				<label>Username </label>
				<input type="text" name="username" value="">
			</div>
			
			<div class="input-group"> 
				<label>Password</label>
				<input type="password" name="password">
			</div>
			
			<div class="button_hisab">
				<INPUT NAME="name" TYPE="reset" VALUE="Reset">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Submit">
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
	</form>
</div>
</br>
</br>

</b>


<br> <br><center>
<footer>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</center>
</div>
</body>
</html>

