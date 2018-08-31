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
		#demo{
	color: #b34700;
	font-size: 35px;
	margin-left: 80vw;
}

	</style>
</head>
<body><div class="error">
	<h1 class="msg">exam not start yet!</h1>
	</div>
	<script>

var countDownDate = new Date("Aug 31,2018 22:56:10").getTime();


var x = setInterval(function() {

    
    var now = new Date().getTime();
    
    
    var distance = countDownDate - now;
    
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
    document.getElementById("demo").innerHTML =  hours + "h "+":"+
    + minutes + "m " +":"+ seconds + "s ";
    
   
    if (distance <15) {
        window.location.href="questions.php";
        
    }
     
}, 1000);
</script>
<div id="demo"></div>
</body>
</html>