<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>

<html>
<head>
	<title>Submit Uploads</title>
	<style>
		table{
			border : 1px ;
		}
		.header{
			margin-left: 161px;
			font-size:40px;
		}
		.tagline_head{
			font-family:Lucida Handwriting;
			font-size: 15px;
		}
		.button_hisab input{
			width: 10%;
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
<body bgcolor="#FFFFFF" oncontextmenu="return false;">
<form enctype="multipart/form-data" action="ups.php" method="POST"> <br> <br>  
<div class = "all">
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
<p style='float:right; margin-right:115;'>
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
<table border=1 cellspacing=1 width=850px id=AutoNumber4 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse' align=center>
<tr bgcolor="#FFFFFF">
<td height=50px >
<center><strong>Upload Required Documents</strong></center>
</td>
</tr>
<!-- <tr bgcolor="#F0F0F0" height=35px>
<td>
Registration ID: <input type="text" name="regid">
</td>
</tr>
--> 
<tr bgcolor="#F0F0F0" height=35px>
<td>
Photo:   <input type="file" name="photo"> 
</td>
</tr>
<tr bgcolor="#F0F0F0" height=35px>
<td>
Digital Sign:  <input type="file" name = "sign">
</td>
</tr>
<tr bgcolor="#F0F0F0" height=35px>
<td>
Scanned Draft :  <input type="file" name = "draft">
</td>
</tr>
</table>
<br><br>
<div class="button_hisab"><center><input type="submit" value="Upload"></center></div>
<br><br><br>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer> 
</form>
</div>
</body>
</html>
 
 <?php
include 'config.php';

$query = 'CREATE TABLE upload( '.
     
         'regid  VARCHAR(10)  NULL, '.
         'photo VARCHAR(50) NOT NULL, '.
         'sign VARCHAR(30) NOT NULL, '.
         'draft VARCHAR(30)NOT NULL)';

$result = mysql_query($query);

?>