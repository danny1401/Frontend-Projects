<?php
$passasjer = fopen('./passasjerfil8.txt', 'r'); 
$passasjer = fread($passasjer,filesize('passasjerfil8.txt'));

$seter = fopen('./seterfil8.txt', 'r'); 
$seter = fread($seter,filesize('seterfil8.txt'));

$test = ($passasjer/($seter/100))*3.6;

$eksempel = imagecreatetruecolor(100, 100);

imagesavealpha($eksempel, true);
$trans_colour = imagecolorallocatealpha($eksempel, 0, 0, 0, 127);
imagefill($eksempel, 0, 0, $trans_colour);

$blue     = imagecolorallocate($eksempel, 0, 0, 204);
$darkblue = imagecolorallocate($eksempel, 0, 0, 153);
$red      = imagecolorallocate($eksempel, 255, 0, 0);
$darkred  = imagecolorallocate($eksempel, 204, 0, 0);

    for ($i = 60; $i > 50; $i--) {
        imagefilledarc($eksempel, 50, $i, 100, 50, 0, $test, $darkblue, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, $test, 360, $darkred,  IMG_ARC_PIE);
    }

imagefilledarc($eksempel, 50, 50, 100, 50, 0, $test, $blue, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, $test, 360 , $red, IMG_ARC_PIE);

header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
fclose($passasjer);
fclose($seter);

?>