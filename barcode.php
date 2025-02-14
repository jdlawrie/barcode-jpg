<?php

header('Content-Type: image/png');
$code = strtoupper($_GET['c']);
$size = $_GET['s'];
if (!is_numeric($size) || $size < 1 || $size > 800) {
    $size = 36;
}
$font = './code39.ttf';
$text = "*$code*"; // Code 39 requires asterisks
$b = imagettfbbox($size, 0, $font, $text);
$w = abs($b[2] - $b[0]) + 10;
$h = abs($b[5] - $b[1]) + 10;
$image = imagecreate($w, $h);
imagecolorallocate($image, 255, 255, 255); // white background
$black = imagecolorallocate($image, 0, 0, 0);
imagettftext($image, $size, 0, 5, $h - 5, $black, $font, $text);
//imagepng($image, "./barcode-$code_$size.jpg");  - uncomment this line to save generated barcodes
imagepng($image);
imagedestroy($image);

?>
