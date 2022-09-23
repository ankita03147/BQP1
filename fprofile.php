<?php
include 'master.php';
include 'fheader.php';
?>
<html>
<head>
	<title>
        YOUR PROFILE
    </title>
	</head><body>
<br><br>
		<div class="text">
			<h1> WELCOME TO YOUR PROFILE </h1><br>
<br><br>
			<div class="profiletable">
<font color="black">
<table class="center">
<tr>
<td> Name: </td>
<td> <?php echo $_SESSION['firstname']. " " . $_SESSION['lastname']; ?> </td>
</tr>
<tr>
<td> Faculty Email ID: </td>
<td> <?php echo $_SESSION['email']; ?> </td>
</tr>
<tr>
<td> ID </td>
<td> <?php echo $_SESSION['id']; ?> </td>
</tr>
</table>
</font>
<br> <br>
<a href="createquiz.php" target="_blank"> <input type="button" name="addques" value="Create a quiz" button id="buttonone"> </a>&nbsp;&nbsp;&nbsp;
<a href="fselectlang.php" target="_blank"> <input type="button" name="delete" value="Delete a quiz" button id="buttonone"> </a>&nbsp;&nbsp;&nbsp;
<a href="fprevquiz.php" target="_blank"> <input type="button" name="previous" value="View previous" button id="buttonone"> </a>&nbsp;&nbsp;&nbsp;
</div>
<?php include "footer.php";?>
</body>
</html>