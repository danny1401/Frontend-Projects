<?php

$kundenr = $_POST['kundenr'];

$teller = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM tbl_kunde_camping_danny WHERE KundeID = $kundenr"; 
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$KundeID[$teller]=$row["KundeID"]; $Fornavn[$teller]=$row["Fornavn"];
$Etternavn[$teller]=$row["Etternavn"]; $Gatenavn[$teller]=$row["Gatenavn"];
$Poststed[$teller]=$row["Poststed"]; $Postnr[$teller]=$row["Postnr"];
$Land[$teller]=$row["Land"]; $Ankomst[$teller]=$row["Ankomst"];
$Avreise[$teller]=$row["Avreise"]; $Betalt[$teller]=$row["Betalt"];
$Personer[$teller]=$row["Personer"]; $Kommentar[$teller]=$row["Kommentar"];
$SjekkInn[$teller]=$row["SjekkInn"]; $SjekkUt[$teller]=$row["SjekkUt"];
$teller= $teller+1; }

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
	height: 420px;
	width: 750px;
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
	top: -15px;
}
table {
	position: relative;
	top: -10px;
	margin-bottom: 45px;
}
td {
	background-color: white;
	padding: 5px 5px;
}
#title4 {
	position: relative;
	left: -90px;
}
#inputfelt1 {
	height: 25px;
	width: 83px;
	border: 1px solid black;
	border-radius: 6px;
	margin-left: 40px;
	margin-bottom: 10px;
}
#inputfelt4 {
	height: 25px;
	width: 83px;
	border: 1px solid black;
	border-radius: 6px;
	margin-left: 10px;
}
#inputfelt2 {
	position: relative;
	left: -60px;
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
	margin-left: 10px;
}
select, option {
	padding-left: 30px;
}
#inputfelt3, #option1 {
	padding-left: 18px;
}
#inputfelt2, #option2 {
	padding-left: 30px;
}
#knapp1 {
	position: absolute;
	top: 444px;
	left: 135px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 444px;
	right: 335px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#knapp3 {
	position: absolute;
	top: 444px;
	right: 135px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
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
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<a href="./campingplass.html" id="buttontitle"><h1 id="title">Campingplass</h1></a>
<h3 id="title1">Utfør utsjekking</h1>
<table>';

print'
<tr>
	<td>KundeID</td>
	<td>Fornavn</td>
	<td>Etternavn</td>
	<td>Gatenavn</td>
	<td>Poststed</td>
	<td>Postnr</td>
	<td>Land</td>
	<td>Ankomst</td>
	<td>Personer</td>
	<td>Kommentar</td>
	<td>SjekkInn</td>
</tr>';

$antallrow= $teller;

print '<form method="POST" action="./kunde_sjekk_ut_run.php" name="kunde">';
for ($a=0;$a<$antallrow;$a++) {
print'
<tr>
	<td>'.$KundeID[$a].'</td>
	<td>'.$Fornavn[$a].'</td>
	<td>'.$Etternavn[$a].'</td>
	<td>'.$Gatenavn[$a].'</td>
	<td>'.$Postnr[$a].'</td>
	<td>'.$Poststed[$a].'</td>
	<td>'.$Land[$a].'</td>
	<td>'.$Ankomst[$a].'</td>
	<td>'.$Personer[$a].'</td>
	<td>'.$Kommentar[$a].'</td>
	<td>'.$SjekkInn[$a].'</td>
</tr>
</table>';

print '<b>Avreise:</b>';

print '<select name="Day" id="inputfelt1">';
for ($d=1; $d<=31; $d++) {
print '<option value="'.$d.'">'.$d.'</option>';
}
print '</select><select name="Month" id="inputfelt4">';
for ($b=1; $b<=12; $b++) {
print '<option value="'.$b.'">'.$b.'</option>';
}
print '</select><select name="Year" id="inputfelt3">';
for ($c=2016; $c<=2026; $c++) {
print '<option value="'.$c.'" id="option1">'.$c.'</option>';
}
print '</select><p>';

print '
<b id="title4">Betaling:</b>
<select name="Betaling" id="inputfelt2">
	<option value="Kontant" class="option2">Kontant</option>
	<option value="Visa" class="option2">Visa</option>
	<option value="Master" class="option2">Master</option>
	<option value="Giro" class="option2">Giro</option>
</select><p>';		}

print ' 	
<input type="hidden" name="KundeID" value="'.$kundenr.'">
<input type="submit" value="Fullfør utsjekking" name="Utsjekking" id="knapp1">
';

Print '
<form>
<a href="./kunde_sjekk_inn.php"><button id="knapp2">Sjekk inn</button></a>
<a href="./campingplass.html"><button id="knapp3">Hjemmesiden</button></a>
</body>
</html>';
?>