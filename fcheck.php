<?php
session_start();
include "master.php";
include "checklogin.php";

$sql = "SELECT fid FROM faculty WHERE femail = '$email' and fpassword = '$password'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count != 1)
	{
	echo '<script type="text/javascript">  window.onload = function(){alert("You are not allowed to view these pages!");}</script>';
	header("location: login.html");
	exit();
	}
else
	{
	}
?>

