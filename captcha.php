<?php
session_start();


$string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
$string_shuff=str_shuffle($string);
$text=substr($string_shuff,0,4);



$_SESSION['secure']=$text;

 ?>
 <img src="Captcha.php" alt="">
