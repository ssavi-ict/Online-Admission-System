<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>

<html>
<head>
<title>Submit Personal Details</title>
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



<form id="reg_frm" name="reg_frm"  method="post" autocomplete="off">
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
<br><br>	
<center>
<h3>Admission Form</h3>
<table border=1 cellspacing=1 width=838px id=AutoNumber2 bordercolor=white class="bgcolr" style='border-collapse: collapse'>
<tr bordercolor=red>
     <td colspan=2 bgcolor=white bordercolor=white>
		<marquee BEHAVIOR=ALTERNATE onmouseover="this.stop();" onmouseout="this.start();" width = "75%" hspace = "13%" vspace="2%">
			<font color=#800080>!!! Admission Going On. See <a  href="how.php">HOW TO APPLY</a> !!!</font>
		</marquee> 
	 </td>

</tr>
<tr bgcolor="#F0F0F0" height="30">
     <td colspan=2 bordercolor=white>
		<font color=#000000><font color=red>&nbsp;&nbsp;&nbsp;&nbsp;*</font>&nbsp;Mandatory Field</font>
	 </td>

</tr>
 
<tr>
        <td height="25" colspan="4" bgcolor="#FFFFFF" class="tableheader"><br><b><center>Authentication Field</center><br></b></td>
</tr>

<tr bgcolor="#F0F0F0" height="30">
		<td class="tablecontent2" >&nbsp;&nbsp;&nbsp;&nbsp&nbspRegistration ID <font color=#800080 >[As Given When Registering]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
		&nbsp;&nbsp;&nbsp;&nbsp&nbsp<input type=text placeholder = "Enter Your Reg. ID" name="regId" size=40 maxlength=40 id=regID onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">
		</td>
</tr>

<tr>
        <td height="25" colspan="4" bgcolor="#FFFFFF" class="tableheader"><br><b><center>Personal Details</center><br></b></td>
</tr>

<tr bgcolor="#F0F0F0" height="30">
		<td class="tablecontent2" >&nbsp;&nbsp;&nbsp;&nbsp&nbspFull Name <font color=#800080 >[BLOCK LETTER]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
		<input type=text placeholder = "Enter Your Name" name="fullname" size=40 maxlength=40 id=firstname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">
		</td>
</tr>



<tr bgcolor="#F0F0F0" height="30">
                <td class="tablecontent1"><p>&nbsp;&nbsp;&nbsp;&nbsp&nbspDate of Birth <font color=#800080 >[as on NID/BC]</font><span class="alert"><font color=red>*</font></span></p></td>
                <td colspan="3" class="tablecontent1">
				
				 <select class=listMenu  size=1 name="bday" id=seldobday >
				 <option value='' selected>Date</option>
				 <script type = "text/javaScript">
					for(var i=1; i<=31; i++){
						document.writeln("<option value = ");
						if(i>=1 && i<=9) document.writeln("0"+i);
						else document.writeln( i );
						document.writeln(">");
						if(i>=1 && i<=9) document.writeln("0"+i);
						else document.writeln(i);
						document.writeln("</option>");
					}
				 </script>
				 </select> 
				 
				 <select class=listMenu  size=1 name="bmonth" id=seldobmon >
					 <option value='' selected>Month</option>
					 <option value='01'>JANUARY</option> <option value='02'>FEBRUARY</option><option value='03'>MARCH</option>
					 <option value='04'>APRIL</option><option value='05'>MAY</option><option value='06'>JUNE</option>
					 <option value='07'>JULY</option><option value='08'>AUGUST</option><option value='09'>SEPTEMBER</option>
					 <option value='10'>OCTOBER</option><option value='11'>NOVEMBER</option><option value='12'>DECEMBER</option>
				 </select> 
				 
				 <select class="listMenu"  size="1" name="byear" id="seldobyear" >
                 <option value=""  selected="selected">Year</option>
				 <script type = "text/javaScript">
					var now = new Date();
					var Y = now.getFullYear() - 17;
					for(var i=1; i<=20; i++){
						document.writeln("<option value = ");
						document.writeln(Y);
						document.writeln(">");
						document.writeln(Y);
						document.writeln("</option>");
						Y--;
					}
				 </script>

                 </select>
				 </td>
