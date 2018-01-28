<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>

<html>
		<head>
			<title>Submit Educational Details</title>
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
		
		<form name="form3" method="post" >
		<body bgcolor="#F0F4F1" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">
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
		<center>
			<table border=1 cellspacing=1 width=850px id=AutoNumber3 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>
			<!-- <tr>
					<td height="25" colspan="7" bgcolor="#FFFFFF" class="tableheader"><br><b><center>Authentication Field</center><br></b></td>
			</tr>

			<tr bgcolor="#F0F0F0" height="30px">
					<td class="tablecontent2" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp&nbspRegistration ID <font color=#800080 >[As Given When Registering]</td>
					<td class="tablecontent2" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp&nbsp
					<input type=text placeholder = "Enter Your Reg. ID" name="regId" size=40 maxlength=40 id=regID onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">
					</td>
			</tr>  -->

			<tr>
				<td height = "50px" colspan="7" align="left"  bgcolor="#FFFFFF" class="tableheader"><center><strong>Educational Qualification Details</strong></center></td>
			<br><br>
            </tr>

            <tr height="30px">
					<td align="center"  bgcolor="#F0F0F0" class="tablecontent2" title="Criteria"><strong><center>Criteria</center></strong></td>
					<td bgcolor="#F0F0F0" class="tablecontent2" align="center" title="Stream"><strong><center>Stream</center></strong></td>
					<td bgcolor="#F0F0F0" class="tablecontent2" align="center" title="Board"><strong><center>Board</center></strong></td>
                    <td align="center"  bgcolor="#F0F0F0" class="tablecontent2" title="Passing Year"><strong><center>Passing Year</center></strong></td>
					<td align="center"  bgcolor="#F0F0F0" class="tablecontent2" title="Roll Number"><strong><center>Roll No</center></strong></td>               
					<td align="center"  bgcolor="#F0F0F0" class="tablecontent2" title="Registration Number"><strong><center>Reg. No</center></strong></td>
					<td align="center"  bgcolor="#F0F0F0" class="tablecontent2" title="GPA"><strong><center>GPA</center></strong></td>
			</tr>
		<br><br>
		<tr align=center height="30px">

			<td class="tablecontent1">SSC<span class="alert"><font color=red>*</span></font></td>
			<td class="tablecontent1">
				<center>
				<select size=1 name="ssc_strm" id=ssc_strm class=listMenu>
				<option value="">Select</option>
				<option value='Science'>Science</option>
				<option value='Commerce'>Commerce</option>
				<option value='Arts'>Arts</option>
				</select>
				</center>
			</td>
			<td class="tablecontent1">
				<center>
				<select size=1 name="ssc_board" id=ssc_board class=listMenu>
				<option value="">Select</option>
				<option value='Dhaka'>Dhaka</option>
				<option value='Chittagong'>Chittagong</option>
				<option value='Khulna'>Khulna</option>
				<option value='Rajshahi'>Rajshahi</option>
				<option value='Rangpur'>Rangpur</option>
				<option value='Sylhet'>Sylhet</option>
				<option value='Comilla'>Comilla</option>
				<option value='Dinajpur'>Dinajpur</option>
				</select>
				</center>
			</td>
			<td class="tablecontent1">
				<center>
				<select size=1 name="ssc_pasyr" id=ssc_pasyr class=listMenu>
				<option value="">Select</option>
				<script type = "text/javaScript">
					var now = new Date();
					var Y = now.getFullYear() - 3;
					for(var i=1; i<=2; i++){
						document.writeln("<option value = ");
						document.writeln(Y);
						document.writeln(">");
						document.writeln(Y);
						document.writeln("</option>");
						Y--;
					}
				</script>
				</select>
				</center>
			</td>
			
			<td class=tablecontent1><center>
			<input type=text name="ssc_roll" id=ssc_roll size=15 maxlength=14 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
			
			<td class=tablecontent1><center>
			<input type=text name="ssc_reg" id=ssc_reg size=15 maxlength=14  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"> </center></td>

			<td class=tablecontent1><center>
			<input class=textbox2_2 size=10 maxlength = 7  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" name="ssc_rslt" id=ssc_rslt /> </center></td>
		</tr>
		<tr align=center height="30px">
			<td align="center" class="tablecontent2">HSC<span class="alert"><font color=red>*</span></font></td>
			<td class="tablecontent2">
				<center>
				<select class=listMenu name="hsc_strm" id=hsc_strm size=1 >
				<option value="">Select</option>
				<option value='Science'>Science</option>
				<option value='Commerce'>Commerce</option>
				<option value='Arts'>Arts</option>
				</select>
				</center>  
			</td>
			
			<td class="tablecontent2">
				<center>
				<select size=1 name="hsc_board" id=hsc_board class=listMenu>
				<option value="">Select</option>
				<option value='Dhaka'>Dhaka</option>
				<option value='Chittagong'>Chittagong</option>
				<option value='Khulna'>Khulna</option>
				<option value='Rajshahi'>Rajshahi</option>
				<option value='Rangpur'>Rangpur</option>
				<option value='Sylhet'>Sylhet</option>
				<option value='Comilla'>Comilla</option>
				<option value='Dinajpur'>Dinajpur</option>
				</select>
				</center>
			</td>
			<td class="tablecontent2">
				<center>
				<select size=1 name="hsc_pasyr" id=hsc_pasyr class=listMenu>
				<option value="">Select</option>
				<script type = "text/javaScript">
					var now = new Date();
					var Y = now.getFullYear() - 1;
					for(var i=1; i<=2; i++){
						document.writeln("<option value = ");
						document.writeln(Y);
						document.writeln(">");
						document.writeln(Y);
						document.writeln("</option>");
						Y--;
					}
				</script>
				</select>
				</center>
			</td>
			

			<!-- <td class=tablecontent2><center>
			<input type=text name="pgradstream" id=selstream2 size=20 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
			-->
			<td class=tablecontent2><center>
			<input type=text name="hsc_roll"  id=hsc_roll size=15 maxlength=14 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>
			
			<td class=tablecontent2><center>
			<input type=text name="hsc_reg" id=hsc_reg size=15 maxlength=14 onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"></center></td>

			<td class=tablecontent2><center>
			<input class=textbox2_2 onkeypress="return number(event);" size=10 maxlength = 7 name="hsc_rslt" id=hsc_rslt /> 

			</center>
			</td>

		</tr>
		</center>
		</table>
		<br><br>
	<tr>
		<center>
		<td class="tablecontent2">Choose Desired Subject<font color=red> *</font></td>
		<td class="tablecontent2">
			<select width=30 size=1 name="course_applied"   class="listMenu">
			<option selected value=''>Select</option>
			<option value='ICT'>ICT( BSc Engineering )</option>
			<option value='CSE'>CSE( BSc Engineering )</option>
			<option value='Math'>Mathematics( BSc Hons. )</option>
			<option value='Physics'>Physics( BSc Hons. )</option>
			<option value='Chemistry'>Chemistry( BSc Hons. )</option>
			<option value='Pharmacy'>Pharmacy( BSc Hons. )</option>
			<option value='Statistics'>Statistics( BSc Hons. )</option>
			</select>
		</td>
		</center>
    </tr>
	
	<br><br>
	<div class="button_hisab"><center>
		<input type="submit" value="Submit" name="submit" />  
	</center></div>
	
	
	<?php
	include ("config.php");

	$query = 'CREATE TABLE edudetails( '.
	      
         'regId VARCHAR(30) ,'.
         'ssc_strm VARCHAR(30) ,'.
         'ssc_board VARCHAR(30) , '.
         'ssc_pasyr INT(5) , '.
		 'ssc_roll VARCHAR(15) , '.
		 'ssc_reg VARCHAR(15) , '.
         'ssc_rslt INT(6),'.
		 'hsc_strm VARCHAR(30) ,'.
         'hsc_board VARCHAR(30) , '.
         'hsc_pasyr INT(5) , '.
		 'hsc_roll VARCHAR(15) , '.
		 'hsc_reg VARCHAR(15) , '.
         'hsc_rslt INT(6),'.
		 'course_applied VARCHAR(20) )';
            
	$result = mysql_query($query);

    

	if(isset($_POST['submit']))

	{  
	$regId = $_SESSION['usr_reg_id'];
	$ssc_strm = $_POST['ssc_strm'];
	$ssc_board = $_POST['ssc_board'];
	$ssc_pasyr = $_POST['ssc_pasyr'];
	$ssc_roll = $_POST['ssc_roll'];
	$ssc_reg = $_POST['ssc_reg'];
	$ssc_rslt = $_POST['ssc_rslt'];
	
	$hsc_strm = $_POST['hsc_strm'];
	$hsc_board = $_POST['hsc_board'];
	$hsc_pasyr = $_POST['hsc_pasyr'];
	$hsc_roll = $_POST['hsc_roll'];
	$hsc_reg = $_POST['hsc_reg'];
	$hsc_rslt = $_POST['hsc_rslt'];
	
    $course_applied = $_POST['course_applied'];
	
    if ( $regId == "" || $ssc_strm == "" || $ssc_board == ""  ||$ssc_roll == "" ||$ssc_reg==""  || $ssc_pasyr == ""  || $ssc_rslt =="" ||
        $hsc_strm == "" || $hsc_board == ""  ||$hsc_roll == "" ||$hsc_reg==""  || $hsc_pasyr == ""  || $hsc_rslt =="" || $course_applied == "")
		{ 
		echo"<center>";
		echo"<font color=red>";
		echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
	else
		{
		mysql_query("insert into edudetails(regId, ssc_strm,ssc_board,ssc_pasyr,ssc_roll,ssc_reg,ssc_rslt,hsc_strm,hsc_board,hsc_pasyr,hsc_roll,hsc_reg,hsc_rslt,course_applied) 
		values('$regId','$ssc_strm','$ssc_board','$ssc_pasyr','$ssc_roll','$ssc_reg','$ssc_rslt','$hsc_strm','$hsc_board','$hsc_pasyr','$hsc_roll','$hsc_reg','$hsc_rslt','$course_applied')",$conn)
		or die("Error ! refresh the page or relogin .");
		
		$url='up.php';
		echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
		die();
		
		echo "<br/><center>";
		echo " Education Details Submitted  ";
		echo "<br/><br>";
	    echo "<a href='up.php'><b>Click to Proceed </b></a><br><br></center>";
		}
	}
	?>
	<br>
    <footer>
	<center>
	<h4 style="margin:0 auto; "><font color="black">
	 CoU-ICT Batch 2012-13 &copy; <script type = "text/javaScript"> var now = new Date(); var Y = now.getFullYear(); document.writeln(Y); </script>  |  <a href ="http://www.cou.ac.bd" >www.cou.ac.bd</a>
	</h4></font>
	</footer> 
	</center>
	</div>
	</body>
	</form>
	</html>
