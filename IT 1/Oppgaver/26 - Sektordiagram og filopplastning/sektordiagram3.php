<?php

// Lager bilde, tall angir størrelse i pixler
$eksempel = imagecreatetruecolor(100, 100);

//Lager gjennomsiktig bakgrunn
imagesavealpha($eksempel, true);
$trans_colour = imagecolorallocatealpha($eksempel, 0, 0, 0, 127);
imagefill($eksempel, 0, 0, $trans_colour);

//Farger i RGB
$yellow     = imagecolorallocate($eksempel, 251, 189, 80);
$darkyellow = imagecolorallocate($eksempel, 251, 179, 55);
$green     = imagecolorallocate($eksempel, 0, 102, 34);
$darkgreen = imagecolorallocate($eksempel, 0, 77, 26);
$red      = imagecolorallocate($eksempel, 128, 0, 0);
$darkred  = imagecolorallocate($eksempel, 102, 0, 0);

//Lager 3D effekt
    for ($i = 60; $i > 50; $i--) {
        imagefilledarc($eksempel, 50, $i, 100, 50, 130, 103, $darkred,  IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 89, 116, $darkyellow, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 116, 136, $darkgreen, IMG_ARC_PIE);
    }

imagefilledarc($eksempel, 50, 50, 100, 50, 130, 103, $red, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 89, 116, $yellow, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 116, 136, $green, IMG_ARC_PIE);
//imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

//Flush bildet (send det til skjerm).
header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
?>