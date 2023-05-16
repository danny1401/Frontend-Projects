<?php
$passasjer = fopen('./passasjerfil2.txt', 'r'); 
$passasjer = fread($passasjer,filesize('./passasjerfil2.txt'));
fclose($passasjer);

$seter = fopen('./seterfil2.txt', 'r'); 
$seter = fread($seter,filesize('./seterfil2.txt'));
fclose($seter);

$beregning = ($passasjer - $seter);
print '
<html>
<head>
<link rel="stylesheet" href="./../style/style.css" type="text/css">
<title>Tog og passasjertall</title>
</head>
<body>
<center>
<h1 id="title2">Tog og passasjertall</h1>
<div id="boks">
<br>
<h2>Informasjonen har blitt registrert</h2>
<h3><i>Det er '.$beregning.' mer passasjerer enn seter.</i>
<p>Det er visst fullt av passasjerer i dette toget, så<br> noen må dessverre vente eller ta et annet tog.</h3>

<a href="./../NSB_2_index1.php"><button id="knapp3">Angre alle tog-opprettelsene</button></a>
<br><br>
<a href="./NSB_2_index2.php"><button id="knapp3">Angre tog-opprettelsen</button></a>
<br><br>
<a href="./../3/NSB_2_index3.php"><button id="knapp3">Opprett et annet tog</button></a>
<br><br>
<a href="./kvittering2.php"><button id="knapp3">Vis alle tog-opprettelsene</button></a>
</div>
</center>
</body>
</html>
';
?>