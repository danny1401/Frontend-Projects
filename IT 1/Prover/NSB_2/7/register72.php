<?php
$passasjer = fopen('./passasjerfil7.txt', 'r'); 
$passasjer = fread($passasjer,filesize('./passasjerfil7.txt'));
fclose($passasjer);

$seter = fopen('./seterfil7.txt', 'r'); 
$seter = fread($seter,filesize('./seterfil7.txt'));
fclose($seter);

$beregning = ($passasjer - $seter);
print '
<html>
<head>
<link rel="stylesheet" href="./../style/style.css" type="text/css">
<style>
#pos {
	position:relative;
	top:-40;
}
#pos3 {
	position:relative;
	top:-30;
}
</style>
</head>
<body>
<center id="pos">
<div class ="hovedboks11">
<center>
<h3>Informasjonen har blitt registrert selvom det er '.$beregning.' mer passansjerer enn seter. Det ser ut som at noen passansjerer må vente dersom noen er ikke til stedet ellers så må noen passansjerer bli flyttet til et annet tog eller stå.</h3>
<br>
<a href="./../Tog_passasjertall.php"><button id="knapp4">Angre alle Tog opptrettelsene</button></a>
<br>
<a href="./Tog_passasjertall7.php"><button id="knapp4">Angre den nylige tog opptrettelsen</button></a>
<br>
<a href="./../8/Tog_passasjertall8.php"><button id="knapp4">Skriv en ny Tog-logg</button></a>
<br>
<a href="./kvittering7.php"><button id="knapp4">Vis alle Tog-logg opptrettelsene</button></a>
<br>
</center>
</div>
</body>
</html>

';	