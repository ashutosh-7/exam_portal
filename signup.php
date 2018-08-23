<?php
require 'configure.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="register">
	<h1>Registeration for Exam!</h1>
</div>



	<div class="wrapper">

	<div class="form">
		<form action="signup.php" method="POST">
		<input type="text" name="student_name" placeholder="Name">
		<input type="text" name="email" placeholder="E-mail">
		<input type="text" name="branch" placeholder="branch">
		<input type="text" name="year" placeholder="year">
		<input type="text" name="mobile" placeholder="mobile">
		<input type="text" name="section" placeholder="section">
		 
				<select class="gender" name="gender" required="required">
					<option value="gender">gender</option>


					<option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Male">Other</option>
				</select>
  <button class="button" name="button">REGISTER</button>
		
</form>
	</div>
	
</div>

</body>
</html>
