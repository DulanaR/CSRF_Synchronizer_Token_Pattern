<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['msgTxt'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h2> Thanks for your comment: ".$_POST['msgTxt']."</h2>";
		echo "<h3> CSRF Token:  ".$val."</h2>";	
		echo "<h3> Session ID:  ".$_COOKIE['SesT']."</h2>";	
	}
	else{
	   echo "<h2> Unauthorized breach in, Get Lost :  ".$_POST['msgTxt']."</h2>";
	}
}
?>