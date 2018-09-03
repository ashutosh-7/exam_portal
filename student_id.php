<?php
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
?>