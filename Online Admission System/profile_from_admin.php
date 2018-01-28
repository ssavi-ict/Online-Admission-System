<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>

<html>
<head>
	<title>Profile</title>
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
		.del_btn input{
			width: 110px;
			height: 40px;
			text-align:center;
			padding:10px;
			background: #d11a2a;
			font-weight: bold;
		}
		.del_btn{
			margin-left:460px;
		}
	</style>

	<link href="hover-min.css" rel="stylesheet" type="text/css">
	<link href="custom.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" charset="UTF-8">
</head>

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
<p style='float:right; margin-right:125;'>
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
<p>
<b style='color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-family:lucida handwriting; font-size:42;'><center>PROFILE PAGE</span></center></b>
</p>

<div id = "content">
<?php
include("config.php");

if(isset($_POST['delete'])){
	$uid = $_REQUEST['regId'];
	mysql_query("DELETE FROM login WHERE regId = ".$uid);
	mysql_query("DELETE FROM edudetails WHERE regId = ".$uid);
	mysql_query("DELETE FROM pdetails WHERE regId = ".$uid);
	mysql_query("DELETE FROM upload WHERE regid = ".$uid);
	$url='adminframe.php';
	echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
	die();
}

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	//$_SESSION['valid'] = $_REQUEST['regId'];
	
	echo "<center>Welcome reg I D ".$_REQUEST['regId']. " &nbsp;&nbsp;&nbsp;! </center>";
	
	$result = mysql_query("select * from upload",$conn);
	$result2 = mysql_query("select * from upload where regId=".$_REQUEST['regId']. " ",$conn);
	echo "<br><br><br>";
	$tmp = mysql_fetch_assoc($result2);
	$var = $tmp['photo'];
	echo "<img src = images/".$var." title = 'Image' height=200 width=240 style = 'float:right; margin-top:75px; margin-right:80px;'>";
	
	$result = mysql_query("select * from login",$conn);
	$result2 = mysql_query("select * from login where regId=".$_REQUEST['regId']. " ",$conn);
	$row = mysql_fetch_assoc($result2);
	
	echo "<table border=0 style = 'margin-left:95px;' cellspacing=2 width=500px id=AutoNumber6 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>";
	echo "<tr bgcolor='#FFFF00' height=30>
		 <td style = 'padding-left:15px;'><b>Activity Summary</b></td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Firstname : ".$row['firstname']."</td>";
	echo "</tr>";
	
	echo "<tr>
		 <td style = 'padding-left:15px;'>Lastname : ".$row['lastname']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Email : ".$row['email']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Dtime : ".$row['dtime']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Form Submitted : ".($row['submission']>0?'Yes':'No')."</td>";
	echo "</tr>";
	echo "</table><br><br>";
	
	$result = mysql_query("select * from pdetails",$conn);
	$result2 = mysql_query("select * from pdetails where regId=".$_REQUEST['regId']. " ",$conn);
	$row = mysql_fetch_assoc($result2);
	
	echo "<table border=0 style = 'margin-left:95px;' cellspacing=2 width=500px id=AutoNumber6 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>";
	echo "<tr bgcolor='#FFFF00' height=30>
		 <td style = 'padding-left:15px;'><b>Personal Details</b></td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Fullname : ".$row['fullname']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Birthdate : ".$row['bday']."-".$row['bmonth']."-".$row['byear']." &nbsp;&nbsp;&nbsp;&nbsp;Age : ".$row['age']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Gender : ".$row['gender']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Marital Status : ".$row['Mstatus']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Father's Name : ".$row['fname']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Mother's Name : ".$row['mname']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Nationality : ".$row['nation']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Religion : ".$row['religion']."</td>";
	echo "</tr>";
	echo "</table><br><br>";
	
	echo "<table border=0 style = 'margin-left:95px;' cellspacing=2 width=500px id=AutoNumber6 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>";
	echo "<tr bgcolor='#FFFF00' height=30>
		 <td style = 'padding-left:15px;'><b>Contact Details</b></td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Division : ".$row['division']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Address : ".$row['address']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>PIN Code : ".$row['pincode']."</td>";
	echo "</tr>";
	echo "<tr>
		 <td style = 'padding-left:15px;'>Mobile : ".$row['mobile']."</td>";
	echo "</tr>";
	echo "</table><br><br>";
	
	$result = mysql_query("select * from edudetails",$conn);
	$result2 = mysql_query("select * from edudetails where regId=".$_REQUEST['regId']. " ",$conn);
	$row = mysql_fetch_assoc($result2);
	echo "<table border=1 style = 'margin-left:95px;' cellspacing=2 width=838px id=AutoNumber6 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>";
	echo "<tr bgcolor='#FFFF00' height=30>
		 <td style = 'padding-left:15px;' colspan='7'><b>Education Details</b></td>";
	echo "</tr>";
	echo "<tr bgcolor='#F0F0F0' height='30px' align=center>
		 <td>Criteria</td><td>Stream</td><td>Board</td><td>Passing Year</td><td>Roll No.</td><td>Reg No.</td><td>GPA</td>";
	echo "</tr>";
	echo "<tr bgcolor='#F0F0F0' height='30px' align=center>
		 <td>SSC</td>";
	echo "<td >".$row['ssc_strm']."</td>";
	echo "<td >".$row['ssc_board']."</td>";
	echo "<td >".$row['ssc_pasyr']."</td>";
	echo "<td >".$row['ssc_roll']."</td>";
	echo "<td >".$row['ssc_reg']."</td>";
	echo "<td >".$row['ssc_rslt']."</td>";
	echo "</tr>";
	echo "<tr bgcolor='#F0F0F0' height='30px' align=center>
		 <td>HSC</td>";
	echo "<td >".$row['hsc_strm']."</td>";
	echo "<td >".$row['hsc_board']."</td>";
	echo "<td >".$row['hsc_pasyr']."</td>";
	echo "<td >".$row['hsc_roll']."</td>";
	echo "<td >".$row['hsc_reg']."</td>";
	echo "<td >".$row['hsc_rslt']."</td>";
	echo "</tr>";	
	echo "</table><br><br>";
	
	echo "<table border='0' style='float:right; margin-right: 160;'>";
	echo "<tr>";
	echo "<td>";
	echo "<img src = 'sigTc.jpg' height=100 width=240>";
	echo "<hr style = 'margin-left:10;' width = 250>";
	echo "<p align=center><b>Head of Department's Signature</b></p>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	
	$result = mysql_query("select * from upload",$conn);
	$result2 = mysql_query("select * from upload where regId=".$_REQUEST['regId']. " ",$conn);
	$tmp = mysql_fetch_assoc($result2);
	$var = $tmp['sign'];
	echo "<table border='0' style='float:left; margin-left: 100;'>";
	echo "<tr>";
	echo "<td>";
	echo "<img src = Signature/".$var." height=100 width=240 >";
	echo "<hr style = 'margin-left:10;' width = 250>";
	echo "<p align=center><b>Applicant's Signature</b></p>";
	echo "</td>";
	echo "</tr>";
	echo "</table><br><br><br><br>";
	echo "<br><br><br><br><br><br>";
	
}
?>
<br><br>
<div class="del_btn">
	<input name="delete" type="submit" value="Delete Profile" onclick="return confirm('Delete This Profile?')">
</div>
<br><br><br>
</div>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</center>
</div>
</body>
</form>
</html>