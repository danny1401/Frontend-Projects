<?php
print '
<html>
<head>
<link rel="stylesheet" href="./style1.css">
<title>Bordbestilling</title>

<style>
body {
	background-image: url(./../kontakt.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
	text-shadow: 2px 1px black;	
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
	height: 280px;
	padding: 20px 30px;
	color: white;
	background-color: #505050;
	border: 2px solid white;
	overflow: auto;
}
#felt {
	width: 300px;
	height: 30px;
	padding: 17px 10px;
	border: 1px solid black;
	font-family: Georgia, serif;
	font-size: 19px;
	text-align: center;
}
#knapp1 {
	position: absolute;
	top: 485px;
	left: 406px;
	width: 278px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
	margin-top: 15px;
}
#knapp2 {
	position: absolute;
	top: 485px;
	right: 406px;
	width: 278px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
	margin-top: 15px;
}
#knapp1:hover {
	background-color: black;	
}
#knapp2:hover {
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
<form method="POST" action="./Uonsket_Registrer.php" name= "uønsket" >
<h2>Telefonnr:</h2>
<input type="text" autocomplete="off" name="Telefonnr" value="" id="felt">
<br><br>
<h2>Årsak:</h2>
<input type="text" autocomplete="off" name="Arsak" value="" id="felt">
</div>

<input type="reset"value="Reset" name="fjern_skjemainfo" id="knapp1">
<input type="submit" value="Registrer uønskede" name="send_kunderegistrering" id="knapp2">
</form>
</center>
</body>
</html>
';

?>