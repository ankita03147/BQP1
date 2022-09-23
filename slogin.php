<?php
session_start();
include "master.php";
if(isset($_POST['submit']))
{
	global $conn;
	if(empty($_POST["email"]) || empty($_POST["password"]))
		{ $msg = '<label style="color:red;"> Missing fields!</label>';
	 }
	else
	{
		$email= $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT sid FROM student WHERE semail = '$email' and spassword = '$password'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);
        
		if($count == 1)
		{
		$row = mysqli_fetch_assoc($result);
		$temp = $row["sid"];
		settype($temp, "integer");
		$_SESSION['id'] = $temp;
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM student WHERE sid='$id'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['firstname']= $row["sfirstname"];
		$_SESSION['lastname']= $row["slastname"];
		$_SESSION['email']= $row["semail"];
		header("location: sprofile.php");
		exit();
		}
		else
		{
		?>
		<script> alert("Your Login E-mail or Password is invalid"); </script>
		<?php
header("location: slogin.html");
		exit();
		}
	}
}
?>
