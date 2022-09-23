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