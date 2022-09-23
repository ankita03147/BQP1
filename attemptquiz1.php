<?php
include 'ssession.php';

?>
<html>
<head>

<style>
body{
    background-image: url("bg9.jpg");
    background-size: 100% 100%;
	background-attachment: fixed;
	background-repeat: no-repeat;
}
</style>
</head>

<body>
<div class="center">
 <div class="timer">
            <div class="text"><p id="demo" style="text-align:center">Timer</p><br><br>
        </div></div>
        <p class="ques" id="ques">
        <?php
   if(isset($_POST['submit']))
   {
        $_SESSION['ques_num'] = 1;
   }
include "master.php";
$sql1 = "Select * from quiz where q_name = '".$_SESSION['quiz_name']."' ";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);

$quiz_id = $row1['qid'];

// settype($quiz_id, "integer");
$_SESSION['quiz_id']=$quiz_id;
$sql = "Select * from questions where qid = '$quiz_id' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$ques_num = $row['quesid'];
if(isset($_POST['submit']))
{
    $_SESSION['ques_id']=$ques_num;
    $_SESSION['marks'] = 0;
}

$sql2 = "Select * from questions where quesid = '".$_SESSION['ques_id']."' ";
$result2 = mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);
$_SESSION['correct'] = $row2['correctans'];

            echo " Q.";
            echo $_SESSION['ques_num'];
            echo ") ";
            echo $row2['questext'];
            
            
            echo "</p>

            <form action='attempt.php' method='POST'>
                <input type='radio' name='answer' value='1'></input>
                <label for='ans1' id='op1'>".$row2['OptionA']."</label><br>
                <input type='radio' name='answer' value='2'></input>
                <label for='ans1' id='op2'>".$row2['OptionB']."</label><br>
                <input type='radio' name='answer' value='3'></input>
                <label for='ans1' id='op3'>".$row2['OptionC']."</label><br>
                <input type='radio' name='answer' value='4'></input>
                <label for='ans1' id='op4'>".$row2['OptionD']."</label><br>";
                if($_SESSION['ques_num'] == $row1['noq'])
                {echo "
                <button  id='next' type='submit' name='submit3'>Submit</button>";}
                else{
                    echo "
                <button  id='next' type='submit' name='submit4'>Next</button>";
                }
                ?>
                </form>

    <script type="text/javascript">


    const next=document.getElementById('next');
    const demo=document.getElementById('demo');
    const queslist=document.getElementById('queslist');
    const op1=document.getElementById('op1');
    const op2=document.getElementById('op2');
    const op3=document.getElementById('op3');
    const op4=document.getElementById('op4');
    let start=30;
    let questionCount=0;
    const stop = setInterval(() => {
        demo.innerHTML = `00:${start}`; 
        start--;
        console.log(questionCount); 
        
        if (start == 0) {
            start = 30;
            document.getElementById("next").click();
            loadQues();
            questionCount++; 
            console.log(questionCount);


        }

        
   },1000);
   const loadQues = () => {
    if (questionCount >= quizDb.length) { 
        
            clearTimeout(stop);

            demo.innerHTML = "TIME UP";
             next.innerHTML ="Submit";
    } 
    const questionList = quizDb[questionCount];
    ques.innerHTML = questionList.question;
    op1.innerHTML = questionList.a;
    op2.innerHTML = questionList.b;
    op3.innerHTML = questionList.c;
    op4.innerHTML = questionList.d;
 

}

next.addEventListener('click',()=>{
        start=30;
        if(questionCount<quizDb.length){
            loadQues();
            questionCount++;
            console.log(questionCount)
        }else{
            document.getElementById("final").click();
            clearTimeout(stop);
            demo.innerHTML="TIME UP";
            next.innerHTML="Submit";

        }
        
    });

    </script><br><br>
</div></div></div>
</body>
</html>