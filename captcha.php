<?php
session_start();

$string = rand(100000,999999);
$_SESSION['captcha'] = $string;

//step1 create image
$witdh = 80;
$height = 30;
$image = imagecreatetruecolor($witdh,$height);

//step2 create foreground and background color for image
$fg = imagecolorallocate($image,15,26,30);
$bg = imagecolorallocate($image,255,255,255);

//step3 set image background color
imagefill($image,0,0,$bg);

//step4 write string on image
imagestring($image,15,10,10,$string,$fg);

//prevent any browser cache
header("Cache-Control: no-store,no-cache, must-revalidate");

//the php file will render as a image
header('Content-type: image/png');

//step5 create and free php memory
imagepng($image);
imagedestroy($image);
?>