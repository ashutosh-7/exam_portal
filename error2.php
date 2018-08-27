<?php
require 'configure.php';

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
		a{
			text-decoration: none;
			color: green;
		}
		</style>
</head>
<body>
	<div class="error">
		<h1 class="msg">This system is not allocated to any one.</h1><br>
		<h3 class="msg">Want to refresh!</h3><br>
		<button class="button"><a href="exam_home.php"> REFRESH </a> </button>
	</div>

</body>
</html>