</tr>
<tr bgcolor="#F0F0F0" height="30">
				<td class="tablecontent2">
						&nbsp;&nbsp;&nbsp;&nbsp Age as on
						<script type = "text/javaScript">
							var now = new Date();
							var dd = now.getDate(); if(dd<=9) dd = "0" + dd;
							var mm = now.getMonth(); mm++; if(mm<=9) mm = "0" + mm;
							var yyyy = now.getFullYear();
							now = dd + '.' + mm + '.' + yyyy;
							document.writeln(now);
						</script>
                <td colspan="3" class="tablecontent2">
					<input type=text  size="10" placeholder="Enter Your Age" name="age"  id="txtage" />
				</td>
</tr>
<tr bgcolor="#F0F0F0" height="30">
				<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Married<span class="alert"><font color=red>*</font></span></td>
				<td class="tablecontent1">
					<input type="radio" name="Mstatus" id="Mstatus" value="Married"> Yes
					<input type="radio" name="Mstatus" id="Mstatus" value="Unmarried"> No
				</td>
</tr>
	
<tr bgcolor="#F0F0F0" height="30">
		<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Gender<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
			<input type="radio" name="gender" id="gender" value="Male"> Male
			<input type="radio" name="gender" id="gender"value="Female"> Female
			<input type="radio" name="gender" id="gender"value="Other"> Other
		</td>
</tr>
<tr bgcolor="#F0F0F0" height="30">
      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspFather's Name<span class="alert"><font color=red>*</font></span></td>
      <td class="tablecontent1">
			<input type=text name="fname" id="fname" size=31 maxlength=30 placeholder="Enter Your Father's Name" onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">
      </td>

</tr>

<tr bgcolor="#F0F0F0" height="30">
      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mother's Name<span class="alert"><font color=red>*</font></span></td>
      <td class="tablecontent2">
		<input type=text name="mname" id="mname" size=31 maxlength=30 placeholder="Enter Your Mother's Name" onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));'onkeydown="return alphactrl(event)">
     </td>

</tr>

<tr bgcolor="#F0F0F0" height="30">
      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspNationality <span class="alert"><font color=red>*</font></span></td>
      <td class="tablecontent1">
		<input type=text name="nation" id="txtnationality" placeholder="Enter Your Nationality" size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));'onkeydown="return alphactrl(event)">
      </td>

</tr>

<tr bgcolor="#F0F0F0" height="30">
      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspReligion <font color=red> *</font></td>
      <td class="tablecontent2">
			<input type="radio" name="religion" id="religion" value="Islam"> Islam
			<input type="radio" name="religion" id="religion" value="Hindu"> Hinduism
			<input type="radio" name="religion" id="religion" value="Buddhist"> Buddhist
			<input type="radio" name="religion" id="religion" value="Christian"> Christian
			<input type="radio" name="religion" id="religion" value="Others"> Others
	  </td>

</tr> 

<tr>
      <td height="20" colspan="5" align="left"  bgcolor="#FFFFFF" class="tableheader"><strong><br><center>&nbsp;&nbsp;&nbsp;&nbspContact Details</center></strong><br></td>
</tr>

<tr bgcolor="#F0F0F0">
      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Address<span class="alert"><font color=red>*</font></span> </td>
      <td class="tablecontent2">
		<TEXTAREA Name="address" ROWS=4 COLS=25 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphacharintspecial(event,number4) && alphactrl(event));" onkeydown="return alphactrl(event)" >
		</TEXTAREA>
     </td>
</tr>

<tr bgcolor="#F0F0F0" height="30">
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Division<span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">

		 <select size=1 name="division" id=txtdvsn class=listMenu>
			<option value=''>Select Division</option>
			<option value='Dhaka'>Dhaka</option>
			<option value='Chittagong'>Chittagong</option>
			<option value='Khulna'>Khulna</option>
			<option value='Rajshahi'>Rajshahi</option>
			<option value='Sylhet'>Sylhet</option>
			<option value='Mymensingh'>Mymensingh</option>
			<option value='Rangpur'>Rangpur</option>
			<option value='Barisal'>Barisal</option>
		 </select>
</tr>
<tr bgcolor="#F0F0F0" height="30">
	  <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Pin Code<span class="alert"><font color=red>*</font></span></td>
	  <td>
			<input type=text name="pincode" placeholder="PIN" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"  id=txtpin  maxlength=6 size=6 name=pincode />
	  </td>
</tr> 
<tr bgcolor="#F0F0F0" height="30">
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Email address<span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
			<input type=text name="email" id=txtemail placeholder="Enter Valid e-mail" size=31  maxlength=45 onChange="return ValidateForm007();" onkeypress="return emailctrl(event);" onkeydown="return emailctrl(event);"> 
		</td>

