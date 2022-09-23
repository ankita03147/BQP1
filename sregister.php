<?php
session_start();
include "master.php";
if(isset($_POST['submit']))
{
	global $conn;
	$firstname = $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$emailquery = " select * from student where semail='$email'";
	$query = mysqli_query($conn,$emailquery);
	$emailcount = mysqli_num_rows($query);
	if($emailcount>0)
	{
	?>
	<script>alert("account already exists"); </script>
	<?php
	}
	else
	{
		if($password === $cpassword)
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			?>
			<script> alert("Invalid Email ID"); </script>
			<?php
			}
			else
			{
			$insertquery ="INSERT INTO student(sid,sfirstname, slastname, semail, spassword) VALUES (NULL,'$firstname','$lastname','$email','$password')";
			$iquery = mysqli_query($conn, $insertquery);
			
			if($iquery)
			{
			?>
			<script> alert("Registration successful"); </script>
			<?php
			header("location: sprofile.html");
			}
			else
			{
			?>
			<script> alert("Registration not successful"); </script>
			<?php
			}
			}		
		}
		else
		{
		?>
			<script> alert("Password are not matching"); </script>
			<?php			
		}
	}
}
?>

<html>
<head>
<title>
        SIGN UP
</title>
	<link rel="icon" href="icon10.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Gugi' rel='stylesheet'>
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			<div class="leftmenu">
				<h4> LETUSQUIZ </h4>
			</div>
			<div class="rightmenu">
				<ul>
					<li id="firstlist"><a href="home.html"> HOME </a></li>
					<li><a href="login.html"> LOGIN </a> </li>
					<li><a href="signup.html">SIGN UP </a></li>
					<li><a href="aboutus.html"> ABOUT US </a></li>
					<li><a href="contactus.html"> CONTACT US </a></li>
				</ul>
			</div>

		</div>

		<div class="text">
			<h1> SIGN UP FOR YOUR NEW ACCOUNT </h1> <br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  align="center">
	First Name: &nbsp; <input type="text" name="firstname" /> &nbsp;&nbsp;&nbsp;&nbsp;	Last Name: <input type="text" name="lastname" />
	<br> <br>
	Email ID: &nbsp; &nbsp;  <input type="text" name="email">
	<br><br>
	Password: &nbsp; <input type="password" name="password">
	<br><br>
	Enter your password again: &nbsp; <input type="password" name="cpassword">
	<br><br>
	<input type="submit" name="submit" value="Submit" button id="buttonone"/>
	<br><br>
<a href="login.html" target="_self">
	<u>Already have an account? Login here!</u>
</a>
<br>
</form>
			<br><br><br><br><br><br>
			<h4> All Rights Reserved &copy; 2021</h4>
			<br><br>
		</div>	
	</div>

</body>
</html>