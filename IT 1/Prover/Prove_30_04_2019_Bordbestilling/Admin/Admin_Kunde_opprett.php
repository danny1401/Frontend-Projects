<?php
$realdato = date("d/m/Y");
print'
<html>
<head>
<link rel="stylesheet" href="./style1.css">
<title>Bordbestilling</title>

<style>
body {
	background-image: url(./background.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title1 {
	width: 800px;
	padding: 20px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;
}
#title2 {
	width: 800px;
	padding: 20px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;
}
#title3 {
	position: relative;
	top: -20px;
	color: white;
	text-shadow: 2px 1px black;
}
#title4 {
	width: 800px;
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
	width: 800px;
	height: 100px;
	padding: 20px 30px;
	background-color: #505050;
	border: 2px solid white;
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
}
#boks1 {
	position: relative;
	top: -27px;
	width: 800px;
	height: auto;
	padding: 40px 30px;
	background-color: #505050;
	border: 2px solid white;		
	z-index: 1px;
}
#boks2 {
	position: relative;
	top: -26px;
	width: 780px;
	height: 600px;
	padding: 20px 40px;
	background-color: #505050;
	border: 2px solid white;
}
td {
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
}
#tabell {
	background-color: #101010;
	padding: 5px 5px;
}	
.inputfelt {
	height: 35px;
	width: 250px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	font-size: 16px;
	margin: 5px 10px;
}
#timeselect, #bordselect {
	margin-left: 20px;
	padding: 5px 5px;
	border: 1px solid black;
	font-size: 16px;
}
#knapp1 {
	position: relative;
	top: 40px;
	left: -32px;
	width: 864px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 20px;
	font-family: Georgia, serif;
	margin-bottom: 100px;
}
#knapp2 {
	position: relative;
	top: -28px;
	width: 864px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 20px;
	font-family: Georgia, serif;
	margin-bottom: 100px;
}
#knapp1:hover {
	background-color: black;
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
<br><br><br><br><br><br>
<center>
';

print '
<h1 id="title1">Reservasjon for den '.$realdato.'</h1>
<div id="boks">
<br>
<form name="personal" action="" method="POST"> 
<table>
<tr>
	<td>Tid:</td>
	<td><select name="time" id="timeselect">
		<option value="12:00">12:00 til 14:00</option>
		<option value="14:00">14:00 til 16:00</option>
		<option value="16:00">16:00 til 18:00</option>
		<option value="18:00">18:00 til 20:00</option>
		<option value="20:00">20:00 til 22:00</option>
		<option value="22:00">22:00 til 23:59</option>
	</select></td>
</tr>
</table>
<input type="submit" id="knapp1" value="Finn ditt bord" name="send_kunderegistrering">
</form>
</div>
<br><br><br><br>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Test = date("H:i");
$Tid = $_POST ['time'];
if ($Tid == "12:00") {
	$Start = "12:00";
	$Slutt = "14:00";
}
if ($Tid == "14:00") {
	$Start = "14:00";
	$Slutt = "16:00";
}
if ($Tid == "16:00") {
	$Start = "16:00";
	$Slutt = "18:00";
}
if ($Tid == "18:00") {
	$Start = "18:00";
	$Slutt = "20:00";
}
if ($Tid == "20:00") {
	$Start = "20:00";
	$Slutt = "22:00";
}
if ($Tid == "22:00") {
	$Start = "22:00";
	$Slutt = "23:59";
}

include ("./db_connection.php");
$sqlA = "SELECT * FROM tbl_bord_danny WHERE StartTid ='$Tid'";
$result = mysqli_query ($lenke, $sqlA);

