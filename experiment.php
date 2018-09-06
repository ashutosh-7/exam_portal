<?php
require 'questns.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>

var countDownDate = new Date("Sep 3,2018 10:20:10").getTime();


var x = setInterval(function() {

    
    var now = new Date().getTime();
    
    
    var distance = countDownDate - now;
    
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
    document.getElementById("demo").innerHTML =  hours + "h "+":"+
    + minutes + "m " +":"+ seconds + "s ";
    
   
    if (distance <0) {
        window.location.href="error3.php";
        
    }
   
}, 1000);
</script>
<div id ="demo" > </div>

</body>
</html>
