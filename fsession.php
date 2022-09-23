<?php
include "master.php";
include "fchecklogin.php";

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
		include "master.php";
		$sql = "SELECT * FROM faculty WHERE fid='$id' ";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);

		if($count != 1)
	{
echo "<script>
alert('You're not authorised for this page!');
window.location.href='shome.php';
</script>";
	exit();
	}
else
	{

	}
}
?>