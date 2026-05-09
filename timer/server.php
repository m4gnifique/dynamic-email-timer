<?php

header("Content-Type: image/png");

$width = 640;
$height = 120;

$image = imagecreate($width, $height);

$bg = imagecolorallocate($image, 249, 115, 22);
$text = imagecolorallocate($image, 255, 255, 255);

$end = strtotime("2026-12-31 23:59:59");
$now = time();

$remaining = max(0, $end - $now);

$hours = floor($remaining / 3600);
$minutes = floor(($remaining % 3600) / 60);
$seconds = $remaining % 60;

$timer = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

imagestring($image, 5, 250, 45, $timer, $text);

imagepng($image);

imagedestroy($image);

?>
