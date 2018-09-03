<?php
require 'configure.php';
session_start();
session_destroy();

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