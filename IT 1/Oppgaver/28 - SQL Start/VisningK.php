<?php

include ("./db_connection.php");

print'
<html>
<head>
<style>
body {
	background-image: url(./mall.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title {
	position: relative;
	top: 45px;
	padding-top: 20px;
	padding-bottom: 20px;
	width: 1000px;
	background-color: gainsboro;
	border: 2px solid black; 
	font-size: 40px;
}
#boks {
	position: relative;
	top: 15px;
	height: 415px;
	width: 900px;
	padding: 5px 50px;
	background-color: white;
	border: 2px solid black; 
	overflow: auto;
}
td {
	position: relative;
	top: 10px;
	padding: 10px 15px;
	background-color: gainsboro;
	font-weight: 700;
}
#knapp1 {
	position: relative;
	top: 40px;
	height: 35px;
	width: 190px;
	background-color: gainsboro;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 50px;
}
#BackButton {
	position: absolute;
	top: 20px;
	left: 20px;
	height: 73; 
	width: 77;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>

<center>
<h1 id="title">Handletur med kvittering</h1>
<div id="boks">
<table>
<tr>
	<td>Kvitteringsnummer</td>
	<td>Navn</td>
	<td>Dato</td>
	<td>Butikknavn</td>
	<td>Vare</td>
	<td>Pris</td>
	<td>Betalingsmetode</td>
</tr>
';

$sql = "SELECT Kvitteringsnummer, Navn, Dato, Butikknavn, Vare, Pris, Betalingsmetode FROM tbl_kvittering_danny";

$resultat = mysqli_query($lenke, $sql);

while ($row = mysqli_fetch_array($resultat)){

$Kvitteringsnummer = $row["Kvitteringsnummer"];
$Navn = $row["Navn"];
$Dato = $row["Dato"];
$Butikknavn = $row["Butikknavn"];
$Vare= $row["Vare"];
$Pris= $row["Pris"];
$Betalingsmetode = $row["Betalingsmetode"];

print '
<tr>
	<td>' .$Kvitteringsnummer. '</td>
	<td>' .$Navn. '</td>
	<td>' .$Dato. '</td>
	<td>' .$Butikknavn. '</td>
	<td>' .$Vare. '</td>
	<td>' .$Pris. 'kr</td>
	<td>' .$Betalingsmetode. '</td>
</tr>';

}

mysqli_close($tilkopling);

print '
</table>
<a href="./Kvittering.php"><button id="knapp1">Registrer ny kvittering</button></a>
</div>
</center>
</body>
</html>
';

?>

