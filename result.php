<?php
require 'configure.php';
require 'ip-secure.php';
//student id
require 'student_id.php';

	//student id close
$query3="SELECT permi,student_name FROM student_details WHERE student_id='$s'";
$result3=mysqli_query($conn,$query3);
$query_row3=mysqli_fetch_assoc($result3);
$permission=$query_row3['permi'];
$name=$query_row3['student_name'];

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

if($count>0)
{

	$query4="INSERT INTO ranking (sid,marks,name) VALUES ('$s','$count','$name')";
	$result4=mysqli_query($conn,$query4);
	if($result4)
	{
		echo "";
	}
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







