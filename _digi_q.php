<?php
if(isset($_POST['dataview'])){

$indi=$_POST['indi'];
$indi_color=$_POST['indi_color'];
$indi_color2=$_POST['indi_color2'];
$_SESSION['indi']=$indi;
$_SESSION['indi_color']=$indi_color;
$_SESSION['indi_color2']=$indi_color2;
}
if(isset($_POST['reset'])){
	session_start(); 
	session_destroy();
}
?>