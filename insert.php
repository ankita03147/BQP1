<?php
include "fsession.php";

if(isset($_POST['submit']))
{
	global $conn, $id;
	$quiz_name = $_POST['quiz_name'];
	$q_desc = $_POST['quiz_desc'];
	$language = $_POST['language'];
	$q_num = $_POST['q_num'];

	$sql = "INSERT INTO quiz(qid, q_name, q_desc, lang, noq, fid) VALUES (NULL, '$quiz_name', '$q_desc', '$language', '$q_num', '$id')";
    
	$result = mysqli_query($conn,$sql);
	
	
	if($result)
	{
        		header("location:addquestions.php");
	}
	else
	{
		echo "Error 404 not found";
	}
}
$sql="SELECT * FROM quiz WHERE fid = '$id' order by qid desc limit 1";
$result=mysqli_query($conn, $sql);

// $count = mysqli_num_rows($result);

$qdetails = mysqli_fetch_assoc($result);
$temp = $qdetails["qid"];
settype($temp, "integer");
// $_SESSION['qid'] = $temp;

$quiz_id = $temp;
if(isset($_POST['submit1']))
        {
            $quiz_id = $_SESSION['quiz_id'];
           $q_text = $_POST['q_text'];
            $choice1 = $_POST['choice1'];
            $choice2 = $_POST['choice2'];
            $choice3 = $_POST['choice3'];
            $choice4 = $_POST['choice4'];
            $corr_ans = $_POST['corr_ans'];
        

            $sql = "INSERT INTO questions(quesid,questext,OptionA,OptionB,OptionC,OptionD,correctans,qid) VALUES (NULL,'$q_text','$choice1','$choice2','$choice3','$choice4','$corr_ans','$quiz_id')";
            echo $sql;
            
            
            $result=mysqli_query($conn,$sql);
            
        
            if($result)
            {
                $_SESSION['q_num']=$_SESSION['q_num']+'1';
                header("Location:addquestions.php");
            }
            else
            {
                   echo "Error 404 not found";
            }
        }

        if(isset($_POST['final']))
        {

            $quiz_id = $_SESSION['quiz_id'];
            $q_text = $_POST['q_text'];
            $choice1 = $_POST['choice1'];
            $choice2 = $_POST['choice2'];
            $choice3 = $_POST['choice3'];
            $choice4 = $_POST['choice4'];
            $corr_ans = $_POST['corr_ans'];
        

            $sql = "INSERT INTO questions(quesid,questext,OptionA,OptionB,OptionC,OptionD,correctans,qid) VALUES (NULL,'$q_text','$choice1','$choice2','$choice3','$choice4','$corr_ans','$quiz_id')";
            echo $sql;
            
            
            $result=mysqli_query($conn,$sql);
            
        
            if($result)
            {
                session_unset();
                header("Location:quiz_show.php");
            }
            else
            {
                   echo "Error 404 not found";
            }
        }
     
    
?>

	