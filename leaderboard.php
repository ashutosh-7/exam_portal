<!DOCTYPE html>
<html>
<head>
	<title>leaderboard</title>

	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	body{
		background:#00997a;
	}
	.heading1{
		margin-left: 35%;
	}
</style>
</head>
<body>
	<div><h1 class="heading1">Ranking Of Students</h1></div>


</body>
</html>
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
	$count=1;
$query="SELECT * FROM ranking ORDER BY marks DESC";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{

	echo "<h2>".$count.".    ".$row['name']."          (  marks -   ".$row['marks'].")</h2>";
	$count++;
}
?>
