<?php 
	session_start();
	if($_SESSION['secure'] == $_POST['user_input']){
	  echo "captcha validated.";
	} 
	else{
	  echo "captcha validation failed.";
	}
?>