<?php

$teller = 0;

include ("./db_connection.php");

$sql = 'SELECT PlassID, KundeID FROM tbl_plass_camping_danny WHERE KundeID != ""';

$resultat = mysqli_query($lenke, $sql);
while($row=mysqli_fetch_array($resultat)) {
$PlassID_A[$teller]=$row["PlassID"]; 
$KundeID_A[$teller]=$row["KundeID"];

$teller= $teller+1; 
}
mysqli_close($tilkopling);
mysqli_close($lenke);

if ($teller <=0) {
print "
<html>
<head>
<title>Campingplass</title>
<style>
body {
    background-image: url('camping2.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 40px;
	height: auto;
	width: 600px;
	padding: 50px 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
}
#buttontitle {
	position: relative;
	top: -45px;
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
	top: 30px;
}
#info {
	position: relative;
	top: 25px;
	font-size: 18px;
}
#knapp1 {
	position: relative;
	top: 440px;
	left: 155px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#knapp2 {
	position: relative;
	top: 440px;
	right: 155px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-top: 20px;
	margin-bottom: 20px;
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
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>

<center>
<div id='boks'>
<a href='./campingplass.html' id='buttontitle'><h1 id='title'>Campingplass</h1></a>
<h2 id='title1'>Utsjekking av kunde</h2>
<div id='info'>Alle har sjekket ut av plassene</div>
<a href='./kunde_sjekk_inn.php'><button id='knapp1'>Sjekk inn</button></a>
<a href='./campingplass.html'><button id='knapp2'>Hjemmesiden</button></a>
</body>
</html>
";
}

if ($teller >=1) {

$tellerA = 0;

include ("./db_connection.php");

for ($a=0; $a <=$teller; $a++) {

$Kunde = $KundeID_A[$a];

$sql = "SELECT * FROM tbl_kunde_camping_danny WHERE KundeID = $Kunde";
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$KundeID[$tellerA] = $row["KundeID"];
$Fornavn[$tellerA] = $row["Fornavn"];
$Etternavn[$tellerA] = $row["Etternavn"];
$Gatenavn[$tellerA] = $row["Gatenavn"];
$Poststed[$tellerA] = $row["Poststed"];
$Postnr[$tellerA] = $row["Postnr"];
$Land[$tellerA] = $row["Land"];
$Ankomst[$tellerA] = $row["Ankomst"];
$Avreise[$tellerA] = $row["Avreise"];
$Betalt[$tellerA] = $row["Betalt"];
$Personer[$tellerA] = $row["Personer"];
$Kommentar[$tellerA] = $row["Kommentar"];
$SjekkInn[$tellerA] = $row["SjekkInn"];
$SjekkUt[$tellerA] = $row["SjekkUt"];

$PlassID[$tellerA] = $PlassID_A[$a];

$tellerA = $tellerA+1; 
}

}

mysqli_close($tilkopling);
mysqli_close($lenke);

print'
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
	height: auto;
	width: 800px;
	padding: 30px 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
	margin-bottom: 45px;
}
#buttontitle {
	position: relative;
	top: -25px;
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
	top: 15px;
}
table {
	position: relative;
	top: 20px;
	left: -5px;
	margin-bottom: 50px;
}
.color {
	background-color: white;
	padding: 5px 5px;
}
#inputfelt4 {
	height: 25px;
	width: 89px;
	border: 1px solid black;
	border-radius: 6px;
	margin-left: 10px;
}
#inputfelt4, #option4 {
	padding-left: 30px;
}
#knapp1 {
	position: relative;
	top: 20px;
	right: 210px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-left: 20px;
	margin-right: 20px;
}
#knapp2 {
	position: relative;
	top: -31px;
	left: 78px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-left: 20px;
	margin-right: 20px;
}
#knapp3 {
	position: relative;
	top: -31px;
	left: 70px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
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
<h3 id="title1">Oversikt over innsjekkede kunder</h1>
<table>';

print'
<tr>
	<td class="color">KundeID</td>
	<td class="color">PlassID</td>
	<td class="color">Fornavn</td>
	<td class="color">Etternavn</td>
	<td class="color">Gatenavn</td>
	<td class="color">Poststed</td>
	<td class="color">Postnr</td>
	<td class="color">Land</td>
	<td class="color">Ankomst</td>
	<td class="color">Personer</td>
	<td class="color">Kommentar</td>
	<td class="color">SjekkInn</td>
</tr>';

$antallrow = $tellerA;

for ($b=0; $b <= $antallrow; $b++) {
print'
<tr>
	<td class="color">'.$KundeID[$b].'</td>
	<td class="color">'.$PlassID[$b].'</td>
	<td class="color">'.$Fornavn[$b].'</td>
	<td class="color">'.$Etternavn[$b].'</td>
	<td class="color">'.$Gatenavn[$b].'</td>
	<td class="color">'.$Postnr[$b].'</td>
	<td class="color">'.$Poststed[$b].'</td>
	<td class="color">'.$Land[$b].'</td>
	<td class="color">'.$Ankomst[$b].'</td>
	<td class="color">'.$Personer[$b].'</td>
	<td class="color">'.$Kommentar[$b].'</td>
	<td class="color">'.$SjekkInn[$b].'</td>
</tr>'; 
}
print '</table>';

print '
<form method="POST" action="./kunde_sjekk_ut_valgt.php" name="kunde">
<table>
<tr>
	<td>Velg kunde som skal sjekke ut:</td>
	<td><select name="kundenr" id="inputfelt4">
';

$antallrow1= $teller;

for ($b=0;$b<=$antallrow1;$b++) {
print'<option value="'.$KundeID[$b].'" id="option4">'.$KundeID[$b].'</option>'; }
Print '</select></td></tr></table>';

print '
<input type="submit" value="Utfør utsjekking" name="Utsjekking" id="knapp1">
</form>
<a href="./kunde_sjekk_inn.php"><button id="knapp2">Sjekk inn</button></a>
<a href="./campingplass.html"><button id="knapp3">Hjemmesiden</button></a>
</body>
</html>
';

}
?>