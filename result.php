<?php
require 'configure.php';
require 'ip-secure.php';
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
$count=0;
$query="SELECT * from answer WHERE sid='$s'";
$result=mysqli_query($conn,$query);
while($query_row=mysqli_fetch_assoc($result))
{
	$q=$query_row['qid'];
	$a=$query_row['ans'];
$query2="SELECT * from questions WHERE qid='$q' ";
$result2=mysqli_query($conn,$query2);
$query_row2=mysqli_fetch_assoc($result2);
$ans2=$query_row2['correctanswer'];
if($result2)
{
	if($a==$ans2)
	{
		$count++;
	}
}
}
}
else{
	header('Location:error3.php');
}
?>
<!DOCTYPE html>
<html>
<head><style type="text/css">
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

	<title>result</title>
</head>
<body><div class="error">
	<h1 class="msg">RESULT:<?php echo "    ".$count;?> marks out of 15</h1>
	</div>

</body>
</html>







