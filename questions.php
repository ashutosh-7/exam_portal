<?php
require 'configure.php';
session_start();
$_SESSION["favcolor"] = "green";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
			<style type="text/css">
				body{
					background:  #f2f2f2;
				}
				#msg{
					margin-left: 30vw;
				}
				table,tr,td{
					margin-top: 80px;
					margin-left: 80px;
					font-size: 20px;
					padding: 8px;
				}
				td{
					border: none;
				}
				button{
					background-color: #f2f2f2;
    border: 1;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    border-radius: 12px;
				background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

button:hover {
	background-color: #e7e7e7;
}
#demo{
	color: #b34700;
	font-size: 35px;
	margin-left: 80vw;
}
.table2{
	margin-right: 80px;
}
			</style>


</head>
<body>
	<script>

var countDownDate = new Date("Aug 29,2018 18:59:10").getTime();


var x = setInterval(function() {

    
    var now = new Date().getTime();
    
    
    var distance = countDownDate - now;
    
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
    document.getElementById("demo").innerHTML =  hours + "h "+":"+
    + minutes + "m " +":"+ seconds + "s ";
    
   
    if (distance <0) {
        window.location.href="#";
        
    }
}, 1000);
</script>
	<div>
		<h1 id="msg"><u>Open Source Software R&D Centre Exam</u></h1>
		
			<div id="demo"></div>
			<div>
			<table border="1" style="float: left">
				<tr><td><button>1</button></td>
                 <td><button>2</button></td>
                 <td><button>3</button></td>
				</tr>
				<tr><td><button>4</button></td>
                 <td><button>5</button></td>
                 <td><button>6</button></td>
				</tr>
				<tr><td><button>7</button></td>
                 <td><button>8</button></td>
                 <td><button>9</button></td>
				</tr>
				<tr><td><button>10</button></td>
                 <td><button>11</button></td>
                 <td><button>12</button></td>
				</tr>
				<tr><td><button>13</button></td>
                 <td><button>14</button></td>
                 <td><button>15</button></td>
				</tr>
			</table>

			

	<table border="1" style="float: right" class="table2"><tr><td><p>hghhhhhhhhhhj</p></td></tr></table>
</div>


	</div>
	

</body>
</html>