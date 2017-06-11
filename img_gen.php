<?php
session_start();
header('content-type: image/jpeg');
$text=$_SESSION['secure'];
$font_size=rand(22,27);

$image_height=60;
$image_width=(32*4)+30;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255 ,255, 255);



for ($i=1; $i<=4;$i++){
$font_size=rand(22,27);
$r=rand(0,255);
$g=rand(0,255);
$b=rand(0,255);
$index=rand(1,10);
$x=15+(30*($i-1));
$x=rand($x-5,$x+5);
$o=rand(-30,30);
$y=rand(35,45);
$font_color = imagecolorallocate($image, $r ,$g, $b);
imagettftext($image, $font_size, $o, $x, $y ,  $font_color,'fonts/'.$index.'.ttf',$text[$i-1]);
}
for($i=1; $i<=30;$i++){
$x1= rand(1,150);
$y1= rand(1,150);
$x2= rand(1,150);
$y2= rand(1,150);
$r=rand(0,255);
$g=rand(0,255);
$b=rand(0,255);

$font_color = imagecolorallocate($image, $r ,$g, $b);
imageline($image,$x1,$y1,$x2,$y2,$font_color);


}
imagejpeg($image);

?>
