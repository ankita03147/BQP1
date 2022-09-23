<?php
include "master.php";
include "ssession.php"; 
$id = $_SESSION['id'];
  if(isset($_POST['submit3']))
        {

            $ques_id = $_SESSION['ques_id'];
            $ans = $_POST['answer'];

            $sql = "INSERT INTO studentans(sid,quesid,selectedans) VALUES ('$id','$ques_id','$ans')";
            $result = mysqli_query($conn,$sql);
            if($ans == $_SESSION['correct'])
            {
                $_SESSION['marks']++;
            }
            if($result)
            {
                $quiz_id = $_SESSION['quiz_id'];
                $marks = $_SESSION['marks'];
                //2 is direct entry
                $sql2 = "INSERT INTO results(entryno,sid,qid,score) VALUES (NULL, '$id', '$quiz_id','$marks')";
                $result2 = mysqli_query($conn, $sql2);
                if($result2)
                {
                    header("Location:result1.php");
                }   
            }
            else
            {

            }

        }
        if(isset($_POST['submit4']))
        {
            $_SESSION['ques_num']=$_SESSION['ques_num'] + '1';
            
            $ques_id = $_SESSION['ques_id'];
            $ans = $_POST['answer'];
            
            if($ans == $_SESSION['correct'])
            {
                $_SESSION['marks']++;
            }
            if($ans == NULL)
            {
                $sql = "INSERT INTO studentans(sid,quesid,selectedans) VALUES ('$id','$ques_id',NULL)";
                $result = mysqli_query($conn,$sql);
            
                if($result)
                {
                    $_SESSION['ques_id']++;
                    header("Location:attemptquiz.php");
                }
                else
                {
                    echo "Some error found";
                }
            }
            else
            {

            $sql = "INSERT INTO studentans(sid,quesid,selectedans) VALUES ('$id','$ques_id','$ans')";
            $result = mysqli_query($conn,$sql);
            echo $sql;
            if($result)
            {
            $_SESSION['ques_id']++;
           header("Location:attemptquiz.php");
            }
            else
            {

            }
        }
}
?>