<?php
	session_start();
?>
<html>
<head>
<title>How To Apply</title>
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
	.hwcell td{
		padding-left: 75px;
		background: #F0F0F0;
	}
	.hwcell td:hover{
		background:gray;
	}
	
</style>

<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" charset="UTF-8">
</head>



<form id="reg_frm" name="reg_frm"  method="post" autocomplete="off" >
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
<br><br><br><br>
<table border=0 width=850px id=AutoNumber7 class="howtbl" style='border-collapse: collapse; margin-left:115; border-radius:5px;'>
	<tr height=40 style='text-align:center; background:teal;'>
		<td><font size =+2 face='Lucida Handwriting' ><b>HOW TO APPLY</b></font></td>
	</tr>
	
	<tr style='height:70px;'>
		<td style='padding:7px 0px 7px 25px;'><b>Eligible candidates are required to apply only 'ONLINE' through our website between DD/MM/YYYY and DD/MM/YYYY and 
	 no other means/ mode of application will be acceptable.</b></td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(i) &nbsp; Candidates are required to have a valid personal e-mail ID. It should be kept active for the duration of this recruitment project. 
		We may send call letters for written test, interview etc. through this registered e-mail ID.</strong></td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(ii)</strong> &nbsp; In case a candidate does not have a valid personal e-mail ID, he/she should create his/her new e-mail ID before applying online.</td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(iii)</strong> &nbsp; Carefully fill in the necessary details in the Online Application Form at the appropriate places and submit the same Online.</td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(iv)</strong> &nbsp; The name of the candidate or his/ her father/ husband etc should be spelt correctly in the application as it appears in the certificates/ mark sheets. 
		Any change/ alteration found may disqualify the candidature : <br><strong style='padding-left:35px;'>You should note / remember your system generated ROLL NUMBER for future reference and use. </strong></td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(v)</strong> &nbsp; An application once made will not be allowed to be withdrawn.</td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(v)</strong> &nbsp; After filling in the details on the application form candidates are required to take a printout of the system generated application form immediately. 
		Candidates should keep the printout of the application form for future usage.</td>
	</tr>
	
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(vi)</strong> &nbsp; There is no provision to modify the submitted online application. 
		Candidates are requested to make sure to fill in correct the details in the online application, if any.</td>
	</tr>
	<tr class="hwcell" style='height:55px;' >
		<td><strong>(vii) &nbsp; Once you have submitted your application successfully, You will get the intimation through EMAIL and SMS.</strong></td>
	</tr>	
	
</table>
<br><br><br><center>
<footer>
<center>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</center>

</body>
</div>
</html>
