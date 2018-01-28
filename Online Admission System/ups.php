<?php
	session_start();
?>
<html>
<head>
	<title>Upload Status</title>
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
	</style>

	<link href="hover-min.css" rel="stylesheet" type="text/css">
	<link href="custom.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" charset="UTF-8">
</head>
<body bgcolor="#FFFFFF" oncontextmenu="return false;" align=center>
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
		<br><br><br><br>
<table border=1 cellspacing=1 cellpadding = 20 width=850px id=AutoNumber4 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse' align=center>
<tr height = 200px>
<td>
  <?php 
	//This is the directory where images will be saved 
	$target = "images/"; 
	$target = $target . basename( $_FILES['photo']['name']); 
	$photo= 0;
	$sig=0;
	$draf=0;
	//This gets all the other information from the form 

	// $code=mt_rand();
	$regid = $_SESSION['usr_reg_id'];
	$pic=($_FILES['photo']['name']); 
	$sign=($_FILES['sign']['name']);
	$draft=($_FILES['draft']['name']); 
	// Connects to your Database 
	mysql_connect("localhost","root","") or die(mysql_error()) ; 
	mysql_select_db("mdb") or die(mysql_error()) ; 

	//Writes the information to the database 
	mysql_query("INSERT INTO `upload` VALUES ('$regid','$pic','$sign','$draft')") ; 
 
	//Writes the photo to the server 
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){ 
		//Tells you if its all ok 
		echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded successfully"; 
		echo"<br>";
		$photo=1;
	}  
	else { 
		//Gives and error if its not 
		echo "Sorry, there was a problem uploading the PHOTO file."; 
		echo"<br>";
	}
	$target = "Signature/"; 
	$target = $target . basename( $_FILES['sign']['name']); 
	if(move_uploaded_file($_FILES['sign']['tmp_name'], $target)){ 
		$sig=1;
		//Tells you if its all ok 
		echo "The file ". basename( $_FILES['sign']['name']). " has been uploaded succesfully"; 
		echo"<br>";
	}  
	else { 
		//Gives an error if its not 
		echo "Sorry, there was a problem uploading the scanned digital signature  file."; 
		echo"<br>";
	}
	$target = "Drafts/"; 
	$target = $target . basename( $_FILES['draft']['name']);  
	if(move_uploaded_file($_FILES['draft']['tmp_name'], $target)){ 
		$draf=1;
		//Tells you if its all ok 
		echo "The file ". basename( $_FILES['draft']['name']). " has been uploaded succesfully"; 
		echo"<br>";
	} 
	else { 
		//Gives and error if its not 
		echo "Sorry, there was a problem uploading the scanned Draft file."; 
		echo"<br>";
	} 
	if ($photo==1 && $sig==1 && $draf==1 ){
		echo"DATA Uploaded check the profile page for further info and reference ";
		echo"&nbsp;&nbsp;";
		echo"<a href= 'profile.php'>to check profile and status </a>";
		echo "<br><br>Please Confirm Your Application By Completing <a href='Payment.php' style='font-size=+2'>Payment Here</a>.";
	}
	else {
		Echo"<br>";
		echo " <b>Must upload file for application to be submited</b> <br>";
	}
  
  
	$sql="UPDATE login SET submission='1' WHERE (regId = $regid)";
	if (!mysql_query($sql)){
		echo '<font color="red"><br><b>Error: </b></font>' . mysql_error();
	}
?> 
 </td>
 </tr>
 </table>

 <br><br>
<footer>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</div>
</body>
</html>