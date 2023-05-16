<?php
$Telefonnr = $_POST ['Telefonnr'];
$Arsak = $_POST ['Arsak'];

$Opprettet = date("d/m/Y");

include ("./db_connection.php");

// kunde opprettes i database.
$sql = "INSERT INTO tbl_uonsket_danny (Telefonnr, Arsak, Opprettet)
VALUES ('$Telefonnr', '$Arsak', '$Opprettet')";
mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);


print '
<html>
<head>
<link rel="stylesheet" href="./style1.css">
<title>Bordbestilling</title>

<style>
body {
	background-image: url(./kontakt.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
	text-shadow: 2px 1px black;	
	overflow: hidden;
}
#title1 {
	width: 490px;
	padding: 15px 30px;
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
	height: 300px;
	padding: 10px 30px;
	color: white;
	background-color: #505050;
	border: 2px solid white;
	overflow: auto;
}
#knapp {
	position: relative;
	top: -53px;
	width: 554px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
	margin-top: 15px;
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
<br><br><br><br><br>
<center>
<h1 id="title1">Uønskede kunder</h1>

<div id="boks">
<h2>Telefonnummeret er registrert</h2>
<br><br><br>
<h2>Telefonnummeret er nå utestengt fra siden.</h2>
</div>

<a href="./Uonsket.php"><button id="knapp">Registrer på nytt</button></a>
</center>
</body>
</html>
';

?>