<?php
$valg = '
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
		<a href="./Bordbestilling.php" class="meny"><strong>Home</strong></a>
		<a href="./Admin/kunde_opprett.php" class="meny"><strong>Bestilling</strong></a>
		<a href="./Kontakt.php" class="meny"><strong>Kontakt</strong></a>
		<a href="./Admin.php" class="meny"><strong>Admin</strong></a>
	</div>
	<h1 id="title">Bordbestilling</h1>
</div>
<br><br><br><br><br>
<center>
<h1 id="title1">Admin</h1>
<div id="boks">
<form action="" method="post" name="test">
<h2>Brukernavn:</h2>
<input type="brukernavn" name="brukernavn" autocomplete="off" id="felt" value=""> 
<br><br>
<h2>Passord:</h2>
<input type="password" name="passordet" autocomplete="off" id="felt" value=""> 
</div>
<input id="knapp1" type="reset" name="Reset" value="Reset">
<input id="knapp2" type="submit" name="submit" value="Logg inn">
</form>

</center>
</body>
</html>
';



$innskrevet_bruker = "";
$innskrevet_pw = "";
$riktig_bruker = "test";
$riktig_pw = "test";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valg = "";

$innskrevet_bruker = $_POST['brukernavn'];
$innskrevet_pw = $_POST['passordet'];

$innskrevet_bruker = str_replace("<"," &#60; ", $innskrevet_bruker);
$innskrevet_bruker = str_replace(">"," &#62; ", $innskrevet_bruker);
$innskrevet_bruker = str_replace("!"," utropstegn ", $innskrevet_bruker);
$innskrevet_bruker = str_replace("$"," &#36; ", $innskrevet_bruker);

$innskrevet_pw = str_replace("<"," &#60; ", $innskrevet_pw);
$innskrevet_pw = str_replace(">"," &#62; ", $innskrevet_pw);
$innskrevet_pw = str_replace("!"," utropstegn ", $innskrevet_pw);
$innskrevet_pw = str_replace("$"," &#36; ", $innskrevet_pw);

if ($innskrevet_bruker == $riktig_bruker && $innskrevet_pw == $riktig_pw) {
innlogget();
}
elseif ($innskrevet_bruker != $riktig_bruker && $innskrevet_pw != $riktig_pw) {
avvist();
}

elseif ($innskrevet_bruker == $riktig_bruker && $innskrevet_pw != $riktig_pw) {
avvist();
}

elseif ($innskrevet_bruker != $riktig_bruker && $innskrevet_pw == $riktig_pw) {
avvist();
}
}
function innlogget() {

print '
<html>
<head>
<meta http-equiv="refresh" content="0;url=./Admin/AdminIndex.php">
</head>
</html>
';

} 

function avvist() {;
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
#title2 {
	width: 490px;
	padding: 15px 30px;
	color: white;
	background-color: #a68826;
	border: 2px solid black;
	text-shadow: 2px 1px black;	
}
#boks {
	position: relative;
	top: -26px;
	width: 490px;
	height: 270px;
	padding: 20px 30px;
	color: white;
	background-color: #505050;
	border: 2px solid white;
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
<h1 id="title1">Admin</h1>
<div id="boks">
<br><br><br>
<h2>Feil brukernavn eller passord</h2>
<h3>Du får ikke tilgang til administrasjon over siden</h3>
</div>
<a href="./Admin.php"><button id="knapp">Prøv igjen</button></a>
</center>
</body>
</html>
';
}
print '<div id="valg">'.$valg.'</div>';

?>