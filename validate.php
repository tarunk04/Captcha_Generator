<?php 
	session_start();
	echo $_SESSION['secure'];
	if($_SESSION['secure'] == $_POST['user_input']){
	  echo "captcha validated.";
	} 
	else{
	  echo "captcha validation failed.";
	}
?>