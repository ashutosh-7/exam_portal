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
	<title>edit details</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	
		</style>
</head>
<body>
		<div class="home1"><button class="home"><a class="log" href="adminpanel.php">Admin-Panel</a></button></div>
	<form  class="form1" action="editdetails.php" method="POST" >
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


$query="SELECT student_name,email,mobile,branch,section,gender,year FROM  student_details WHERE student_id=$s";
$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);
$query_row=mysqli_fetch_assoc($result);
$n=$query_row['student_name'];


$m=$query_row['mobile'];
$b=$query_row['branch'];
$sec=$query_row['section'];
$e=$query_row['email'];
$g=$query_row['gender'];
$y=$query_row['year'];

if($row==0)
{
	$n='no such student exist';



$m='';
$b='';
$sec='';
$e='';
$y='';
$g='';
}
}
else{
	$n='';

$s='';

$m='';
$b='';
$sec='';
$e='';
$y='';
$g='';

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>home
	</title>

	<style type="text/css">
	

	</style>
</head>
<body>
	<div >
		<h1 id="msg"> Student Details! </h1>
		<div class="table">
			<form class="form" action="editdetails.php" method="POST">
				 <input type="text" name="name" value="<?php echo $n; ?>" />
    <input typt="text" name="student_id" value="<?php echo $s; ?>" />
    <input typt="text" name="email" value="<?php echo $e; ?>" />
    <input typt="text" name="mobile" value="<?php echo $m; ?>" />
    <input typt="text" name="branch" value="<?php echo  $b;?>" />
    <input typt="text" name="section" value="<?php echo $sec; ?>" />
        <input typt="text" name="year" value="<?php echo $y; ?>" />
    <input typt="text" name="gender" value="<?php echo $g; ?>" />


				<input type="submit" name="button" value="SAVE-CHANGES" >  
					</form>
				

			

		</table>
		</div>

	</div>

</body>
</html>
<?php
$s1=$_SESSION['st'];
if(isset($_POST['button'])){
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

?>


