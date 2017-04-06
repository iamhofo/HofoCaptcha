<?php
/**
 * User: John
 * Date: 1.4.2017
 * Time: 5:06
 */

header("Content-type: image/png");

$image = imagecreatetruecolor(160,80);
$textColor = imagecolorallocate($image, 120, 120, 120);
$font = 'arial.ttf';

imagettftext($image, 24, 15, 10, 60, $textColor, $font, 'Hello');

imagepng($image);
imagedestroy($image);

