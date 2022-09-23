<?php
session_start();
include "master.php";

if(isset($_POST['submit']))
{
	global $conn;
	if(empty($_POST["email"]) || empty($_POST["password"]))
		{ $msg = '<label style="color:red;"> Missing fields!</label>'; }
	else
	{
		$email= $_POST['email'];
		$password = $_POST['password'];

		
		$sql = "SELECT fid FROM faculty WHERE femail = '$email' and fpassword = '$password'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);

		if($count == 1)
		{
		$row = mysqli_fetch_assoc($result);
		$temp = $row["fid"];
		settype($temp, "integer");
		$_SESSION['id'] = $temp;
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM faculty WHERE fid='$id'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['firstname']= $row["ffirstname"];
		$_SESSION['lastname']= $row["flastname"];
		$_SESSION['email']= $row["femail"];
		header("location: fprofile.php");
		exit();
		}
		else
		{
		?>
		<script> alert("Your Login E-mail or Password is invalid"); </script>
		<?php
header("location: flogin.html");
		exit();
		}
	}
mysqli_close($conn);
}
?>
