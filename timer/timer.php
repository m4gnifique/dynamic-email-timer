{\rtf1\ansi\ansicpg1252\cocoartf2867
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
\
header("Content-Type: image/png");\
\
$width = 640;\
$height = 120;\
\
$image = imagecreate($width, $height);\
\
$bg = imagecolorallocate($image, 249, 115, 22);\
$text = imagecolorallocate($image, 255, 255, 255);\
\
$end = strtotime("2026-05-31 23:59:59");\
$now = time();\
\
$remaining = max(0, $end - $now);\
\
$hours = floor($remaining / 3600);\
$minutes = floor(($remaining % 3600) / 60);\
$seconds = $remaining % 60;\
\
$timer = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);\
\
imagestring($image, 5, 250, 45, $timer, $text);\
\
imagepng($image);\
\
imagedestroy($image);\
\
?>\
}