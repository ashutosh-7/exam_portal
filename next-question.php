<?php
require 'configure.php';

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
?>