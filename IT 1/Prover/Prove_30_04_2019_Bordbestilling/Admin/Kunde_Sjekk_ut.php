<?php
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
	color: white;
	text-shadow: 2px 1px black;
}
#title1 {
	width: 1100px;
	padding: 20px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;
}
#boks {
	position: relative;
	top: -27px;
	width: 1100px;
	height: auto;
	padding: 40px 30px;
	background-color: #505050;
	border: 2px solid white;
}
td {
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
	background-color: #101010;
	padding: 5px 5px;
}
#knapp {
	position: relative;
	top: -29px;
	width: 1164px;
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
<br><br><br><br><br>
<center>
<h1 id="title1">Sjekk ut kunder</h1>
<div id="boks">
';

print '<form method="POST" action="./Kunde_Sjekk_ut_valgt.php" name="" >';
include './reservasjoner.php';

if ($tellerC <=0) {
print "<center><h2>Ingen har reservert et bord</h2></center>";
}
if ($tellerC >=1) {

print '
</div>
<input type="submit" id="knapp" value="Sjekk ut kunde" name="Utsjekking">
</form>
</body>
</html>
';
}
?>