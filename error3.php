<?php
require 'configure.php';
session_start();
session_destroy();
//student id
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
	//student id close
$query3="SELECT permi FROM student_details WHERE student_id='$s'";
$result3=mysqli_query($conn,$query3);
$query_row3=mysqli_fetch_assoc($result3);
$permission=$query_row3['permi'];
if($permission=="Yes")
{
require 'result.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<style type="text/css">
		body{
			background: grey;
		}
		.msg{
			color: white;
		}
		.error{
			text-align: centre;
			margin-top: 10px;
			margin-left: 150px;
		}

	</style>
</head>
<body><div class="error">
	<h1 class="msg">exam over!</h1>
	</div>

</body>
</html>