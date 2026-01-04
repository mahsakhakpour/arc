<?php
header('Content-Type: image/jpeg');

$image = imagecreatetruecolor(400, 400);

// Colors
$white  = imagecolorallocate($image, 255, 255, 255);
$purple = imagecolorallocate($image, 128, 0, 255);
$indigo = imagecolorallocate($image, 0, 0, 255);
$blue   = imagecolorallocate($image, 0, 128, 255);
$green  = imagecolorallocate($image, 0, 255, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);
$orange = imagecolorallocate($image, 255, 128, 0);
$red    = imagecolorallocate($image, 255, 0, 0);

// Background
imagefilledrectangle($image, 10, 10, 390, 390, $white);

// Original style
for ($i = 190; $i <= 200; $i++) {
    imagearc($image, 200, $i, 150, 200, 0, 180, $purple);
    imagearc($image, 200, $i, 145, 190, 0, 180, $indigo);
    imagearc($image, 200, $i, 140, 180, 0, 180, $blue);
    imagearc($image, 200, $i, 135, 170, 0, 180, $green);
    imagearc($image, 200, $i, 130, 160, 0, 180, $yellow);
    imagearc($image, 200, $i, 125, 150, 0, 180, $orange);
    imagearc($image, 200, $i, 120, 140, 0, 180, $red);
}

imagejpeg($image, null, 90);
imagedestroy($image);
