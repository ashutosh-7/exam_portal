<?php
require 'configure.php';
require 'ip-secure.php';
session_start();
if(isset($_SESSION['home'])){
}
else{
	header('Location:error3.php');

}



?>


<!DOCTYPE html>
<html>
<head>
	<title>instructions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
		body{
			background: #dfff80;
		}
		.div1,tr,td{
			margin-top: 3vw;
			align:centre;
			padding: 10px;
			
		}
		p{
			font-size: 22px;
		}
		a{
			text-decoration: none;
		}
		.button{
			font-family: "Comic Sans MS", cursive, sans-serif;
	border-radius: 12px;
	color: black;
    border: 2px solid black;
    font-size: 15px;
    width: 20%;
    height: 20%;
    padding: 8px;
    cursor: pointer;
    align:content;
    margin-left: 34vw;
    margin-top: 1vw;
		}

			
		</style>
		

</head>
<body>

<div class="div1">
	<table border="1">
	<tr><td>
	<table >
		<tr>
			<td><h2>General Instructions for Online Examination</h2></td>


		</tr>
		<tr><td><p>1. Total duration of examination is 15 minutes.<br>

2. The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself.
<br>

3. The Question Palette displayed on the right side of screen will show the status of each question.</p></td></tr>
<tr><td><h2>Navigating to a Question :</h2></td></tr>
<tr>
	<td>
		<p>
			4. To answer a question, do the following: <br>

Click on the question number in the Question Palette to go to that numbered question directly.<br>
Click on Save &Next to save your answer for the current question and then go to the next question.<br>
Click on Mark for Review & Next to save your answer for the current question, mark it for review, and then go to the next question.<br>
<b>Caution</b>: Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on its question number.<br>

5. You can view all the questions by clicking on the Question Paper button. Note that the options for multiple choice type questions will not be shown.<br>
		</p>
	</td>
</tr>
<tr>
	<td>
		<h2>
			Answering a Question :
		</h2>
	</td>
</tr>
<tr>
	<td>
		<p>
			6. Procedure for answering a multiple choice type question:<br>

To select your answer, click on the button of one of the options<br>
To deselect your chosen answer, click on the button of the chosen option again or click on the Clear Response button<br>
To change your chosen answer, click on the button of another option<br>
To save your answer, you MUST click on the Save & Next buttonTo save your answer, you MUST click on the Save & Next button<br>
To mark the question for review, click on the Mark for Review & Next button.<br>
7. To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.<br>

8. Note that questions for which option has been chosen and answers are saved or marked for review will be considered for evaluation<br>

9. Each question is allotted
4 (four) marks for correct response.
No deduction for wrong answer.<br>

		</p>
	</td>
</tr>

		</td></tr>

		
	</table>
	</table>
	<form action="instructions.php" method="POST"><button  type="" class="button" name="button">  Start Exam</button></form>


</div>

</body>
</html>
<?php


if(isset($_POST['button'])){

	
$_SESSION['q']=1;
header('Location:questions.php');}




?>