<?php
include 'sheader.php';

?>
<html>
<head>
	<title>
        YOUR PROFILE
    </title>
	</head>
<body>

<br><br>
		<div class="text">
			<h1> WELCOME TO YOUR PROFILE </h1><br>
<br><br><br><br>
<div class="profiletable">
<font color="black">
<table class="center">
<tr>
<td> Name: </td>
<td> <?php echo $_SESSION['firstname']. " " . $_SESSION['lastname']; ?> </td>
</tr>
<tr>
<td> Student Email ID: </td>
<td> <?php echo $_SESSION['email']; ?> </td>
</tr>
<tr>
<td> ID </td>
<td> <?php echo $_SESSION['id']; ?> </td>
</tr>
</table>
</font>
<br><br>
<a href="sprevquiz.php" target="_blank" > <input type="button" name="previous" value="View Previous Results" button id="buttonone"> </a> &nbsp;&nbsp;&nbsp;
<a href="selectlang.php" target="_blank"> <input type="button" name="previous" value="Get Ready to Attempt Quiz" button id="buttonone"> </a>
</div>
<?php include "footer.php";?>
</body>
</html>