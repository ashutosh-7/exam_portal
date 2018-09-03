<?php
require 'configure.php';
session_start();
$Ip=$_SERVER['REMOTE_ADDR'];
if($Ip=="::1"){

	}else{
			header('Location:error.php');

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
	<div class="left">
		

	</div>
	<div class="login-page">
		<div class="login-form">
			<form action="adminlogin.php" method="POST">
				
				<input type="text" placeholder="username" name="username"  required="required">
				<input type="password" placeholder="password" name="password" required="required"><br>
				<button name="login">LOGIN</button>
				
			</form>
			
		</div>
		

	</div>

</body>
</html>
<?php



if(isset($_POST['login']))
{
	 $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      $username = $_POST['username'];
      $password = $_POST['password']; 



      $query="SELECT * from admin WHERE username='$username' AND password='$password'";

      $query_run=mysqli_query($conn,$query);
        $result=mysqli_num_rows($query_run);
        if($result>0)
        {
        	$_SESSION['username']=$username;
        	header('Location:adminpanel.php');

        }
        else{
        	echo "<h1 class='msg'>wrong password</h1>";

        }
    }


?>