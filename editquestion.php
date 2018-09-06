
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
	<title>Permission</title>
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
		a{
			text-decoration: none;
		}
		.form{
	background:rgba(0,0,0,0.4);
	margin: auto;
	z-index: 1;
	width: 100%;
	text-align: center;
	padding:10px;
	margin-top: 20px;
	border-radius: 15px;
	margin-left:0%;

		}
		input[type=text] {
    width: 980%;
    padding: 14px 40px;
    margin: 8px 0;
    box-sizing: border-box;
    font-family: cursive;
    font-size: 16px;
}
		</style>
</head>
<body>
		<div class="home1"><button class="home"><a class="log" href="adminpanel.php">Admin-Panel</a></button></div>
</body>
</html>
<?php

$query="SELECT * FROM questions ";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo "<form class='form' action='editquestion.php' method='POST'>";
	echo "<input type='text' name='question' value='".$row['questions']."'><br>";
				echo "<input type='text' name='answer1' value='a.".$row['option1']."'><br>";
		echo "<input type='text' name='answer2' value='b.".$row['option2']."'><br>";
		echo "<input type='text' name='answer3' value='c.".$row['option3']."'><br>";
				echo "<input type='text' name='answer4' value='d.".$row['option4']."'><br>";









echo "</form>";




}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">.button{
	font-family: "Comic Sans MS", cursive, sans-serif;
	border-radius: 12px;
	color: black;
    font-size: 25px;
    width: 60%;
    height: 30%;
    padding: 8px;
    cursor: pointer;
    margin-left: 22%;
}</style>
</head>
<body>
<form class='button' action='editquestion.php' method='POST'><input type="submit" class="button" name="button" value="SAVE-CHANGES" class="button"> </form>
</body>
</html>
<?php
/*if(isset($_POST['button'])){
	$n=$_POST['name'];



$m=$_POST['mobile'];
$b=$_POST['branch'];
$sec=$_POST['section'];
$e=$_POST['email'];
$y=$_POST['year'];
$g=$_POST['gender'];

	$query2="UPDATE student_details SET student_name = '$n',email='$e',mobile='$m',branch='$b',year='$y',section='$sec',gender='$g' WHERE student_id='$s1' ";
$result2=mysqli_query($conn,$query2);
if($result2)
{
	echo "<script>alert('Student Details Updated Successfully!');</script>";
}
else{
	echo "";
}
}

*/
?>