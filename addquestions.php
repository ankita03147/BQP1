<?php

session_start();
include "master.php";
?>

 <html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Question</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <link href='ques.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='header_part d-flex justify-content-between m-4'>
                    <div class='headr'>
                        <p>Quiz Portal</p>
                    </div>
                    <div class='menubar'>
                        <ul class='d-flex'>
                            <a href='home.html'>
                                <li>Home</li>
                            </a>
                            <a href='aboutus.html'>
                                <li>About us</li>
                            </a>
                            <a href='contactus.html'>
                                <li>Contact Us</li>
                            </a>
                            <a href='flogin.html'>
                                <li>BACK</li>
                            </a>
                        </ul>
                    </div>
                </div>
               

            </div>
        </div>
    </div>

    <!-- Questions Adding Form -->
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='parent_div d-flex justify-content-center'>
                    <form method='POST' action='insert.php'>
                    <div class='child_div'>
                        <h4>Language</h4>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $quiz_name = $_POST['quiz_name'];
                            $_SESSION['quiz_name'] = $quiz_name;
                            $_SESSION['q_num'] = 1; 
                        }
                        $sql = "select * from quiz where q_name = '".$_SESSION['quiz_name']."' ";
                        $result = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        $_SESSION['quiz_id'] = $row['qid'];
                        echo "<select name='language'>
                            <option value='".$row['lang']."' selected>".$row['lang']."</option>

                        </select>";

                        echo "<div class='form_data mt-4'>
           
                               <ul>
                                   <li>
                                       <p>Question Number </p>
                                       <input type='text' id='count' value='".$_SESSION['q_num']."' name='q_num' class='special' placeholder='Count' max='25' min='1' disabled>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Question text:</p>
                                       <input class='inputs' type='text' name='q_text'>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Choice 1:</p>
                                       <input class='inputs' type='text' name='choice1'>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Choice 2:</p>
                                       <input class='inputs' type='text' name='choice2'>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Choice 3:</p>
                                       <input class='inputs' type='text' name='choice3'>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Choice 4:</p>
                                       <input class='inputs' type='text' name='choice4'>
                                   </li>
                                   <br>
                                   <li>
                                       <p>Select Answer</p>
                                       <input type='number' class='special' name='corr_ans' value='1' placeholder='Answer' max='4' min='1'>
                                   </li>";
                                   
                                //    <button class='btn btn-primary' id='SubmitBtn' type='button' name='submit1'>Submit</button>


   
                                    if($_SESSION['q_num']==$row['noq'])
                                     {
                                    echo "<input class='btn btn-primary' id='SubmitBtn' type='submit' value='Submit' name='final' onclick='finalshow();'>";

                                     }
                                    else
                                    {
                                    echo "<input class='btn btn-primary' id='SubmitBtn' type='submit' value='Submit' name='submit1' onclick='show();'>";
                                    
                                    }
                                    

                                   

                               echo "</ul>
                        
                            </form>

                        </div>
                     
                      
                    </div>
                </div>
            </div>
        </div>
    </div>";
    ?>
<script type='text/javascript'>
function show(){

    window.alert("Your question is successfully uploaded"); 
  }
  function finalshow(){
    window.alert("Your all questions is successfully Uploaded")
  }
const SubmitBtn=document.getElementById('SubmitBtn');
SubmitBtn.addEventListener('click',()=>{
    const count=document.getElementById('count');
    if(count.value>=25){
        alert('Max questions are 25 allowed');
        count.value=25;
    }else{
        count.value++;
        SubmitBtn.type='submit';
    }
    
   
    
   
})

</script>

</body>
</html>


