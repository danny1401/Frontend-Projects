<?php
$passasjer = fopen('./../passasjerfil.txt', 'r'); 
$passasjer = fread($passasjer,filesize('./../passasjerfil.txt'));
fclose($passasjer);
$seter = fopen('./../seterfil.txt', 'r'); 
$seter = fread($seter,filesize('./../seterfil.txt'));
fclose($seter);

$passasjer2 = fopen('./../2/passasjerfil2.txt', 'r'); 
$passasjer2 = fread($passasjer2,filesize('./../2/passasjerfil2.txt'));
fclose($passasjer2);
$seter2 = fopen('./../2/seterfil2.txt', 'r'); 
$seter2 = fread($seter2,filesize('./../2/seterfil2.txt'));
fclose($seter2);

$passasjer3 = fopen('./../3/passasjerfil3.txt', 'r'); 
$passasjer3 = fread($passasjer3,filesize('./../3/passasjerfil3.txt'));
fclose($passasjer3);
$seter3 = fopen('./../3/seterfil3.txt', 'r'); 
$seter3 = fread($seter3,filesize('./../3/seterfil3.txt'));
fclose($seter3);

$passasjer4 = fopen('./../4/passasjerfil4.txt', 'r'); 
$passasjer4 = fread($passasjer4,filesize('./../4/passasjerfil4.txt'));
fclose($passasjer4);
$seter4 = fopen('./../4/seterfil4.txt', 'r'); 
$seter4 = fread($seter4,filesize('./../4/seterfil4.txt'));
fclose($seter4);

$passasjer5 = fopen('./../5/passasjerfil5.txt', 'r'); 
$passasjer5 = fread($passasjer5,filesize('./../5/passasjerfil5.txt'));
fclose($passasjer5);
$seter5 = fopen('./../5/seterfil5.txt', 'r'); 
$seter5 = fread($seter5,filesize('./../5/seterfil5.txt'));
fclose($seter5);

$passasjer6 = fopen('./../6/passasjerfil6.txt', 'r'); 
$passasjer6 = fread($passasjer6,filesize('./../6/passasjerfil6.txt'));
fclose($passasjer6);
$seter6 = fopen('./../6/seterfil6.txt', 'r'); 
$seter6 = fread($seter6,filesize('./../6/seterfil6.txt'));
fclose($seter6);

$passasjer7 = fopen('./passasjerfil7.txt', 'r'); 
$passasjer7 = fread($passasjer7,filesize('./passasjerfil7.txt'));
fclose($passasjer7);
$seter7 = fopen('./seterfil7.txt', 'r'); 
$seter7 = fread($seter7,filesize('./seterfil7.txt'));
fclose($seter7);

$test = (($passasjer + $passasjer2 + $passasjer3 + $passasjer4 + $passasjer5 + $passasjer6 + $passasjer7) / (($seter + $seter2 + $seter3 + $seter4 + $seter5 + $seter6 + $seter7)/100))*3.6;

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