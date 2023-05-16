<?php
$tellerB = 0;

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
	top: -27px;
	width: 800px;
	height: auto;
	padding: 40px 30px;
	background-color: #505050;
	border: 2px solid white;		
	z-index: 1px;
	margin-bottom: 100px;
}
td {
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
	background-color: #101010;
	padding: 5px 5px;
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
<h1 id="title1">Alle ledige bord</h1>
<div id="boks">
';

include ("./db_connection.php");

$sql = 'SELECT * FROM tbl_bord_danny WHERE Telefonnr IS NULL'; 

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$BordID[$tellerB]=$row["BordID"]; $Telefonnr[$tellerB]=$row["Telefonnr"];
$Antall_Bord[$tellerB]=$row["Antall_Bord"]; $Antall_Plasser[$tellerB]=$row["Antall_Plasser"];
$Handicap[$tellerB]=$row["Handicap"]; $Kommentar[$tellerB]=$row["Kommentar"];
$tellerB= $tellerB+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);

if ($tellerB <=0) {
	print '<h2>Det er ingen ledige bord på dette tidspunktet.</h2>';
}
if ($tellerB >= 1) {
print '<table>';

print '
<tr>
	<td>BordID</td>
	<td>Telefonnr</td>
	<td>Antall Bord</td>
	<td>Antall Plasser</td>
	<td>Handicap</td>
	<td>Kommentar</td>
</tr>';

$antallrow= $tellerB;

for ($a=0;$a<=$antallrow;$a++) {
print'
<tr>
	<td>'.$BordID[$a].'</td>
	<td>'.$Telefonnr[$a].'</td>
	<td>'.$Antall_Bord[$a].'</td>
	<td>'.$Antall_Plasser[$a].'</td>
	<td>'.$Handicap[$a].'</td>
	<td>'.$Kommentar[$a].'</td>
</tr>'; }

Print '</table>';
}
print '
</div>
</center>
</body>
</html>
';
?>