<?php
include 'master.php';
include 'fheader.php';
ini_set('memory_limit', '1024M');
$id= $_SESSION['id'];
$sql2 = "SELECT qid FROM quiz WHERE quiz.fid='$id'";
$result2 = mysqli_query($conn,$sql2);
$list = array();
while($row = mysqli_fetch_assoc($result2)) {$list[ ] = $row['qid'];}
rsort($list);
$len = count($list);
?>

<html>
<head>
	<title>
        YOUR PREVIOUS QUIZZES
    </title>
	</head>
<body>
<br><br>
		<div class="text">
			<h2> Previous Quizzes </h2><br>
<div class="profiletable">
<font color="black">
<table class="center">
<tr> <td>  Quiz Name </td> <td> Language </td> <td> No. Of Questions </td></tr><br>
<?php 
for($x = 0; $x < $len; $x++)
{
$i= $list[$x];
settype($i, "integer");
$sql2 = "SELECT * FROM quiz WHERE qid='$i'";
$result2 = mysqli_query($conn,$sql2);
$row1=mysqli_fetch_array($result2);
echo "<tr> <td>  ".$row1['q_name']." </td><td> ".$row1['lang']." </td><td> ".$row1['noq']." </td></tr>";
}
?>
</table>
</font>
</div>
<br>
			
</body>
</html>
<?php include "footer.php";?>