<?php 
$eksempel = fopen("./Oppgave 27 - CSV.csv","r");

$b = 0; 

while(! feof($eksempel))
	{
	$minlist = fgetcsv($eksempel,1000,";");
	$liste[$b] = $minlist;
	
	$b = $b+1;
	} 
	$year = $liste[0];
	$bronse = $liste[1];
	$silver = $liste[2];
	$gull = $liste[3];
	$samlet = $liste[4];
fclose($eksempel);

$antall_year = count($year);
$antall_bronse = count($bronse);
$antall_silver = count($silver);
$antall_gull = count($gull);
$antall_samlet = count($samlet);

If($antall_kvinner != $antall_valg||$antall_valg != $antall_storting){
print "Feil ved antall i array.";
}
else {
print '
<html>
<head>
<style>
body {
	background-color: grey;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: 100%;
	overflow: hidden;
}
#boks {
	position: relative;
	top: -12px;
	height: 870px;
	width: 520px;
	padding: 40px;
	color: black;
	border: 4px solid black;
	background-color: lightgrey;
}
#title1 {
	position: relative;
	top: -65px;
	left: -40px;
	width: 600px;
	padding-top: 30px;
	padding-bottom: 30px;
	background-color: #B8B8B8;
	border-bottom: 3px solid black;	
	font-size: 35px;
	text-align: center;
}
#tabell {
	position: relative;
	top: -90px;
}
#chart{
	position: relative;
	left: 20px;
	font-size: 10px;
	background-color: steelblue;
	text-align: right;
	padding: 3px;
	margin: 1px;
	color: white;
}
#bilde1 {
	position: absolute;
	top: -2px;
	left: -2px;
	height: 323px;
	width: 380px;
	border: 2px solid black;
}
#bilde2 {
	position: absolute;
	top: 324px;
	left: -2px;
	height: 300px;
	width: 380px;
	border: 2px solid black;
}
#bilde3 {
	position: absolute;
	top: -2px;
	right: -2px;
	height: 323px;
	width: 380px;
	border: 2px solid black;
}
#bilde4 {
	position: absolute;
	top: 324px;
	right: -2px;
	height: 300px;
	width: 380px;
	border: 2px solid black;
}
#BackButton {
	position: absolute;
	top: 5px;
	left: 10px;
	border: 0; 
	height: 32; 
	width: 32;
	z-index: 2;
}
</style>
</head>
<body background="./background.jpg">
<center>

<img src="./snowboard.jpg" id="bilde1"></img>
<img src="./curling.jpg" id="bilde2"></img>
<img src="./skiing.jpg" id="bilde3"></img>
<img src="./skating.jpg" id="bilde4"></img>

<div id="boks">
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<h1 id="title1"> Norske medaljer fra Vinter-OL </h1>
<br><br>
<table id="tabell">
<tr><td><td><h3>| Vinterlekene (år) |</h3></td><td><h3>| Bronse |</h3></td><td><h3>| Sølv |</h3></td><td><h3>| Gull |</h3></td><td><h3>| Samlede |</h3></td></td>
</tr>
';
for($a=0; $a < $antall_year; $a = $a+1) {
print '<tr><td><td><center>'.$year[$a].'</center></td>';
print '<td><center id="chart"  style="width: '.($bronse[$a]+10).'px;">'.$bronse[$a].'</center></td>';
print '<td><center id="chart"  style="width: '.($silver[$a]+10).'px;">'.$silver[$a].'</center></td>';
print '<td><center id="chart"  style="width: '.($gull[$a]+10).'px;">'.$gull[$a].'</center></td>';
print '<td><center id="chart"  style="width: '.($samlet[$a]+10).'px;">'.$samlet[$a].'</center></td></td>';

print '</div></center></td>';
print '</td></tr>';
}
print '
</table>
</center>
</body>
</html>';
}
        
?>