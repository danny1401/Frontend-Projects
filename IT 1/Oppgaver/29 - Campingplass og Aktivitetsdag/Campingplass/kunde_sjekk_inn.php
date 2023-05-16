<?php

print '
<html>
<head>
<title>Campingplass</title>
<style>
body {
    background-image: url("camping2.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 40px;
	height: 420px;
	width: 750px;
	padding: 140px 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
	margin-bottom: 45px;
}
#buttontitle {
	position: relative;
	top: -135px;
	color: black;
	text-decoration: none;
}
#title {
	width: 300px;
	padding: 5px 0px;
	border-radius: 8px;
	background-color: white;
	border: 2px solid black;
}
#title1 {
	position: relative;
	top: -120px;
}
#felt {
	position: relative;
	top: -95px;
	margin-bottom: 100px;
}
.undertitle {
	width: 100px;
	margin-bottom: 25px;
}
.inputfelt {
	height: 25px;
	width: 250px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 6px;
	font-size: 14px;
}
#inputfelt1 {
	height: 25px;
	width: 83px;
	border: 1px solid black;
	border-radius: 6px;
}
#inputfelt2 {
	height: 25px;
	width: 120px;
	border: 1px solid black;
	border-radius: 6px;
}
#inputfelt3 {
	height: 25px;
	width: 83px;
	border: 1px solid black;
	border-radius: 6px;
}
select, option {
	padding-left: 30px;
}
#inputfelt3, #option1 {
	padding-left: 18px;
}
#inputfelt2, #option2 {
	padding-left: 45px;
}
#text {
	height: 60px;
	width: 250px;
	resize: none;
}
#knapp1 {
	position: absolute;
	top: 444px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#knapp2 {
	position: absolute;
	top: 554px;
	right: 340px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp3 {
	position: absolute;
	top: 554px;
	right: 140px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp {
	position: relative;
	left: -220px;
	width: 170px;
}
#knapper {
	position: relative;
	top: -257px;
	left: 102px;
	width: 500px;
}
#BackButton {
	position: absolute;
	top: 13px;
	left: 15px;
	height: 63; 
	width: 67;
}
</style>
</head>
<body>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<a href="./campingplass.html" id="buttontitle"><h1 id="title">Campingplass</h1></a>
<h3 id="title1">Innsjekking av kunde</h3>

<form method="POST" action="./kunde_sjekk_inn_registrere.php" name="kunde" id="felt">
<table>
<tr>
	<td class="undertitle">Fornavn</td>
	<td><input type="text" name="Fornavn" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Etternavn</td>
	<td><input type="text" name="Etternavn" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Gatenavn</td>
	<td><input type="text" name="Gatenavn" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Poststed</td>
	<td><input type="text" name="Poststed" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Postnr</td>
	<td><input type="text" name="Postnr" size="40" value="" class="inputfelt"></td></tr>
<tr>
	<td>Land</td>
	<td><input type="text" name="Land" size="40" value="" class="inputfelt"></td></tr>
<tr>
	<td>Ankomst</td>
	<td><select name="Dag" id="inputfelt1">';

for ($a=1; $a<=31; $a++) {
print '<option value="'.$a.'">'.$a.'</option>';
}
print '</select><select name="Month" id="inputfelt1">';
for ($b=1; $b<=12; $b++) {
print '<option value="'.$b.'">'.$b.'</option>';
}
print '</select><select name="Year" id="inputfelt3">';
for ($c=2018; $c<=2026; $c++) {
print '<option value="'.$c.'" id="option1">'.$c.'</option>';
}
print '</select></td></tr>';

print '<input type="hidden" name="SjekkInn" value="Ja">';

print '
<tr>
	<td>Personer</td>
	<td><select name="Personer" id="inputfelt2">
		<option value="1" class="option2">1</option><option value="2">2</option>
		<option value="1" class="option2">3</option><option value="2">4</option>
		<option value="1" class="option2">5</option><option value="2">6</option>
	</select></td>
</tr>
<tr>
	<td>Kommentar</td>
	<td><textarea id="text" name="Kommentar" value="" class="inputfelt"></textarea></td>
</tr>
</table>';

include './ledige_utleieplasser.php';

print '
<div id="knapp"><input type="submit" value="Fullfør innsjekking" name="Innsjekking" id="knapp1"></div>
</form>';

print '
</div>
<div id="knapper">
<a href="./kunde_sjekk_ut.php"><button id="knapp2">Sjekk ut</button></a>
<a href="./campingplass.html"><button id="knapp3">Hjemmesiden</button></a>
</div>
</center>
</html>
</body>
';

?>