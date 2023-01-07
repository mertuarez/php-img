<?php
header("Content-Type: image/png");
$im = imagecreate(600, 200);
$cl_black = imagecolorallocate($im, 0, 0, 0);
$cl_red = imagecolorallocate($im, 255, 0, 0);

$x=$_GET['x'];
$y=$_GET['y'];
$w=$x+$_GET['w'];
$h=$y+$_GET['h'];

imagefilledrectangle($im, $x, $y, $w, $h, $cl_red);

imagepng($im);
imagedestroy($im);
