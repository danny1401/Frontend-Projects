
<?php

$mottaker = "bordbestilling@epost.no";

$avsender = $_GET['felt1']; 
$subject = $_GET['felt2'];
$innhold = $_GET['felt3'];

$mottaker = $mottaker;
$heading = $subject;
$melding = $innhold;

$to = $avsender;
$subject = $heading . "\r\n";
$txt = $melding;
$headers = "From:". $avsender;


mail($to,$subject,$txt,$headers);
print '
<html>
<head>
<link rel="stylesheet" href="./style.css">
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
	height: 295px;
	padding: 10px 30px;
	color: white;
	background-color: #505050;
	border: 2px solid white;
	text-align: left;
	overflow: auto;
}
#knapp {
	position: relative;
	top: -43px;
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
		<a href="./Bordbestilling.php" class="meny"><strong>Home</strong></a>
		<a href="./Kunde_opprett.php" class="meny"><strong>Bestilling</strong></a>
		<a href="./Kontakt.php" class="meny"><strong>Kontakt</strong></a>
		<a href="./Admin.php" class="meny"><strong>Admin</strong></a>
	</div>
	<h1 id="title">Bordbestilling</h1>
</div>
<br><br><br><br><br>
<center>
<h1 id="title1">Din e-post har blitt sendt</h1>

<div id="boks">
<h3>Avsender: '.$avsender.'</h3>
<h3>Mottaker: '.$mottaker.'</h3>
<h3>Navn: '.$subject.'</h3>
<h3>Innhold: '.$innhold.'</h3>
</div>
<a href="./Kontakt.php"><button id="knapp">Tilbake til siden</button></a>
</center>
</body>
</html>
';
?>