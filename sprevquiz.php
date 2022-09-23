<?php
include 'master.php';
include "sheader.php";
ini_set('memory_limit', '1024M');
$id= $_SESSION['id'];
$sql2 = "SELECT entryno FROM results WHERE results.sid='$id'";
$result2 = mysqli_query($conn,$sql2);
$list = array();
while($row = mysqli_fetch_assoc($result2)) {$list[ ] = $row['entryno'];}
rsort($list);
$len = count($list);
?>
<html>
<head>
	<title>
        YOUR PREVIOUS QUIZZES
    </title>
	
<br><br>
		<div class="text">
			<h2> Previous Quiz Results </h2><br>
<div class="profiletable">
<font color="black">
<table class="center">
<tr> <td>  Quiz Name </td> <td> Language </td> <td> Score </td></tr><br>
<?php 
for($x = 0; $x < $len; $x++)
{
$i= $list[$x];
settype($i, "integer");
$sql2= "SELECT * FROM results r INNER JOIN quiz q ON r.qid = q.qid WHERE entryno ='$i' ";
$result2 = mysqli_query($conn,$sql2);
$row1=mysqli_fetch_array($result2);
echo "<tr> <td>  ".$row1['q_name']." </td> <td> ".$row1['lang']." </td><td> ".$row1['score']." </td></tr>";
}
?></table></font>
</body>
</html>

<?php include "footer.php";?>