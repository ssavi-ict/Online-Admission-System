<?php 
	session_start(); 
	if(!$_SESSION['valid']){
		header('location: login.php');
	}
?>
<html>
<head>
<title>Payment</title>


<link href="hover-min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" charset="UTF-8">

<style>
	.rsc_css li a:hover{
		background: lime;
	}
	.rsc_css li a{
		text-decoration:none;
		
	}
	.rsc_css li {
		padding-left:20px;
		height:22px;
		width: auto;
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

<div class="left_side_content" style="border:0px solid black; border-style:dotted; width:60%; border-radius:15px; margin-left:95;">
	
	<?php
		if(isset($_POST['submit']))
		{	
				echo "<br/>";		echo "<br/>";		//echo "<br/>";
				echo "<table style = 'border-style: dotted; border-radius:5px; color:white; margin: 0 auto; background: #5F9EA0;'>";
				echo "<tr style = 'height: 50px; padding: 20px; '><td><font size=+2 family: verdana>";
				echo "Congrats!! Payment Completed!! Collect Confirmation from Institution";
				echo "</font></td></tr>";
				echo "</table>";
		}
	?>

	
	<h2 style="margin:0 auto; width:90%; text-align:center;">Complete Payment</h2>
	<br><br>
	<form method="post">
        <fieldset>
            <ul>
                <li>
                    <label for=name>Name</label>
                    <input id=name name=name type=text placeholder="First and last name" required autofocus />
                </li>
                <li>
                    <label for=email>Email</label>
                    <input id=email name=email type=email placeholder="example@domain.com" required />
                </li>
                <li>
                    <label for=phone>Phone</label>
                    <input id=phone name=phone type=tel placeholder="Eg. +14445556666" required />
                </li>
				<li>
                    <label for=phone>Registration ID</label>
                    <input id=payregid name=payregid type="password" placeholder="Eg. XXXXXXXXX" required />
                </li>
				
            </ul>
        </fieldset>
		<br><br>
        <fieldset>
            <legend>Card Details</legend>
            <ul>
             <li>
                <fieldset>
                    <legend>Card Type</legend>
                    <ol>
                        <li>
                            <input id=visa name=cardtype type=radio />
                            <label for=visa>VISA</label>
                        </li>
                        <li>
                            <input id=paypal name=cardtype type=radio />
                            <label for=paypal>PayPal</label>
                        </li>
                        <li>
                            <input id=mastercard name=cardtype type=radio />
                            <label for=mastercard>Mastercard</label>
                        </li>
						<li>
                            <input id=bkash name=cardtype type=radio />
                            <label for=bkash>bKash</label>
                        </li>
						<li>
                            <input id=rocket name=cardtype type=radio />
                            <label for=rocket>Rocket</label>
                        </li>
						<li>
                            <input id=wu name=cardtype type=radio />
                            <label for=wu>Western Union</label>
                        </li>
						
                    </ol>
                </fieldset>
                </li>
                <li>
                    <label for=cardnumber>Card Number</label>
                    <input id=cardnumber name=cardnumber type=number required />
                </li>
                <li>
                    <label for=secure>Security Code</label>
                    <input id=secure name=secure type=number required />
                </li>
                <li>
                    <label for=namecard>Name on Card</label>
                    <input id=namecard name=namecard type=text placeholder="Exact namne as on the card" required />
                </li>
            </ul>
        </fieldset>
		<br><br>
        <div class="button_hisab">
            <center><input type="submit" name="submit" value="Pay!!"></center>
        </div>
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
