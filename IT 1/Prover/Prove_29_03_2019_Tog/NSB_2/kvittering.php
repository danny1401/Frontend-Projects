<?php

$togrutenr = fopen('./togrutenr.txt', 'r'); 
$togrutenr = fread($togrutenr,filesize('./togrutenr.txt'));
fclose($togrutenr);

$tognr = fopen('./tognr.txt', 'r'); 
$tognr = fread($tognr,filesize('./tognr.txt'));
fclose($tognr);

$dato = fopen('./dato.txt', 'r'); 
$dato = fread($dato,filesize('./dato.txt'));
fclose($dato);

$tidspunkt = fopen('./tidspunkt.txt', 'r'); 
$tidspunkt = fread($tidspunkt,filesize('./tidspunkt.txt'));
fclose($tidspunkt);

$passasjer = fopen('./passasjerfil.txt', 'r'); 
$passasjer = fread($passasjer,filesize('./passasjerfil.txt'));
fclose($passasjer);

$seter = fopen('./seterfil.txt', 'r'); 
$seter = fread($seter,filesize('./seterfil.txt'));
fclose($seter);

$togtype = fopen('./togtype.txt', 'r'); 
$togtype = fread($togtype,filesize('./togtype.txt'));
fclose($togtype);

$beregning = round((($passasjer/$seter)*100),2);
$gjennomsnitt = (($passasjer) / ($seter))*100;
$total1 = ($passasjer); 
$total2 = ($seter);

print '
<html>
<head>
<link rel="stylesheet" href="./style/style.css" type="text/css">
<body>
<center>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>
<h1 id="title1">Tog og passasjertall</h1>
<a href="./register.php"><button id="knapp">Tilbake</button></a>
</center>

<div id="boks1">
	<h1>Toginfo 1</h1>
	<h3>Tog Nr: <span style="color:red;">'.$tognr.'</span>
	<h3>Togrute:<br>| <span style="color:blue;">'.$togrutenr.'</span>|</h3>
	<h3>Togtype: <span style="color:red;">'.$togtype.'</span></h3>
	<h3>Toget kjører klokken <span style="color:red;">'.$tidspunkt.'</span> på den <span style="color:blue;">'.$dato.'</span></h3>
	<h3>Det er <span style="color:blue;">'.$passasjer.' passasjerer</span> og <span style="color:red;">'.$seter.' seter</span> i toget.</h3>
	<h3>Passasjerene fyller <span style="color:red;">'.$beregning.'%</span> av de totale setene.</h3>
	<h2>Oversikt over passasjerer i forhold til seter:</h2>
	<h3 id="color1">Antall passasjerer:</h3>
	<h3 id="color2">Antall seter:</h3>
	<img id="sektordiagram" src="./sektor.php"></img>
</div>
	
<div id="boks2">
	<h1>Toginfo 2</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>
	
<div id="boks3">
	<h1>Toginfo 3</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>
	
<div id="boks4">
	<h1>Toginfo 4</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>

<div id="boks5">
	<h1>Toginfo 5</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>
	
<div id="boks6">
	<h1>Toginfo 6</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>
	
<div id="boks7">
	<h1>Toginfo 7</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>
	
<div id="boks8">
	<h1>Toginfo 8</h1>
	<a href="./2/NSB_2_index2.php"><button id="knapp1">Opprett nytt tog</button></a>
</div>

<div id="boks9">
	<h1>Sektordiagram</h1>
	<h3>Passasjerene fyller gjennomsnittlig '.$gjennomsnitt.'% av de totale setene på alle tog som er registert. </h3>
	<h3>Det er til sammen <span style="color:blue;">'.$total1.' passasjerer</span> og
		<span style="color:red;">'.$total2.' seter</span> på alle tog som er registert. </h3>
	<h3> Her er en sektordiagram som viser gjennomsnitt av passasjerer i forhold til antall seter på alle tog som er registrert fra alle tog-opprettelsene:</h3>
	<h3 id="color1">Antall passasjerer:</h3>
	<h3 id="color2">Antall seter:</h3>
	<img id="sektordiagram" src="./gjennomsnitt.php"></img>
</div>
	
<div id="boks10">
	<h1>Søylediagram</h1>
	<h3>Her er en søylediagram som viser antall passasjerer i forhold til antall seter på alle tog som er registrert:</h3>
	Tog 1: <h3 id="chart" style="width: ' .$beregning.'px;">'.$beregning.'%</h3>
</div>	
</body>
</html>
';
?>