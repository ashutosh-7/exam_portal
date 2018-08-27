<?php
require 'configure.php';
$Ip=$_SERVER['REMOTE_ADDR'];
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
	max-width: 600px;
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
	</style>
</head>
<body>
	<div >
		<h1 id="msg"> Student Details! </h1>
		<div class="table">
		<table border="1" class="table1">
			<tr>
				<tr><td><?php  echo "Student Name:"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Student Id:"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Email"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr><td><?php  echo "Mobile No:"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Branch:"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr>
					<td><?php  echo "Section"; ?></td>
					<td><?php echo "".$Ip; ?></td>
				</tr>
				<tr>
					<td colspan="2"><button>Start Exam!</button></td>
				</tr>
			</tr>
		</table>
		</div>

	</div>

</body>
</html>