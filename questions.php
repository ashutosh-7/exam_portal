<?php
require 'configure.php';

ob_start();
session_start();




if(isset($_SESSION['q']))
{
	$q=$_SESSION['q'];
	
if($q<=0)
{
	$q=1;
	$_SESSION['q']=1;
}
}
else{
	echo "seesion expire";
}



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
					margin-top: 40px;
					margin-left: 30px;
					font-size: 20px;
					padding: 8px;
					border-radius: 15px;
				}
				td{
					border: none;
				}
				button{
					background-color: #f2f2f2;
    border: 1;
   
    padding: 12px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
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
	float: right;
	display: inline-block;;
	table-layout: fixed;
	 width: 64%;
	 margin-right: 4%;
}

.mna{
	margin-top: 31vw;
	margin-left: 35vw;

}
#next{
	margin-top: 4vw;
	margin-left: 15vw;

}
	#previous{
			margin-top: 4vw;
	margin-left: 8vw;



	}
	.buttons{
		margin-top: 31vw;
	margin-left: 35vw;

	}	
	.table1{
		width: 23%;
	}	</style>


</head>
<body>
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
    
   
    if (distance <0) {
        window.location.href="error3.php";
        
    }
   
}, 1000);
</script>
	<div>
		<h1 id="msg"><u>Open Source Software R&D Centre Exam</u></h1>
	</div>
		
			<!--<div id="demo"></div>-->
			<div>
			<table border="1" style="float: left" class="table1">
				<tr><td>		<form action="questions.php" method="POST">
<button type="submit" name="que1">1</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que2">2</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que3">3</button></form></td>
				</tr>
				<tr><td><form action="questions.php" method="POST">
<button type="submit" name="que4">4</button></form></td>
				
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que5">5</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que6">6</button></form></td>
				</tr>
				<tr><td><form action="questions.php" method="POST">
<button type="submit" name="que7">7</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que8">8</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que9">9</button></form></td>
				</tr>
				<tr><td><form action="questions.php" method="POST">
<button type="submit" name="que10">10</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que11">11</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que12">12</button></form></td>
				</tr>
				<tr><td><form action="questions.php" method="POST">
<button type="submit" name="que13">13</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que14">14</button></form></td>
                 <td><form action="questions.php" method="POST">
<button type="submit" name="que15">15</button></form></td>
				</tr>
			</table>
			</div>
			<div>
<table border="1" class="table2">
			

	
	<?php 
  $query="SELECT * FROM  questions WHERE qid=$q ";
$result=mysqli_query($conn,$query);
$query_row=mysqli_fetch_assoc($result);
	

	//echo"<table border=1 class=table2>";
	echo"<tr><td><br><form action =questions.php method =POST>".$query_row['questions'];
	echo"</tr></td>";
	echo"<tr><td><input type=radio name =opt value=1 id =d1>".$query_row['option1'];
		echo"</tr></td>";

    echo"<tr><td><input type=radio name =opt value=2 id =d2>".$query_row['option2'];
    	echo"</tr></td>";

    echo"<tr><td><input type=radio name =opt value=3 id =d3>".$query_row['option3'];
    	echo"</tr></td>";

    echo"<tr><td><input type=radio name =opt value=4 id =d4>" .$query_row['option4'];
    	echo"</tr></td>";

    echo"<tr><td><br><input type=submit name=submit value=submit></br>";
    	echo"</tr></td>";

//echo"</table>";

?>
</table>


</div>
	<div class="buttons">


<form class="mna" action="questions.php" method="POST">
			<input id="previous" type="submit" name="Previous" value="Previous">

	<input id="next"  type="submit" name="Next" value="Next">

</form>

	</div>

</body>
</html>
<?php
if(isset($_POST['Next'])){

	session_start();
if(isset($_SESSION['q']))
{
$_SESSION['q']=++$_SESSION['q'];
if($_SESSION['q']>15)
$_SESSION['q']=15;
echo "set";
}
else{
	echo "seesion not set";
}
header('Location:questions.php');
}
if(isset($_POST['Previous'])){

session_start();
if(isset($_SESSION['q']))
$x=$_SESSION['q']-1;
$_SESSION['q']=$x;
header('Location:questions.php');}
if(isset($_POST['que1'])) 
{
	$_SESSION['q']=1;
	header('Location:questions.php');}
	if(isset($_POST['que2'])) 
{
	$_SESSION['q']=2;
	header('Location:questions.php');}

if(isset($_POST['que3'])) 
{
	$_SESSION['q']=3;
	header('Location:questions.php');}

if(isset($_POST['que4'])) 
{
	$_SESSION['q']=4;
	header('Location:questions.php');}
	if(isset($_POST['que5'])) 
{
	$_SESSION['q']=5;
	header('Location:questions.php');}
	if(isset($_POST['que6'])) 
{
	$_SESSION['q']=6;
	header('Location:questions.php');}
	if(isset($_POST['que7'])) 
{
	$_SESSION['q']=7;
	header('Location:questions.php');}
	if(isset($_POST['que8'])) 
{
	$_SESSION['q']=8;
	header('Location:questions.php');}
	if(isset($_POST['que9'])) 
{
	$_SESSION['q']=9;
	header('Location:questions.php');}
	if(isset($_POST['que10'])) 
{
	$_SESSION['q']=10;
	header('Location:questions.php');}
	if(isset($_POST['que11'])) 
{
	$_SESSION['q']=11;
	header('Location:questions.php');}
	if(isset($_POST['que12'])) 
{
	$_SESSION['q']=12;
	header('Location:questions.php');}
	if(isset($_POST['que13'])) 
{
	$_SESSION['q']=13;
	header('Location:questions.php');}
	if(isset($_POST['que14'])) 
{
	$_SESSION['q']=14;
	header('Location:questions.php');}
	if(isset($_POST['que15'])) 
{
	$_SESSION['q']=15;
	header('Location:questions.php');}













  //submit button press ho gaya





?>
