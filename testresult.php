<?php
include 'ssession.php';
$qid=$_SESSION['quiz_id'];
$id=2;
settype($qid, "integer");
$sql2="SELECT noq FROM quiz WHERE qid='$qid'";
$result2 = mysqli_query($conn,$sql2);
		$row = mysqli_fetch_assoc($result2);
$len=$row['noq'];
echo $len;
echo "<Br>";
settype($len, "integer");
$sql3 = "SELECT entryno FROM studentans WHERE studentans.sid='$id'";
$result3 = mysqli_query($conn,$sql3);
$list = array();
while($row = mysqli_fetch_assoc($result3)) {$list[ ] = $row['entryno'];}
$len2 = count($list);
echo $len2 ; echo "<br>";
echo implode( "<br>", $list);

echo "<br>";
?>
<html>
<head>
	</head>
<body>
	<br><br>
		
<table class="center">
<tr>
<td> SCORE: </td>
	<td> <?php echo "You got ".$_SESSION['marks']." marks"; ?> </td>
</tr>
</table>
<br><br>

<table class="center">
<tr> <td>  Question <<br> Options</td> <td> Your Answer </td> <td> Correct Answer  </td></tr><br>
<?php 


for($x =0 ; $x < $len; $x++)
{
$i= $list[$x];
settype($i, "integer");
echo $i;
$sql2= "SELECT * FROM studentans s INNER JOIN questions q ON s.quesid = q.quesid WHERE entryno ='$i' ";
$result1 = mysqli_query($conn,$sql2);
$row1=mysqli_fetch_array($result2);
echo gettype($row1);
echo "<br>";
echo implode( "<br>", $row1);
echo "<tr> <td>  ".$row1['questext']." </td><br><br> ".$row1['OptionA']."<br> ".$row1['OptionB']." <br> ".$row1['OptionC']." <br> ".$row1['OptionD']." </td><td> ".$row1['selectedans']." </td><td> ".$row1['correctans']." </td> </tr>";
}
?></table>


<?php include "footer.php";?>
</body>
</html>