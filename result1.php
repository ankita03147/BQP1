<?php
include 'sheader.php';
?>
<html>
<head>
	</head>
<body>
	<br><br>
		<div class="text">
			<h1> RESULTS </h1><br>
<br><br><br><br>
<div class="insttable">
<font color="black">
<table class="center">
<tr>
<td> SCORE: </td>
	<td> <?php echo "You got ".$_SESSION['marks']." marks"; ?> </td>
</tr>
</table>

</font>
<br>
</div>
<?php include "footer.php";?>
</body>
</html>