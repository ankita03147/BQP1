<?php
include 'sheader.php';

if(isset($_POST['submit']))
{
$lang=$_POST['language'];
}
?>
<html>
<head>
<title> SELECT YOUR QUIZ </title>

</head>
<body>
<br><br><br><br>
<div class="text">
                    <form action="instruction.php" method="POST" align="center">
               
                        <h2>Select Your Quiz:</h2>
                        <br><br><br>
                            <?php
                            echo "<select name='quiz_name'>";
                            $sql = "select * from quiz where lang='$lang' ";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            { echo "<option value='".$row['q_name']."'>".$row['q_name']."</option>";}
                            ?>
                        </select><br>
                                   <input class="btn btn-primary" id="buttonone" type='submit' value='Submit' name='submit'>
                                 
                    </form>

</div><br><br><br><br><br>
<?php include "footer.php";?>
</body>
</html>