<?php
include 'master.php';
include 'fheader.php';
?>?>
<html>
<head>
	<title>
        CREATE YOUR QUIZ
    </title>
<br><br>
<div class="text">
			<h2> CREATE YOUR QUIZ </h2>
<br><br><br>
<div class="profiletable">
<font color="black">
<table class="center">
<form action="insert.php" method="POST">
<tr>
<td>Enter Quiz Name:</td>
<td><input class="inputs" type="text" name="quiz_name"></td>
</tr>
<tr>
<td>Add Quiz Description:</td>
<td><textarea input class="inputs" type="text" rows="4" cols="30" name="quiz_desc">describe your quiz</textarea>
</td>
</tr>
<tr>
<td>Select The Language: </td>
<td><select name="language">
	          <!-option value="" disabled="disabled" selected><i>select the language</i></option->
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JAVASCRIPT">JavaScript</option>
                            <option value="PHP">PHP</option>
	</select></td>
</tr>
<tr>
<td>Total Number Of Questions: <br> <font size="-1">(you can input min. 10 to max. 30 questions)</font></td>
<td><input type="number" id="count" value="10" name="q_num" class="special" placeholder="Count" max="30" min="10"></td>
</tr>
<tr>
<td></td>
<td><input class"btn btn-primary" type="submit" name="submit" value="Submit" button id="buttontwo"></td>
</tr>
</table>
</font>
</div>
<br><br><br><br><br><br>
<h4> All Rights Reserved &copy; 2021</h4>
<br><br><br><br>
</div>
</div>
</body>
</html>