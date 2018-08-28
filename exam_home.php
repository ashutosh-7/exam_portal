<?php
require 'configure.php';
$Ip=$_SERVER['REMOTE_ADDR'];
$k=0;
$query="SELECT * FROM  allocation ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

while ($query_row=mysqli_fetch_assoc($result))
{


$i=$query_row['ip_address'];

if($Ip==$i)
{
	$a=$query_row['computer_system'];
$s=$query_row['student_id'];
$i=$query_row['ip_address'];
$k++;
break;
}
}

if($k==0)
{

	header('Location:error2.php');


	}
	else{
	$Ip=$_SERVER['REMOTE_ADDR'];
$query="SELECT student_name,student_id,email,mobile,branch,section FROM  student_details WHERE student_id=$s";
$result=mysqli_query($conn,$query);
$query_row=mysqli_fetch_assoc($result);
$n=$query_row['student_name'];
$i=$query_row['student_id'];
$m=$query_row['mobile'];
$b=$query_row['branch'];
$s=$query_row['section'];
$e=$query_row['email'];



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
	margin-left: 430px;
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
			color: red;
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
					<td><?php echo $i; ?></td>
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
				<tr>
					<td colspan="2"><button class="button" name="button">Start Exam!</button></td>
				</tr>
			</tr>
		</table>
		</div>

	</div>

</body>
</html>