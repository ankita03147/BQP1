<?php
include 'fheader.php';
?>
<html>
<head>
<title> SELECT YOUR LANGUAGE </title>
</head>
<body>
<br><br><br><br>
<div class="text">
              
<form action="quizshow.php" method="POST">
                        <h2>Select Your Language:</h2>

<select name="language">
	          <!-option value="" disabled="disabled" selected><i>select the language</i></option->
                            <br><br><option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JAVASCRIPT">JavaScript</option>
                            <option value="PHP">PHP</option>
	</select><br>
                                   <input class="btn btn-primary" id="buttonone" type='submit' value='Submit' name='submit'>
                                 
                    </form>

</div><br><br><br><br><br>
<?php include "footer.php";?>
</body>
</html>