if ($row=mysqli_fetch_array($result) == 0 ) {
print '
<div id="boks">
<h4>Det er dessverre ingen ledige bord på dette tidspunktet.</h4>
<h4 style="position:relative; top:-15px;">Prøv et annet tidspunkt</h4>
</div>';	}

else {
	if ($Test < $Tid) {		$tellerB = 0;
print '
<html>
<body>
<form method="POST" action="./Admin_Registrer_Kunde_Sjekk_inn.php" name="kunde">';

include ("./db_connection.php");

$sql = "SELECT * FROM tbl_bord_danny WHERE StartTid ='$Tid' AND Telefonnr IS NULL";

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$BordID[$tellerB]=$row["BordID"]; $Telefonnr[$tellerB]=$row["Telefonnr"];
$Antall_Bord[$tellerB]=$row["Antall_Bord"]; $Antall_Plasser[$tellerB]=$row["Antall_Plasser"];
$Handicap[$tellerB]=$row["Handicap"]; $Kommentar[$tellerB]=$row["Kommentar"]; $StartTid[$tellerB]=$row["StartTid"]; $SluttTid[$tellerB]=$row["SluttTid"];
$tellerB= $tellerB+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);
if ($tellerB <=0) {
print '
<div id="boks">
<h4>Det er dessverre ingen ledige bord på dette tidspunktet.</h4>
<h4 style="position:relative; top:-15px;">Prøv et annet tidspunkt</h4>
</div>';	}

if ($tellerB >= 1) {
print '
<h1 id="title2">Ledige bord</h1>
<div id="boks1">
<h3 id="title3">Det ser ut som at det er noen ledige bord Fra kl: '.$Start.' Til kl: '.$Slutt.'</h3>
<table>
<tr>
	<td id="tabell">BordID</td>
	<td id="tabell">Telefonnr</td>
	<td id="tabell">Antall Bord</td>
	<td id="tabell">Antall Plasser</td>
	<td id="tabell">Handicap</td>
	<td id="tabell">Kommentar</td>
	<td id="tabell">StartTid</td>
	<td id="tabell">SluttTid</td>
</tr>';

$antallrow= $tellerB;

for ($a=0;$a<=$antallrow;$a++) {
print'
<tr>
	<td id="tabell">'.$BordID[$a].'</td>
	<td id="tabell">'.$Telefonnr[$a].'</td>
	<td id="tabell">'.$Antall_Bord[$a].'</td>
	<td id="tabell">'.$Antall_Plasser[$a].'</td>
	<td id="tabell">'.$Handicap[$a].'</td>
	<td id="tabell">'.$Kommentar[$a].'</td>
	<td id="tabell">'.$StartTid[$a].'</td>
	<td id="tabell">'.$SluttTid[$a].'</td>
</tr>'; }

Print '</table><br><br>';

print '
<table>
<tr>
	<td>Velg ditt bord:</td>
	<td><select name="Utleieplassnr" id="bordselect">';

$antallrow1= $tellerB;

for ($b=0;$b<=$antallrow1;$b++) {
print '<option value="'.$BordID[$b].'">Bord: '.$BordID[$b].' - Fra: '.$StartTid[$b].' Til: '.$SluttTid[$b].'</option>'; }
Print '</select></td></tr></table></div>';

print '
<br>
<center>
<h1 id="title4">Fyll ut feltene nedenfor</h1>
<div id="boks2">
<table>
<tr>
	<td>Telefonnr:</td>
	<td><input type="text" name="Telefonnr" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Fødselsnr:</td>
	<td><input type="text" name="Fodselsnr" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Fornavn:</td>
	<td><input type="text" name="Fornavn" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Etternavn:</td>
	<td><input type="text" name="Etternavn" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Gatenavn:</td>
	<td><input type="text" name="Gatenavn" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Poststed:</td>
	<td><input type="text" name="Poststed" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Postnr:</td>
	<td><input type="text" name="Postnr" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Land:</td>
	<td><input type="text" name="Land" value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="text" name="Email"value="" class="inputfelt" required></td>
</tr>
<tr>
	<td>Antall Personer:</td>
	<td><select name="Personer" id="personselect" class="inputfelt" required>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
	</select></td>
</tr>
<tr>
	<td>Kommentar:</td>
	<td><input type="text" name="Kommentar" class="inputfelt" value=""></td>
</tr>
<tr>
	<td>Kvittering på Email?:</td>
	<td><select name="Kvittering" id="kvitteringselect" class="inputfelt" required>
			<option value="Nei">Nei</option>
			<option value="Ja">Ja</option>
	</select></td>
</tr>
</table>
</div>
<input type="submit" id="knapp2" value="Fullfør Bestilling" name="send_kunderegistrering">
</form>
</center>	                
';
}
}
	
if ($Test > $Tid) {	
Print '
<div id="boks">
<h4>Det er litt for sent for å bestille bord på denne tiden nå.</h4>
<h4 style="position:relative; top:-15px;">Prøv et annet tidspunkt</h4>
</div>';	}

}
}

print '
</div>
</div>
</center>
</body>
</html>
';
?>