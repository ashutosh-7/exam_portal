<?php
require 'configure.php';
session_start();

$Ip=$_SERVER['REMOTE_ADDR'];
$Ip2="::1";
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
	<title>Permission</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	.home{
			float: right;
			font-family: "Comic Sans MS", cursive, sans-serif;
	border-radius: 12px;
    border: 2px solid black;
    font-size: 15px;
    width: 10%;
    
    padding: 8px;
    cursor: pointer;
   
		}
		body{
			background: #00997a;
		}
		</style>
</head>
<body>
		<div class="home1"><button class="home"><a class="log" href="adminpanel.php">Admin-Panel</a></button></div>
	<form  class="form" action="permission.php" method="POST" >
		<input type="text" name="student_id" placeholder="Enter The Student ID:" required="required">
		<input type="submit" name="submit" value="Search">


	</form>


</body>
</html>
<?php
if(isset($_POST['submit']))   //submit button press ho gaya
{
	

        	
	$s=$_POST['student_id'];
	$_SESSION['st']=$s;


$query="SELECT student_name,email,mobile,branch,section FROM  student_details WHERE student_id=$s";
$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);
$query_row=mysqli_fetch_assoc($result);
$n=$query_row['student_name'];


$m=$query_row['mobile'];
$b=$query_row['branch'];
$s=$query_row['section'];
$e=$query_row['email'];


if($row==0)
{
	$n='no such student exist';



$m='';
$b='';
$s='';
$e='';
}
}
else{
	$n='';



$m='';
$b='';
$s='';
$e='';
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>home
	</title>
	<style type="text/css">
	.table
		{
			position: relative;
	margin: auto;
	z-index: 1;
	text-align: center;
	max-width: 1000px;
	padding-top: 50px;
	padding-left: 30px;
	padding-right: 30px;
	margin-top: 40px;
	padding-bottom: 30px;
	border-radius: 25px;
	margin-left: 300px;
	color: black;
	font-family: cursive;

		}
		.table1,tr,td{
			padding: 15px;
		}
		#msg{
			
				margin-top: 30px;
	
	margin-left: 500px;
		}
		tr,td{
			color:  #ccffcc;
			font-size: 28px;
		}
		a{
			text-decoration: none;
		}
		.button{
			font-family: cursive;
			font-size: 25px;
			border-radius: 12px;
		}
	</style>
</head>
<body>
	<div >
		<h1 id="msg"> Student Details! </h1>
		<div class="table">
		<table  class="table1">
			<tr>
				<tr><td><?php  echo "Student Name:"; ?></td>
					<td><?php echo $n;  ?></td>
				</tr>
				<tr>
					<td><?php  echo "Student Id:"; ?></td>
					<td><?php echo $s; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Email"; ?></td>
					<td><?php echo $e; ?></td>
				</tr>
				<tr><td><?php  echo "Mobile No:"; ?></td>
					<td><?php echo $m; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Branch:"; ?></td>
					<td><?php echo $b; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Section"; ?></td>
					<td><?php echo $s; ?></td>
				</tr>
				<tr><td><form action="permission1.php" method="POST">Permission:  YES<input type="radio" name="permission" value="Yes"></td><td> NO<input type="radio" name="permission" value="NO"></td></tr>
				<tr><<tr><td></td></tr><br><br>
					<td colspan="2"><input type="submit" name="button" value="SAVE-CHANGES" class="button">  
					</form></td>
				</tr>
			</tr>
		</table>
		</div>

	</div>

</body>
</html>




