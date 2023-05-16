<?php

$Fornavn = $_POST ['Fornavn'];
$Etternavn = $_POST ['Etternavn'];
$Gatenavn = $_POST ['Gatenavn'];
$Poststed = $_POST ['Poststed'];
$Postnr = $_POST ['Postnr'];
$Land = $_POST ['Land'];
$Dag = $_POST ['Dag'];
$Month = $_POST ['Month'];
$Year = $_POST ['Year'];
$SjekkInn = $_POST ['SjekkInn'];
$Betalt = $_POST ['Betalt'];
$Personer = $_POST['Personer'];
$Kommentar = $_POST['Kommentar'];
$Utleieplassnr = $_POST['Utleieplassnr'];

$Ankomst = $Dag.'.'.$Month.'.'.$Year;

include ("./db_connection.php");

$sql = "INSERT INTO tbl_kunde_camping_danny (Fornavn, Etternavn, Gatenavn, Poststed, Postnr, Land, Ankomst, Personer, Kommentar, SjekkInn)
VALUES ('$Fornavn ', '$Etternavn', '$Gatenavn', '$Poststed', '$Postnr', '$Land', '$Ankomst','$Personer' , '$Kommentar', '$SjekkInn')";

mysqli_query ($lenke, $sql);
mysqli_close($tilkopling);

include ("./db_connection.php");

$sql = "SELECT KundeID FROM tbl_kunde_camping_danny ORDER BY KundeID DESC LIMIT 1";
$resultat = mysqli_query($lenke, $sql);
while($row=mysqli_fetch_array($resultat)) {
$KundeID=$row["KundeID"];
}

$sql = "UPDATE tbl_plass_camping_danny SET KundeID = '$KundeID' WHERE PlassID = '$Utleieplassnr'";
$resultat = mysqli_query($lenke, $sql);
mysqli_close ($tilkopling);
mysqli_close ($lenke);

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
	height: 520px;
	width: 500px;
	padding: 50px; 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
	margin-bottom: 45px;
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
	top: -25px;
}
td {
	position: relative;
	top: -35px;
	left: 5px;
	height: 27px;
	width: 100px;
	padding-left: 20px;
	padding-right: 20px;
}
#knapp1 {
	position: absolute;
	top: 554px;
	left: 105px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 554px;
	right: 105px;
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
<h3 id="title1">Ny kunde ble opprettet i tabellen</h3>

<table>
<tr>
	<td>Fornavn:</td>
	<td>'.$Fornavn.'</td>
</tr>
<tr>
	<td>Etternavn:</td>
	<td>'.$Etternavn.'</td>
</tr>
<tr>
	<td>Gatenavn:</td>
	<td>'.$Fornavn.'</td>
<tr>
</tr>
	<td>Poststed:</td>
	<td>'.$Fornavn.'</td>
<tr>
</tr>
	<td>Postnr:</td>
	<td>'.$Postnr.'</td>
<tr>
</tr>
	<td>Land:</td>
	<td>'.$Land.'</td>
<tr>
</tr>
	<td>Ankomst:</td>
	<td>'.$Ankomst.'</td>
<tr>
</tr>
	<td>Avreise:</td>
	<td>'.$Avreise.'</td>
<tr>
</tr>
	<td>Personer:</td>
	<td>'.$Personer.'</td>
<tr>
</tr>
	<td>Kommentar:</td>
	<td>'.$Kommentar.'</td>
</tr>
<tr>
	<td>Utleieplassnr:</td>
	<td>'.$Utleieplassnr.'</td>
</tr>
<tr>
	<td>KundeID:</td>
	<td>'.$KundeID.'</td>
</tr>
</table>

<a href="./kunde_sjekk_inn.php"><button id="knapp1">Sjekk inn ny kunde</button></a>
<a href="./kunde_sjekk_ut.php"><button id="knapp2">Oversikt over kunder</button></a>
</div>
</center>

</body>
</html>
';