<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
		die();
	}
	if($_SESSION['username']!='admin' && $_SESSION['password']!='admin'){
		$url='index.php';
		echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
		die();
	}
?>

<html>
<head>
	<title>Admin Panel</title>
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
<title>Profile </title>

<form name="form5" method="post" action="" autocomplete="off">
<body bgcolor="#F0F4F1" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">
<div class = "all" >
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

<body>


<?php
if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
	
	echo "<b style='float:right; margin-right:85;'>Welcome <a href='profile.php'>admin</a> ! <a href='logout.php'>LOG OUT</a><br/><br><br></b>";
	echo "<br><br>";
	echo "<table border=0 style = 'margin-left:70px; border-style:dotted; border-radius:25px;' cellspacing=2 width=930px id=AutoNumber6 bgcolor='gray' bordercolor=white style='border-collapse: collapse'>";
	echo "<tr height=35><td align=center><b><font color='yellow' size =+2 >Applicant's List</font></b></td></tr>";
	echo "</table><br><br>";

	echo "<table border=1 style = 'margin-left:70px; ' cellspacing=2 width=930px id=AutoNumber6 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>
	<tr bgcolor='#FFFF00' height=45 align=center>
	<td><b>Firstname</b></td>
	<td><b>Lastname</b></td>
	<td><b>Email-Id</b></td>
	<td><b>Date and time</b></td>
	<td><b>Registration Id</b></td>
	<td colspan='2'><b>Submission</b></td>
    </tr>";
	while($row = mysql_fetch_assoc($result))
	{
		  echo "<tr align=center height=40>";
		  echo "<td>" . $row['firstname'] . "</td>";
		  echo "<td>" . $row['lastname'] . "</td>";
		  echo "<td>" . $row['email'] . "</td>";
		   
		  echo "<td>" . $row['dtime'] . "</td>";  
		  echo "<td>" . $row['regId'] . "</td>";  
		  if($row['submission']>0){
				$validuser = $row['regId'];
				echo "<td>Yes</td>"; 
				echo "<td><a href='profile_from_admin.php?regId=$validuser'>Profile</a></td>";
		  }
		  else{
				echo "<td colspan='2'>No</td>"; 
		  }
		   
		  echo "</tr>";
	}
	echo "</table>";
}
echo"</font>";
?> 
</td></tr>
<br><br><br>
</body>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</center>
</div>
</html>
