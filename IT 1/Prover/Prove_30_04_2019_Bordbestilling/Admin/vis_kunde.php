<?php
$tellerA = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM tbl_kunde_danny"; 
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$Telefonnr[$tellerA]=$row["Telefonnr"];
$BordID[$tellerA]=$row["BordID"]; 
$Fodselsnr[$tellerA]=$row["Fodselsnr"];
$Fornavn[$tellerA]=$row["Fornavn"]; 
$Etternavn[$tellerA]=$row["Etternavn"];
$Gatenavn[$tellerA]=$row["Gatenavn"]; 
$Poststed[$tellerA]=$row["Poststed"];
$Postnr[$tellerA]=$row["Postnr"]; 
$Land[$tellerA]=$row["Land"];
$Email[$tellerA]=$row["Email"]; 
$Kommentar[$tellerA]=$row["Kommentar"];
$Opprettet[$tellerA]=$row["Opprettet"];

$tellerA= $tellerA+1; }

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
}
#title1 {
	width: 1150px;
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
	width: 1150px;
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
<h1 id="title1">Alle kunder i databasen</h1>

<div id="boks">
<table>
';

print'
<tr>
	<td>Telefonnr</td>
	<td>BordID</td>
	<td>Fodselsnr</td>
	<td>Fornavn</td>
	<td>Etternavn</td>
	<td>Gatenavn</td>
	<td>Poststed</td>
	<td>Postnr</td>
	<td>Land</td>
	<td>Email</td>
	<td>Kommentar</td>
	<td>Opprettet</td>
</tr>';

$antallrow= $tellerA;

for ($a=0;$a<=$antallrow;$a++) {
print'
<tr> 
	<td>'.$Telefonnr[$a].'</td>
	<td>'.$BordID[$a].'</td>
	<td>'.$Fodselsnr[$a].'</td>
	<td>'.$Fornavn[$a].'</td>
	<td>'.$Etternavn[$a].'</td>
	<td>'.$Gatenavn[$a].'</td>
	<td>'.$Poststed[$a].'</td>
	<td>'.$Postnr[$a].'</td>
	<td>'.$Land[$a].'</td>
	<td>'.$Email[$a].'</td>
	<td>'.$Kommentar[$a].'</td>
	<td>'.$Opprettet[$a].'</td>
</tr>'; }

Print '
</table>
</div>
</center>
</body>
</html>
';
?>