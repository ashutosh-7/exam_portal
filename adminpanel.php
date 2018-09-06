<?php
require 'configure.php';
session_start();
$Ip=$_SERVER['REMOTE_ADDR'];
$Ip2="::1";//admin ip
if($Ip!=$Ip2)
{
	header('location:error.php');
}
if(isset($_SESSION['username']))
{
	echo "";
}
else{
		header('location:error.php');

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
	<style type="text/css">
		body{
			background:  #00e6e6;
		}
		.logout{
			float: right;
			font-family: "Comic Sans MS", cursive, sans-serif;
	border-radius: 12px;
    border: 2px solid black;
    font-size: 15px;
    width: 10%;
    
    padding: 8px;
    cursor: pointer;
    margin-top: 0px;
		}
		a{
			text-decoration: none;
				color: green;

		}
		.log{
			text-decoration: none;
				color: red;

		}
		table,tr,td{
					margin-top: 1%;
					margin-left: 38%;
					font-size: 28px;
					padding: 8px;
					border-radius: 10px;
					background: white;
				}
				.table1{
					margin-top: 50px;
				}
				
	</style>
</head>
<body>
	<div class="logout1"><button class="logout"><a class="log" href="logout.php">logout </a></button></div>
	<div class="table1">
		<table border="1" class="table2">
			<tr><td><a href="allocation.php">  Student Allocation</a></td></tr>
			<tr><td><a href="editdetails.php">Edit Student Details</a></td></tr>
			<tr><td><a href="permission.php">Permission</a></td></tr>
			<tr><td><a href="editquestion.php">Edit Question</a></td></tr>
			<tr><td><a href="leaderboard.php">Leaderboard</a></td></tr>
		</table>
	</div>

</body>
</html>