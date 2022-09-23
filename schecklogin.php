
<?php
include "master.php";
include "slogin.php";

if($_SESSION['id']=='')
	{
echo "<script>
alert('Please login first!');
window.location.href='login.html';
</script>";
	exit();
	}
else
	{

	}
?>


