<?php
//STARTING  SESSION
  session_start();
//DEFINING CONTENT TYPE TO IMAGE - JPEG
  header('content-type: image/jpeg');
//GETTING SESSION VARIABLE
  $text=$_SESSION['secure'];

//CREATING IMAGE WITH DIMENTION 158x60
  $image_height=60;
  $image_width=(32*4)+30;
  $image = imagecreate($image_width, $image_height);
  //DEFINING BACKGROUND COLOUR TO WHITE
  imagecolorallocate($image, 255 ,255, 255);


//FOR LOOP FOR CREATING TEXT
  for ($i=1; $i<=4;$i++){
    //CREATING RANDOM FONT-SIZE
      $font_size=rand(22,27);
    //FOR RANDOM COLOUR
      $r=rand(0,255);
      $g=rand(0,255);
      $b=rand(0,255);
    //RANDOM INDEX FOR RANDOM TEXT FONT
      $index=rand(1,10);
    //RANDOM POSITION AND ORIANTION
      $x=15+(30*($i-1));
      $x=rand($x-5,$x+5);
      $y=rand(35,45);
      $o=rand(-30,30);
    //RANDOM FONT COLOR
      $font_color = imagecolorallocate($image, $r ,$g, $b);
    //CREATING IMAGE USING DIFFETENT FONTS
      imagettftext($image, $font_size, $o, $x, $y ,  $font_color,'fonts/'.$index.'.ttf',$text[$i-1]);
  }
//FOR LOOP FOR CREATING RANDOM LINES
  for($i=1; $i<=30;$i++){
    //RANDOM STARTING AND ENDING POSITION
      $x1= rand(1,150);
      $y1= rand(1,150);
      $x2= rand(1,150);
      $y2= rand(1,150);
    //RANDOM COLOR
      $r=rand(0,255);
      $g=rand(0,255);
      $b=rand(0,255);
      $font_color = imagecolorallocate($image, $r ,$g, $b);
    //CREATING RANDOM LINES
      imageline($image,$x1,$y1,$x2,$y2,$font_color);


  }
//CREATING FINAL IMAGE (CAPTCHA)
  imagejpeg($image);

?>
