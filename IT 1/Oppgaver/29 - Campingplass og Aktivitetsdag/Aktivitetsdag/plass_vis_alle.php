<?php

$teller = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM tbl_plass_camping_danny"; 
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$PlassID[$teller]=$row["PlassID"]; 
$Lengde[$teller]=$row["Lengde"];
$Bredde[$teller]=$row["Bredde"]; 
$Handicap[$teller]=$row["Handicap"];
$Husdyr[$teller]=$row["Husdyr"]; 
$Elektrisitet[$teller]=$row["Elektrisitet"];
$Vann[$teller]=$row["Vann"]; 
$Type[$teller]=$row["Type"];
$Kommentar[$teller]=$row["Kommentar"];
$teller= $teller+1; }

mysqli_close($tilkopling);

print'
<html>
<head>
<title>Campingplass</title>
<style>
body {
    background-image: url("camping2.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 40px;
	height: auto;
	width: 750px;
	padding: 80px 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
}
#buttontitle {
	position: relative;
	top: -75px;
	color: black;
	text-decoration: none;
}
#title {
	width: 300px;
	padding: 5px 0px;
	border-radius: 8px;
	background-color: white;
	border: 2px solid black;
}
#title1 {
	position: relative; 
	top: -40px;
}
.title2 {
	padding-top: 10px;
	padding-bottom: 10px;
	border-top: 2px solid black;
	border-bottom: 2px solid black;
}
table {
	position: relative;
	top: -40px;
}
td {
	background-color: white;
	padding: 10px 10px;
}
#knapp1 {
	position: relative;
	top: 50px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-right: 20px;
}
#knapp2 {
	position: relative;
	top: 50px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-right: 20px;
}
#BackButton {
	position: absolute;
	top: 13px;
	left: 9px;
	height: 63; 
	width: 67;
}
</style>
</head>
<body>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<a href="./campingplass.html" id="buttontitle"><h1 id="title">Campingplass</h1></a>
<h3 id="title1">Alle utleieplasser p&aring; campingplassen</h3>
<table>';

print'
<tr>
	<td>PlassID</td>
	<td>Lengde</td>
	<td>Bredde</td>
	<td>Handicap</td>
	<td>Husdyr</td>
	<td>Elektrisitet</td>
	<td>Vann</td>
	<td>Type</td>
	<td>Kommentar</td>
</tr>';

$antallrow= $teller;

for ($a=0;$a<=$antallrow;$a++) {
print'
<tr>
	<td>'.$PlassID[$a].'</td>
	<td>'.$Lengde[$a].'</td>
	<td>'.$Bredde[$a].'</td>
	<td>'.$Handicap[$a].'</td>
	<td>'.$Husdyr[$a].'</td>
	<td>'.$Elektrisitet[$a].'</td>
	<td>'.$Vann[$a].'</td>
	<td>'.$Type[$a].'</td>
	<td>'.$Kommentar[$a].'</td>
</tr>'; 

}

Print '
</table>
<a href="./opprett_plass_skjema.php"><button id="knapp1">Opprett plass</button></a>
<a href="./campingplass.html"><button id="knapp2">Hjemmesiden</button></a>
</div>
</center>
</body>
</html>';

?>