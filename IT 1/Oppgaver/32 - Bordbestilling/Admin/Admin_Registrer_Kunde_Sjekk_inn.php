<?php
$Telefonnr = $_POST ['Telefonnr'];
$BordID = $_POST ['BordID'];
$SjekkInn = "Sjekket Inn";
$Betalt = $_POST ['Betalt'];
$Telefonnr2 = $_POST['Telefonnr2'];
$Utleieplassnr = $_POST['Utleieplassnr'];
$Innsjekking = $_POST['Innsjekking'];
$realdato = $_POST['realdato'];
$Kvittering = $_POST['Kvittering'];

$Personer = $_POST['Personer'];
$Fodselsnr = $_POST ['Fodselsnr'];
$Fornavn = $_POST ['Fornavn'];
$Etternavn = $_POST ['Etternavn'];
$Gatenavn = $_POST ['Gatenavn'];
$Poststed = $_POST ['Poststed'];
$Postnr = $_POST ['Postnr'];
$Land = $_POST ['Land'];
$Email = $_POST ['Email'];
$Kommentar = $_POST['Kommentar'];
$Opprettet = date("d/m/Y");
$StartDato = date("d/m/Y");
$SluttDato= date("d/m/Y");


if ($Utleieplassnr == "A1" || $Utleieplassnr == "B1" || $Utleieplassnr == "C1" || $Utleieplassnr == "D1" || $Utleieplassnr == "E1" || $Utleieplassnr == "F1" || $Utleieplassnr == "G1" || $Utleieplassnr == "H1" || $Utleieplassnr == "I1" || $Utleieplassnr == "J1" || $Utleieplassnr == "K1" || $Utleieplassnr == "L1" || $Utleieplassnr == "M1") {
$StartTid = "12:00";
$SluttTid ="14:00";
}
if ($Utleieplassnr == "A2" || $Utleieplassnr == "B2" || $Utleieplassnr == "C2" || $Utleieplassnr == "D2" || $Utleieplassnr == "E2" || $Utleieplassnr == "F2" || $Utleieplassnr == "G2" || $Utleieplassnr == "H2" || $Utleieplassnr == "I2" || $Utleieplassnr == "J2" || $Utleieplassnr == "K2" || $Utleieplassnr == "L2" || $Utleieplassnr == "M2") {
$StartTid = "14:00";
$SluttTid ="16:00";
}
if ($Utleieplassnr == "A3" || $Utleieplassnr == "B3" || $Utleieplassnr == "C3" || $Utleieplassnr == "D3" || $Utleieplassnr == "E3" || $Utleieplassnr == "F3" || $Utleieplassnr == "G3" || $Utleieplassnr == "H3" || $Utleieplassnr == "I3" || $Utleieplassnr == "J3" || $Utleieplassnr == "K3" || $Utleieplassnr == "L3" || $Utleieplassnr == "M3") {
$StartTid = "16:00";
$SluttTid ="18:00";
}
if ($Utleieplassnr == "A4" || $Utleieplassnr == "B4" || $Utleieplassnr == "C4" || $Utleieplassnr == "D4" || $Utleieplassnr == "E4" || $Utleieplassnr == "F4" || $Utleieplassnr == "G4" || $Utleieplassnr == "H4" || $Utleieplassnr == "I4" || $Utleieplassnr == "J4" || $Utleieplassnr == "K4" || $Utleieplassnr == "L4" || $Utleieplassnr == "M4") {
$StartTid = "18:00";
$SluttTid ="20:00";
}
if ($Utleieplassnr == "A5" || $Utleieplassnr == "B5" || $Utleieplassnr == "C5" || $Utleieplassnr == "D5" || $Utleieplassnr == "E5" || $Utleieplassnr == "F5" || $Utleieplassnr == "G5" || $Utleieplassnr == "H5" || $Utleieplassnr == "I5" || $Utleieplassnr == "J5" || $Utleieplassnr == "K5" || $Utleieplassnr == "L5" || $Utleieplassnr == "M5") {
$StartTid = "20:00";
$SluttTid ="22:00";
}
if ($Utleieplassnr == "A6" || $Utleieplassnr == "B6" || $Utleieplassnr == "C6" || $Utleieplassnr == "D6" || $Utleieplassnr == "E6" || $Utleieplassnr == "F6" || $Utleieplassnr == "G6" || $Utleieplassnr == "H6" || $Utleieplassnr == "I6" || $Utleieplassnr == "J6" || $Utleieplassnr == "K6" || $Utleieplassnr == "L6" || $Utleieplassnr == "M6") {
$StartTid = "22:00";
$SluttTid ="23:59";
}

include ("./db_connection.php");
$sqlA = "SELECT * FROM tbl_uonsket_danny WHERE Telefonnr ='$Telefonnr'";
$resultat2 = mysqli_query ($lenke, $sqlA);

if ($row=mysqli_fetch_array($resultat2) == 0) {
	
include ("./db_connection.php");

// kunde opprettes i database.
$sql = "INSERT INTO tbl_kunde_danny (Telefonnr, Fodselsnr, Fornavn, Etternavn, Gatenavn, Poststed, Postnr, Land, Email, Kommentar, Opprettet)
VALUES ('$Telefonnr', '$Fodselsnr ', '$Fornavn ', '$Etternavn', '$Gatenavn', '$Poststed', '$Postnr', '$Land', '$Email ', '$Kommentar', '$Opprettet')";
mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);

