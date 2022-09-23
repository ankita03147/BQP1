<?php
include "master.php";
include "schecklogin.php";

if($_SESSION['id']=='')
	{
	echo "<script> alert('Please login first!');
	window.location.href='login.html';
	</script>";
	exit();
	}
else
	{
$id = $_SESSION['id'];
$sql = "SELECT * FROM student WHERE sid='$id'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);

		if($count != 1)
	{
echo "<script>
alert('You're not authorised for this page!');
window.location.href='fhome.php';
</script>";
	exit();
	}
else
	{

	}
}
?>