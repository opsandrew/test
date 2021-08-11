<!DOCTYPE html>
<html>
<head>

</head>
<body>
<img src="/img/444.png"/>

<?php
$filename = 'img/444.png';

$info   = getimagesize($filename);
$width  = $info[0];
$height = $info[1];
$type   = $info[2];
$img = imageCreateFromPng($filename);
imageSaveAlpha($img, true);


// Размеры нового изображения.
$w = 200;
$h = 100;

if (empty($w)) {
    $w = ceil($h / ($height / $width));
}
if (empty($h)) {
    $h = ceil($w / ($width / $height));
}

$tmp = imageCreateTrueColor($w, $h);
if ($type == 1 || $type == 3) {
    imagealphablending($tmp, true);
    imageSaveAlpha($tmp, true);
    $transparent = imagecolorallocatealpha($tmp, 0, 0, 0, 127);
    imagefill($tmp, 0, 0, $transparent);
    imagecolortransparent($tmp, $transparent);
}

$tw = ceil($h / ($height / $width));
$th = ceil($w / ($width / $height));
if ($tw < $w) {
    imageCopyResampled($tmp, $img, ceil(($w - $tw) / 2), 0, 0, 0, $tw, $h, $width, $height);
} else {
    imageCopyResampled($tmp, $img, 0, ceil(($h - $th) / 2), 0, 0, $w, $th, $width, $height);
}

imagePng($tmp, 'img/444_1.png');

echo 'Изображние после ресайза';
echo '<img class="banner" src="/img/444_1.png"/>';
echo '<br>'.'<a href="http://test.cc68909.tmweb.ru/index.php">На главную</a>'.'<br>';
echo '<br>'.'<a href="https://github.com/opsandrew/test/blob/master/image.php">Репозиторий</a>'.'<br>';

?>;
