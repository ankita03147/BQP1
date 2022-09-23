<?php
include 'sheader.php';

if(isset($_POST['submit']))
{
    $quiz_name = $_POST['quiz_name'];
    $_SESSION['quiz_name'] = $quiz_name;
}
?>

<html>
<head>
</head>
<body>
<div class="text">
			<h2>INSTRUCTIONS </h2><br>
<br><br><br><br>
<div class="insttable">
<font color="black">
<table class="center">
<tr>
<td>                 # Click Start to start your quiz </td> </tr><tr>  <td> # 30 seconds will be given for each question. </td> </tr><tr>  <td>
               # There is no negative marking </td></tr><tr> <td>
                # Each question contains 2 marks </td></tr><tr> <td>
                # Total marks of quiz will be 60 marks. </td></tr><tr> <td>
	<form action="attemptquiz.php" method="post" align="right">
                <button type="submit" button id="buttonone" name="submit">START TEST</button>
	</form></td></tr>

</table>
</font>
</div>
</div>
<?php include "footer.php"; ?>
</body>
</html>