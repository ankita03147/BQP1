<?php
include 'ssession.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="icon" href="Images/pic2.jfif">
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Reggae+One&family=RocknRoll+One&display=swap');
    *{
        margin: 0;padding: 0;
        box-sizing: border-box;
        overflow: hidden;
        font-family: 'Reggae One', cursive;;
    }
    .cointainer{
        width: 100vw;
        height:100vh;
        position: relative;
        background-image: url("Images/pic1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 30rem;
    }
    .quizbox{
        width: auto;
        height: 600px;

        margin-top: 3rem;
        

    }
    .ques{
        color: white;
        font-size: 2rem;
        
    }
    .options{
        color: white;
        width: auto;
        height:500px;
        font-size: 1.5rem;
        padding-top: 3rem;

 
    }
    input{
        margin: 2.5rem;
        font-size: 2.5rem;
        color:#fff;
        cursor: pointer;
    }
    .quizbox button{
    position: fixed;
    bottom: 70;
    width: 15rem;
    height:3rem;
    font-size: 1.5rem;
    border-radius: 2rem;
    right: 12rem;
    outline: none;
    }
 
 .timer{
     position: absolute;
     top: 100;
     width: 300px;
     height: 600px;
     /* background-color: red; */
     left: 1rem;
     text-align: left;
     font-size: 3.5rem;
     color: white;
 }
 #next:hover{
     background-color: aquamarine;
     cursor: pointer;
 }

</style>
<body>

    <div class="cointainer">
        <div class="timer">
            <p id="demo">Timer</p>
        </div>
        
       <div class="quizbox">
        <p class="ques" id="ques">
        <?php
   if(isset($_POST['submit']))
   {
        $_SESSION['ques_num'] = 1;
   }
include "Master.php";
$sql1 = "Select * from quiz where q_name = '".$_SESSION['quiz_name']."' ";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
$quiz_id = $row1['qid'];
$_SESSION['quiz_id'] = $quiz_id;

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


            echo "Q.";
            echo $_SESSION['ques_num'];
            echo ") ";
            echo $row2['questext'];
            
            
            echo "</p>
            <div class='options'>
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
                <button id='next' type='submit' name='submit3'>Submit</button>";}
                else{
                    echo "
                <button id='next' type='submit' name='submit4'>Next</button>";
                }
                ?>
                </form>
            </div>
       </div>

       


    </div>
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

    </script>
    
</body>
</html>