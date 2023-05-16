<?php

$PlassID = $_POST ['PlassID'];
$Lengde = $_POST ['Lengde'];
$Bredde = $_POST ['Bredde'];
$Handicap = $_POST ['Handicap'];
$Husdyr = $_POST ['Husdyr'];
$Elektrisitet = $_POST ['Elektrisitet'];
$Vann = $_POST ['Vann'];
$Type = $_POST ['Type'];
$Kommentar = $_POST ['Kommentar'];

include ("./db_connection.php");

// plass opprettes i database.
$sql = "INSERT INTO tbl_plass_camping_danny (PlassID, Lengde, Bredde, Handicap, Husdyr, Elektrisitet, Vann,Type, Kommentar)
VALUES ('$PlassID', '$Lengde', '$Bredde', '$Handicap', '$Husdyr', '$Elektrisitet','$Vann', '$Type', '$Kommentar')";

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

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
	width: 500px;
	padding: 50px; 50px;
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
	top: -30px;
}
#tabell {
	position: relative;
	top: 10px;
}
td {
	position: relative;
	top: -44px;
	left: 5px;
	height: 25px;
	width: 100px;
	padding-left: 20px;
	padding-right: 20px;
}
#knapp1 {
	position: absolute;
	top: 454px;
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
	top: 454px;
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
<h3 id="title1">Ny plass ble opprettet i tabellen</h3>

<table id="tabell">
<tr>
	<td>Plass ID:</td>
	<td>'.$PlassID.'</td>
</tr>
<tr>
	<td>Lengde:</td>
	<td>'.$Lengde.'</td>
</tr>
<tr>
	<td>Bredde:</td>
	<td>'.$Bredde.'</td>
<tr>
</tr>
	<td>Handicap:</td>
	<td>'.$Handicap.'</td>
<tr>
</tr>
	<td>Husdyr:</td>
	<td>'.$Husdyr.'</td>
<tr>
</tr>
	<td>Elektrisitet:</td>
	<td>'.$Elektrisitet.'</td>
<tr>
</tr>
	<td>Vann:</td>
	<td>'.$Vann.'</td>
<tr>
</tr>
	<td>Type:</td>
	<td>'.$Type.'</td>
<tr>
</tr>
	<td>Kommentar:</td>
	<td>'.$Kommentar.'</td>
</tr>
</table>

<a href="./opprett_plass_skjema.php"><button id="knapp1">Opprett ny plass</button></a>
<a href="./plass_vis_alle.php"><button id="knapp2">Se på plasstabellen</button></a>
</div>
</center>

</body>
</html>
';
?>