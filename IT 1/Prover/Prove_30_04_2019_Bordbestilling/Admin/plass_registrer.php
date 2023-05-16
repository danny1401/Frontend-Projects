<?php
$BordID = $_POST ['BordID'];
$Antall_Bord = $_POST ['Antall_Bord'];
$Antall_Plasser = $_POST ['Antall_Plasser'];
$Handicap = $_POST ['Handicap'];
$Kommentar = $_POST ['Kommentar'];
$StartTid = $_POST ['StartTid'];
$SluttTid = $_POST ['SluttTid'];

include ("./db_connection.php");

$sql = "INSERT INTO tbl_bord_danny (BordID, Antall_Bord, Antall_Plasser, Handicap, Kommentar, StartTid, SluttTid)
VALUES ('$BordID', '$Antall_Bord', '$Antall_Plasser', '$Handicap', '$Kommentar', '$StartTid', '$SluttTid')";

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);


print '
<html>
<head>
<link rel="stylesheet" href="./style1.css">
<title>Bordbestilling</title>
<style>
body {
	background-image: url(./background1.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title1 {
	width: 490px;
	padding: 20px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;	
}
#boks {
	position: relative;
	top: -26px;
	width: 490px;
	height: 295px;
	padding: 10px 30px;
	color: white;
	background-color: #505050;
	border: 2px solid white;
	text-align: center;
	overflow: auto;
}
td {	
	position: relative;
	left: 30px;
	height: 41px;
	width: 250px;
	font-size: 16px;
	margin: 5px 10px;
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
}
#knapp {
	position: relative;
	top: -28px;
	width: 554px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
}
#knapp:hover {
	background-color: black;	
}
:focus {
    outline: none !important;
}
</style>
</head>
<body>
<div class="fixed" id="bar">
	<div class="buttons">
		<a href="./AdminIndex.php" class="meny"><strong>Home</strong></a>
		<a href="./plass_opprett.php" class="meny"><strong>Opprett Bord</strong></a>
		<a href="./Admin_Kunde_opprett.php" class="meny"><strong>Bestilling</strong></a>
		<a href="./Kunde_Sjekk_ut.php" class="meny"><strong>Sjekk ut kunde</strong></a>
		<a href="./Uonsket.php" class="meny"><strong>Uønsket</strong></a>
		<a href="./vis_kunde.php" class="meny"><strong>Vis kunder</strong></a>
		<a href="./vis_ledige_bord.php" class="meny"><strong>Vis ledige bord</strong></a>
		<a href="./../Bordbestilling.php" class="meny"><strong>Logg ut</strong></a>
	</div>
	<h1 id="title">Bordbestilling</h1>
</div>
<center>
<br><br><br><br>
<h1 id="title1">Bordet ble opprettet</h1>

<div id="boks">
<br>
<table>
<tr>
	<td>Bord ID:</td>
	<td>'.$BordID.'</td>
</tr>
<tr>
	<td>Antall Bord:</td>
	<td>'.$Antall_Bord.'</td>
</tr>
<tr>
	<td>Antall Plasser:</td>
	<td>'.$Antall_Plasser.'</td>
</tr>
<tr>
	<td>Handicap:</td>
	<td>'.$Handicap.'</td>
</tr>
<tr>
	<td>Start Tid:</td>
	<td>'.$StartTid.'</td>
</tr>
<tr>
	<td>Slutt Tid:</td>
	<td>'.$SluttTid.'</td>
</tr>
</table>
</div>

<a href="./plass_opprett.php"><button id="knapp">Opprett nytt bord</button></a>
</center>
</body>
</html>
';

?>