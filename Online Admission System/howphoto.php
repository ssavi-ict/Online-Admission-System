<?php
	session_start();
?>
<html>
<head>
<title>Upload Guidelines</title>
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
		padding-left: 115px;
		background: #F0F0F0;
	}
	.hwcell td:hover{
		background:gray;
	}
	.innerhwcell td{
		padding-left: 175px;
		background: ;
	}
	.innerhwcell td:hover{
		background:lime;
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
		<td><font size =+1 face='Lucida Handwriting' ><b>Guidelines for scanning the Photograph , Signature & Draft</b></font></td>
	</tr>
	<tr style='height:10px;'><td></td></tr>
	<tr style='height:70px; background:#F0F0F0;'>
		<td style='padding:7px 0px 7px 25px;'><strong>Before applying online a candidate will be required to have a scanned (digital) image of his/her photograph , 
		signature and scanned image of the Draft as per the specifications given below.</strong></td>
	</tr>
	<tr style='height:40px;'>
		<td style='padding:7px 0px 7px 75px;'><b>(1) Photograph Image :</b></td>
	</tr>
	
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(i)</strong> &nbsp; Photograph must be a recent passport style colour picture.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(ii)</strong> &nbsp; Make sure that the picture is in colour, taken against a light-coloured, preferably white, background.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(iii)</strong> &nbsp; Ensure that the size of the scanned image is not more than 25KB. If the size of the file is more than 25KB, 
		then adjust the settings of the scanner such as the DPI resolution, no. of colours etc., during the process of scanning.</td>
	</tr>
	<tr style='height:40px;'>
		<td style='padding:7px 0px 7px 75px;'><b>(2) Signature Image :</b></td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(i)</strong> &nbsp; The applicant has to sign on white paper with Black Ink pen.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(ii)</strong> &nbsp; The signature must be signed only by the applicant and not by any other person.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(iii)</strong> &nbsp; 	The signature will be used to put on the Hall Ticket and wherever necessary.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(iv)</strong> &nbsp; 	If the Applicant's signature on the answer script, at the time of the examination, 
		does not match the signature on the Hall Ticket, the applicant will be disqualified.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(v)</strong> &nbsp; 	Preferred Dimension is 140 x 60 pixels.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(vi) &nbsp; 	If the file size and format are not as prescribed, an error message will be displayed.</strong></td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><strong>(vi)</strong> &nbsp; 	While filling in the Online Application Form the candidate will be provided with a link to upload 
		his photograph ,signature and Draft.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><b>(vii) &nbsp; Procedure for Uploading the Photograph , Signature and Draft</b></td>
	</tr>
	<tr class="innerhwcell" style='height:25px;' >
		<td><strong>(a)</strong> &nbsp; There will be a link for uploading Photograph , Signature and Draft.</td>
	</tr>
	<tr class="innerhwcell" style='height:25px;' >
		<td><strong>(b)</strong> &nbsp; Click on the respective link "Upload Photograph / Signature/ Draft".</td>
	</tr>
	<tr class="innerhwcell" style='height:25px;' >
		<td><strong>(c)</strong> &nbsp; Browse and Select the location where the Scanned Photograph / Signature file has been saved.</td>
	</tr>
	<tr class="innerhwcell" style='height:25px;' >
		<td><strong>(d)</strong> &nbsp; Select the file by clicking on it.</td>
	</tr>
	<tr class="innerhwcell" style='height:25px;' >
		<td><strong>(e)</strong> &nbsp; Click the 'Upload' button.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td><b>(viii) &nbsp; Your Online Application will not be registered unless you upload your photograph , signature and Draft as specified.</b></td>
	</tr>
	<tr style='height:40px;'>
		<td style='padding:7px 0px 7px 75px;'><b>(3) Note :</b></td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td>(1) &nbsp; In case the face in the photograph or signature is unclear the candidate's application may be rejected.</td>
	</tr>
	<tr class="hwcell" style='height:35px;' >
		<td>(2) &nbsp; After registering online candidates are advised to take a printout of their system generated online application forms and need not be sent to us.</td>
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