include ("./db_connection.php");

$sql = "INSERT INTO tbl_reservasjon_danny (Telefonnr, BordID, Personer, Bevegelsehemmende, StartDato, StartTid, SluttDato, SluttTid, Betalt, SjekkInn, SjekkUt)
VALUES ('$Telefonnr ', '$Utleieplassnr', '$Personer', '$Bevegelsehemmende', '$StartDato',
'$StartTid', '$SluttDato', '$SluttTid', '$Betalt', '$SjekkInn', '$SjekkUt')";
mysqli_query ($lenke, $sql);
mysqli_close($tilkopling);

include ("./db_connection.php");

$sql = "UPDATE tbl_kunde_danny SET BordID = '$BordID' WHERE Telefonnr = '$Telefonnr '";
$resultat = mysqli_query($lenke, $sql);
mysqli_close ($tilkopling);
mysqli_close ($lenke);

include ("./db_connection.php");


$sql = "UPDATE tbl_bord_danny SET Telefonnr = '$Telefonnr' WHERE BordID = '$Utleieplassnr'";
$resultat = mysqli_query($lenke, $sql);
mysqli_close ($tilkopling);
mysqli_close ($lenke);
print '
<html>
<head>
      <link rel="stylesheet" href="./style1.css">
      <title>Resturant</title>
<style>
body {
	background-image: url(./background.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
	color: white;
	text-shadow: 2px 1px black;
}
#title1 {
	width: 800px;
	padding: 20px 30px;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
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
}
#knapp {
	position: relative;
	top: -29px;
	width: 864px;
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
<br><br><br><br>
<center>
<h1 id="title1">Din kvittering</h1>
';

if ($Kvittering =="Nei") {
print '
<div id="boks">
<h2>Tusen takk '.$Fornavn.' '.$Etternavn.'!</h2>
<h3>Du har nå reservert en bord hos oss. Vi håper du får et hyggelig minne hos oss!</h3>
<h3>Telefonnummeret '.$Telefonnr.' er registrert til bord '.$Utleieplassnr.'.</h3>
<h3>Den '.$StartDato.' kl: '.$StartTid.' til '.$SluttDato.' kl: '.$SluttTid.', er bordet er reservert for deg.</h3>
<h2>Vi sees senere!</h2>
<br>
</div>
<a href="./Admin_Kunde_opprett.php"><button id="knapp">Bestill på nytt</button></a>

';

}
if ($Kvittering == "Ja") {
	$avsender = "Bestilling@epost.no";

$mottaker = $Email; 
$subject = 'Kvittering for bordreservasjon';
$innhold = 'Tusen takk '.$Fornavn.' '.$Etternavn.'!
Du har nå reservert en bord hos oss. Vi håper du får et hyggelig minne hos oss!
Telefonnummeret '.$Telefonnr.' er registrert til bord '.$Utleieplassnr.'.
Den '.$StartDato.' kl: '.$StartTid.' til '.$SluttDato.' kl: '.$SluttTid.', er bordet er reservert for deg.

Vi sees senere!
Denne eposten kan ikke svares på.
';


$avsender = $avsender;
$heading = $subject;
$melding = $innhold;

$to = $mottaker;
$subject = $heading . "\r\n";
$txt = $melding;
$headers = "From:". $avsender;


mail($to,$subject,$txt,$headers);
print '
<div id="boks">
<h2>Tusen takk '.$Fornavn.' '.$Etternavn.'!</h2>
<h3>Du har nå reservert en bord hos oss. Vi håper du får et hyggelig minne hos oss!</h3>
<h3>Telefonnummeret '.$Telefonnr.' er registrert til bord '.$Utleieplassnr.'.</h3>
<h3>Den '.$StartDato.' kl: '.$StartTid.' til '.$SluttDato.' kl: '.$SluttTid.', er bordet er reservert for deg.</h3>
<br>
<h3>Den samme informasjonen som er oppgitt her har blitt sendt til den følgende email:<p> '.$Email.'</h3>
<h2>Vi sees senere!</h2>
</div>
<a href="./Admin_Kunde_opprett.php"><button id="knapp">Bestill på nytt</button></a>
';

}
}

else {
print '
<html>
<head>
      <link rel="stylesheet" href="./style1.css">
      <title>Resturant</title>
<style>
body {
	background-image: url(./background.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
	color: white;
	text-shadow: 2px 1px black;
}
#title1 {
	width: 800px;
	padding: 20px 30px;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
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
}
#knapp {
	position: relative;
	top: -29px;
	width: 864px;
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
<br><br><br><br><br><br>
<center>
<h1 id="title1">Uønsket gjest</h1>
<div id="boks">
	<h2>Bordet ble ikke reservert.</h2>
	<h3>Du er dessverre utestengt fra vår restaurant.</h3>
	<h3>Hvis dette ikke er riktig, vennligst ta kontakt med oss.</h3>
	<br>
	</div>
	<a href="./Admin_Kunde_opprett.php"><button id="knapp">Registrer en annen kunde</button>
	';
}
print '
</center>
</body>
</html>
';


?>