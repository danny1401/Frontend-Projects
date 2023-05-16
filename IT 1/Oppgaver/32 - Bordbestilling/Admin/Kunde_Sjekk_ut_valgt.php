<?php
$Telefonnr3 = $_POST ['Telefonnr3'];
include ("./db_connection.php");

$sql = "SELECT * FROM tbl_reservasjon_danny WHERE Telefonnr = '$Telefonnr3'"; 
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$Telefonnr[$tellerC]=$row["Telefonnr"]; 
$BordID[$tellerC]=$row["BordID"];
$Personer[$tellerC]=$row["Personer"];
$SjekkInn[$tellerC]=$row["SjekkInn"]; 
$SjekkUt[$tellerC]=$row["Ankomst"];
$StartDato[$tellerC]=$row["StartDato"]; 
$SluttDato[$tellerC]=$row["SluttDato"]; 
$tellerC= $tellerC+1; }

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
	padding: 30px 30px;
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
select {
	margin-left: 20px;
	padding: 5px 5px;
	border: 1px solid black;
	font-size: 16px;
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

<h2>Du har valgt kunden:</h2>
<form method="POST" action="./Kunde_Sjekk_ut_run.php" name="kunde">
<br>
<table>
<tr>
	<td>Telefonnr</td>
	<td>BordID</td>
	<td>Personer</td>
	<td>Bevegelsehemmende</td>
	<td>StartDato</td>
	<td>StartTid</td>
	<td>SluttDato</td>
	<td>SluttTid</td>
	<td>SjekkInn</td>
</tr>';
			
print'
<tr>
	<td>'.$Telefonnr[$a].'</td>
	<td>'.$BordID[$a].'</td>
	<td>'.$Personer[$a].'</td>	<input type="hidden" name="Personer" value="'.$Personer[$a].'">
	<td>'.$Bevegelsehemmende[$a].'</td><input type="hidden" name="Bevegelsehemmende" value="'.$Bevegelsehemmende[$a].'">
	<td>'.$StartDato[$a].'</td><input type="hidden" name="StartDato" value="'.$StartDato[$a].'">
	<td>'.$StartTid[$a].'</td><input type="hidden" name="StartTid" value="'.$StartTid[$a].'">
	<td>'.$SluttDato[$a].'</td><input type="hidden" name="SluttDato" value="'.$SluttDato[$a].'">
	<td>'.$SluttTid[$a].'</td><input type="hidden" name="SluttTid" value="'.$SluttTid[$a].'">
	<td>'.$SjekkInn[$a].'</td><input type="hidden" name="SjekkInn value="'.$SjekkInn[$a].'">
</tr>
</table>
<br><br>
<select name="Betaling">
		<option value = "kontant">Kontant</option>
		<option value = "Visa">Visa</option>
		<option value = "Master">Master</option>
		<option value = "Giro">Giro</option>
	</select>
</div>
<input type="hidden" name="BordID" value="'.$BordID[$a].'"><input type="hidden" name="Telefonnr3" value="'.$Telefonnr3.'">
<input type="submit" id="knapp" value="Sjekk ut" name="Utsjekking">
';

print '</form></body></html>';
?>