</tr>


<tr bgcolor="#F0F0F0" height="30">
      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspMobile Number <font color=red>*</font></td>
      <td class="tablecontent2">
		<input name="mobile" class="textbox2" id="txtmobile" placeholder="Enter Valid Mobile Number" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" size="25"  maxlength="11" />
	 </td> 
</tr>



</table>


<input type="hidden" name="modtype" id="modtype" value="1"/>
</center>
<br><br>
<div class="button_hisab"><center>
	<input type="submit" value="Submit" name="submit" />  
</center></div>



<?php
include ("config.php");

$query = 'CREATE TABLE pdetails( '.

         'regId VARCHAR(30) NOT NULL, '.
         'fullname VARCHAR(30) NOT NULL, '.
         'bday VARCHAR(30) NOT NULL, '.
         'bmonth VARCHAR(30) NOT NULL, '.
         'byear VARCHAR(30) NOT NULL, '.
         'age VARCHAR(3) NOT NULL, '.
		 'Mstatus VARCHAR (10)  NOT NULL, '.
		 'gender VARCHAR(10) NOT NULL, '.
		 'fname VARCHAR(30)NOT NULL,'.
         'mname VARCHAR(30) NOT NULL, '.
         'nation VARCHAR(30) NOT NULL, '.
		 'religion VARCHAR(15)NOT NULL,'.
		 'address VARCHAR(200) NOT NULL,'.
		 'division VARCHAR(50) NOT NULL,'.
		 'pincode INT(50) NOT NULL,'.
		 'email VARCHAR(20) NOT NULL,'.
		 'mobile INT(12) NOT NULL)';
            
$result = mysql_query($query);

if(isset($_POST['submit']))
{  
	date_default_timezone_set('Asia/Dhaka');
	$regId = $_POST['regId'];
	$fullname = $_POST['fullname'];
	$bday = $_POST['bday'];
	$bmonth = $_POST['bmonth'];
	$byear = $_POST['byear'];
    
	$Mstatus = $_POST['Mstatus'];
	$gender= $_POST['gender'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$nation = $_POST['nation'];
	$religion  = $_POST['religion'];
	$address  = $_POST['address'];
    $division  = $_POST['division'];
	$pincode  = $_POST['pincode'];
	$email = $_POST['email'];
	$mobile  = $_POST['mobile'];
	
	$dob = $bday.'-'.$bmonth.'-'.$byear;
	$birthdate = new DateTime($dob);
	$today   = new DateTime('today');
	$cur_age = $birthdate->diff($today)->y;
	$age = $cur_age;
	
  if ( $regId =="" || $fullname =="" || $bday=="" || $bmonth=="" || $byear==""  || $Mstatus ==""  || $gender ==""  || $fname ==""  ||
  $mname =="" || $nation=="" || $religion ==""  ||$address ==""  || $division ==""  || $pincode ==""  ||  $email ==""  ||$mobile ==""  )
  
  { 
  echo"<center>";
  echo"<font color=red>";
  echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
  }
  else
  {
		if($age < 20)
		{
			echo "<center><br><b><font color=red>You are not eligible to apply as you are below 20 years.Better luck after a few Years.</font></b><br>";
			
		}
		
		else
		{
			$regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
			if(!preg_match($regexp, $email))
			{
				echo "<br/>";
				echo "<center>Email address entered is not valid.";
				echo "</br>";
				echo "<center>Please enter a correct email address";
			}
			else
			{
				$_SESSION['usr_reg_id'] = $regId; 
				mysql_query("insert into pdetails
				(regId, fullname,bday,bmonth,byear,age,Mstatus,gender,fname,mname,nation,religion,address,division,pincode,email,mobile) 
				values
				('$regId','$fullname','$bday', '$bmonth', '$byear', '$age','$Mstatus','$gender','$fname','$mname','$nation','$religion','$address','$division','$pincode','$email','$mobile')",$conn)
				or die("Error ! refresh the page or relogin .");
				
				$url='edu.php';
				echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
				die();
				
				echo" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo"<center>";  
				echo "Click on next to proceed  ";
				echo "<br/>";
				echo "<br/>";
				echo "<a href='edu.php'><b>NEXT</b></a>";	
			}
		}
	}
	
}
?>



<br> <br><center>
<footer>
<h4 style="margin:0 auto; "><font color="black">
 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
</h4></font>
</footer>
</center>
</div>
</body>
</form>
</html>