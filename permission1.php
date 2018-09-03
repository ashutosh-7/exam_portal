<?php

require 'configure.php';
session_start();
$ST=$_SESSION['st'];
if(isset($_POST['button'])&&isset($_POST['permission']))  
{
	

	$ans=$_POST['permission'];

		$query="UPDATE student_details SET permi = '$ans' WHERE student_id='$ST' ";
$result=mysqli_query($conn,$query);
if($result)
{
	echo "";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>success</title>
	<link rel="stylesheet" type="text/css" href="registersuccess.css">
</head>
<body>
	

	<div>
	<h1>CHANGES SAVED SUCCESSFULLY!</h1>

	<div><h1> <a href="permission.php">CLICK HERE FOR NEW PERMISSION CHANGE!</a> </h1> </div>
</div>

</body>
</html>