<?php
require 'configure.php';

$query="SELECT * FROM student_details";
$query_run=mysqli_query($conn,$query);
$row=mysqli_num_rows($query_run);

if($row>0)
{
	while($print=mysqli_fetch_assoc($query_run))
	{
	echo $print['student_name']."  &nbsp &nbsp &nbsp           ".$print['student_id']."  &nbsp &nbsp &nbsp           ".$print['email']."  &nbsp &nbsp &nbsp           ".$print['mobile']."  &nbsp &nbsp &nbsp           ".$print['branch']."<br>";
}
}
else
{
	mysqli_error($conn);
}
?>