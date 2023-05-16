<?php

$Kvitteringsnummer = $_POST["Kvitteringsnummer"];
$Navn = $_POST["Navn"];
$Dag = $_POST ['Dag'];
$Month = $_POST ['Month'];
$Year = $_POST ['Year'];
$Butikknavn = $_POST["Butikknavn"];
$Vare = $_POST["Vare"];
$Pris = $_POST["Pris"];
$Betalingsmetode = $_POST["Betalingsmetode"];

$Dato = $Dag.'.'.$Month.'.'.$Year;

include ("./db_connection.php");

############### Beskyttelse mot SQL-injection ######################################

$Navn = str_replace("<"," &#60; ", $Navn);
$Navn = str_replace(">"," &#62; ", $Navn);
$Navn = str_replace("<script>"," &#60;_script_&#62; ", $Navn);
$Navn = str_replace("</script>"," &#60;_&#47;script_&#62; ", $Navn);
$Navn = str_replace("//"," &#47; &#47; ", $Navn);
$Navn = str_replace("$"," &#36; ", $Navn);

$Butikknavn = str_replace("<"," &#60; ", $Butikknavn);
$Butikknavn = str_replace(">"," &#62; ", $Butikknavn);
$Butikknavn = str_replace("<script>"," &#60;_script_&#62; ", $Butikknavn);
$Butikknavn = str_replace("</script>"," &#60;_&#47;script_&#62; ", $Butikknavn);
$Butikknavn = str_replace("//"," &#47; &#47; ", $Butikknavn);
$Butikknavn = str_replace("$"," &#36; ", $Butikknavn);

$Kvitteringsnummer = str_replace("<"," &#60; ", $Kvitteringsnummer);
$Kvitteringsnummer = str_replace(">"," &#62; ", $Kvitteringsnummer);
$Kvitteringsnummer = str_replace("<script>"," &#60;_script_&#62; ", $Kvitteringsnummer);
$Kvitteringsnummer = str_replace("</script>"," &#60;_&#47;script_&#62; ", $Kvitteringsnummer);
$Kvitteringsnummer = str_replace("//"," &#47; &#47; ", $Kvitteringsnummer);
$Kvitteringsnummer = str_replace("$"," &#36; ", $Kvitteringsnummer);

$Vare = str_replace("<"," &#60; ", $Vare);
$Vare = str_replace(">"," &#62; ", $Vare);
$Vare = str_replace("<script>"," &#60;_script_&#62; ", $Vare);
$Vare = str_replace("</script>"," &#60;_&#47;script_&#62; ", $Vare);
$Vare = str_replace("//"," &#47; &#47; ", $Vare);
$Vare = str_replace("$"," &#36; ", $Vare);

$Pris = str_replace("<"," &#60; ", $Pris);
$Pris = str_replace(">"," &#62; ", $Pris);
$Pris = str_replace("<script>"," &#60;_script_&#62; ", $Pris);
$Pris = str_replace("</script>"," &#60;_&#47;script_&#62; ", $Pris);
$Pris = str_replace("//"," &#47; &#47; ", $Pris);
$Pris = str_replace("$"," &#36; ", $Pris);

################## Avslutt paa beskyttelsestiltak ###############

include("./db_connection.php");

$sql = "INSERT INTO tbl_kvittering_danny (Kvitteringsnummer, Navn, Dato, Butikknavn, Vare, Pris, Betalingsmetode) VALUES ('$Kvitteringsnummer', '$Navn', '$Dato', '$Butikknavn', '$Vare', '$Pris', '$Betalingsmetode')";
mysqli_query($lenke, $sql);
mysqli_close($tilkopling);
mysqli_close($lenke);

print '
<html>
<head>
<style>
body {
	background-image: url(./mall.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title {
	position: relative;
	top: 45px;
	padding-top: 20px;
	padding-bottom: 20px;
	width: 600px;
	background-color: gainsboro;
	border: 2px solid black; 
	font-size: 40px;
}
#boks {
	position: relative;
	top: 15px;
	height: 415px;
	width: 500px;
	padding: 5px 50px;
	background-color: white;
	border: 2px solid black; 
}
#title1 {
	position: relative;
	top: -5px;
	padding-top: 5px;
	padding-bottom: 5px;
	width: 420px;
	background-color: gainsboro;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
td {
	position: relative;
	top: -15px;
	padding: 10px 25px;
	font-weight: 700;
}
#knapp1 {
	position: absolute;
	top: 365px;
	left: 90px;
	height: 35px;
	width: 190px;
	background-color: gainsboro;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 365px;
	right: 90px;
	height: 35px;
	width: 190px;
	background-color: gainsboro;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#BackButton {
	position: absolute;
	top: 20px;
	left: 20px;
	height: 73; 
	width: 77;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>

<center>
<h1 id="title">Handletur med kvittering</h1>
<div id="boks">
<h2 id="title1">Kvitteringen ble registrert!</h2>

<table>
<tr>
	<td>Kvitteringsnummer:</td>
	<td>'.$Kvitteringsnummer.'</td>
</tr>
<tr>
	<td>Navn:</td>
	<td>'.$Navn.'</td>
</tr>
<tr>
	<td>Dato:</td>
	<td>'.$Dato.'</td>
</tr>
<tr>
	<td>Butikknavn:</td>
	<td>'.$Butikknavn.'</td>
</tr>
<tr>
	<td>Vare:</td>
	<td>'.$Vare.'</td>
</tr>
<tr>
	<td>Pris:</td>
	<td>'.$Pris.'</td>
</tr>
<tr>
	<td>Betalingsmetode:</td>
	<td>'.$Betalingsmetode.'</td>
</tr>
</table>

<a href="./Kvittering.php"><button id="knapp1">Registrer ny kvittering</button></a>
<a href="./VisningK.php"><button id="knapp2">Se på kvitteringene</button></a>
</div>
</center>
</body>
</html>
';

?>
