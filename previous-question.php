<?php
require 'configure.php';

session_start();
if(isset($_SESSION['q']))
$x=$_SESSION['q']-1;
$_SESSION['q']=$x;
header('Location:questions.php');
?>