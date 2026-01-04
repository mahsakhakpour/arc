<?php
header("content-Type:image/jpeg");
$image=imagecreatetruecolor(400,400);
$white=imagecolorallocate($image,255,255,255);
$purple=imagecolorallocate($image,128,0,255);
$indigo=imagecolorallocate($image,0,0,255);
$blue=imagecolorallocate($image,0,128,255);
$green=imagecolorallocate($image,0,255,0);
$yellow=imagecolorallocate($image,255,255,0);
$orange=imagecolorallocate($image,255,128,0);
$red=imagecolorallocate($image,255,0,0);
imagefilledrectangle($image,10,10,390,390,$white);

for ($i = 190; $i <= 200; $i++) {
imagefilledarc($image, 200, $i, 150, -200, 0, 180, $purple, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 145, -190, 0, 180, $indigo, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 140, -180, 0, 180, $blue, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 135, -170, 0, 180 , $green, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 130, -160, 0, 180, $yellow, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 125, -150, 0, 180, $orange, IMG_ARC_NOFILL);
imagefilledarc($image, 200, $i, 120, -140, 0, 180 , $red, IMG_ARC_NOFILL);
}

header('Content-type: image/png');
imagejpeg($image);
imagedestroy($image);
?>
