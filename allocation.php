<?php
require 'configure.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Allocation</title>
	
	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	body{
		background: wheat;
	}
	.msg{
	color:#cccccc;
	font-family: cursive;
	font-size: 35px;
}


		

.form{
	position: relative;
	
	margin: auto;
	z-index: 1;
	text-align: center;
	max-width: 400px;
	padding-top: 50px;
	padding-left: 30px;
	padding-right: 30px;
	margin-top: 60px;
	padding-bottom: 30px;
	border-radius: 25px;
	margin-left: 430px;

}
.form input{
	font-family: cursive;
	outline: 1;
	background-color: #c2d6d6;
	padding: 10px;
	width: 60%;
	margin: 0 5px 40px;
	border-radius: 15px;
}
.form button{
	font-family: "Comic Sans MS", cursive, sans-serif;
	border-radius: 12px;
	color: black;
    border: 2px solid black;
    font-size: 15px;
    width: 80%;
    height: 20%;
    padding: 8px;
    cursor: pointer;
}

	</style>
</head>
<body>
	<div class="div1">
	<form action="allocation.php" method="POST" class="form">
		<input type="text" name="student_id" placeholder="Student Id"><br>
		<button type="submit" class="button" name="submit">Generate Computer System for Exam</button>

		

	</form>
	</div>


</body>
</html>

<?php
$k=0;$x=0;
if(isset($_POST['student_id']))
{


$student_id=$_POST['student_id'];
}
if(isset($_POST['submit']))   
{
	$query="SELECT * FROM student_details";
	$result=mysqli_query($conn,$query);
while($query_row=mysqli_fetch_assoc($result))
{
	$present=$query_row['student_id'];
	
if($present==$student_id)
{
	
$k++;
}

}



$query="SELECT * FROM allocation";
$l=0;
	$result=mysqli_query($conn,$query);
while($query_row=mysqli_fetch_assoc($result))
{
	$present=$query_row['student_id'];
	
if($present==$student_id)
{
	
$l++;
}

}
if($k==0)
{
echo "<p class=msg>This Student does not register for this exam!</p>";
}

if($l>0)
{
echo "<p class=msg>Student already allocated any system!</p>";
}

if($k>0 && $l==0)
/*{
	$alloc=rand(1,6);


	$query="SELECT * FROM allocation";
	$result=mysqli_query($conn,$query);
while($query_row=mysqli_fetch_assoc($result))
{
	$present=$query_row['computer_system'];


	if($present!=$alloc)
	{
		$alloc_final=$alloc;
		$x++;

	}
	else{
		$alloc=rand(1,6);
	}
}*/
	do{
		$alloc=rand(1,6);

	$query="SELECT * FROM allocation WHERE computer_system='$alloc'";
   $result=mysqli_query($conn,$query);
   $n=mysqli_num_rows($result);
    if($n==0)
    	{
    		$query="INSERT INTO allocation (computer_system, student_id) VALUES ('$alloc', '$student_id')"; 
    if(mysqli_query($conn,$query))
    	echo "Student Allocated ".$alloc."System Number";
}
    else 
    	$alloc=7;
        }while($n>0);


       
        
	



}




	




















?>


