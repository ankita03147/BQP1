<?php
include "master.php";
include "fsession.php";


if(isset($_POST['submit']))
{

    $quiz_name = $_POST['quiz_name'];
    $_SESSION['quiz_name'] = $quiz_name;
$sql1 = "Select * from quiz where q_name = '".$_SESSION['quiz_name']."' ";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$quiz_id = $row1['qid'];
settype($quiz_id, "integer");

$sql2="DELETE * FROM quiz WHERE qid = '$quiz_id'";
$result2 = mysqli_query($conn,$sql1);
$count=mysql_affected_rows($$result2);
if ($count > 0) 
{"<script>
alert('Quiz deleted!');
window.location.href='fprevquiz.php';
</script>";
	exit();
}
}
?>