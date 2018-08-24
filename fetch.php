<?php
require 'configure.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fetch</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form  class="form" action="fetch.php" method="POST" >
		<input type="text" name="computer_system" placeholder="Enter The Computer System No:" required="required">
		<button type="submit" class="button" name="submit">Register this System for Exam</button>


	</form>


</body>
</html>

<?php
if(isset($_POST['computer_system']))
{


$computer_system=$_POST['computer_system'];
}

if(isset($_POST['submit']))   //submit button press ho gaya
{
$k=0;

$Ip=$_SERVER['REMOTE_ADDR'];
$query="SELECT * FROM  fetch_ip ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
while($query_row=mysqli_fetch_assoc($result))
{
	$present=$query_row['ip_address'];
	$present1=$query_row['computer_system'];
if($present==$Ip ||$present1==$computer_system)
{
	
$k=1;
echo "<p class=msg>Computer has been already registered</p>";

//header('Location:response.php');
break;
}
}
if($num>6&&$k!=1)
{
echo" <p class=msg>No Computer System Is Free for Exam!</p> ";
}
else if($k!=1){





	$query="INSERT INTO fetch_ip (ip_address,computer_system) VALUES ('$Ip','$computer_system')";
	if($result=mysqli_query($conn,$query))
	{
		echo"<p class=msg>Ip has been registered</p>";
      
  //header('Location:response.php');
  }
else 
	echo mysqli_error($conn);
}
}
?>
