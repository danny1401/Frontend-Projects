<?php

$teller = 0;

include ("./db_connection.php");

$sql = 'SELECT * FROM tbl_plass_camping_danny WHERE KundeID IS NULL'; 

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$PlassID[$teller]=$row["PlassID"]; $KundeID[$teller]=$row["KundeID"];
$Lengde[$teller]=$row["Lengde"]; $Bredde[$teller]=$row["Bredde"];
$Handicap[$teller]=$row["Handicap"]; $Husdyr[$teller]=$row["Husdyr"];
$Elektrisitet[$teller]=$row["Elektrisitet"]; $Vann[$teller]=$row["Vann"];
$Type[$teller]=$row["Type"]; $Kommentar[$teller]=$row["Kommentar"];
$teller= $teller+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);

if ($teller <=0) {
print "<h3 style='position:relative; top:25px; margin-bottom:30px;'>Alle plasser er opptatt</h3>";

}
elseif ($teller >= 1) {

print '
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
	padding: 0px 60px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
}
#buttontitle {
	position: relative;
	top: 5px;
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
	top: 35px;
}
#title2 {
	position: relative; 
	top: 125px;
}
.color {
	background-color: white;
	padding: 5px 5px;
}
table {
	position: relative;
	top: 125px;
	margin-bottom: 60px;
}
#inputfelt4 {
	height: 25px;
	width: 120px;
	border: 1px solid black;
	border-radius: 6px;
}
#inputfelt4, #option4 {
	padding-left: 40px;
}
#knapp1 {
	position: relative;
	top: 130px;
	height: 35px;
	left: 10px;
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
	top: 130px;
	left: 10px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-right: 20px;
}
#knapp3 {
	position: relative;
	top: 130px;
	left: 10px;
	height: 35px;
	width: 180px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-right: 20px;
}
</style>
</head>
<body>
<center>
<h3 id="title2">Ledige utleieplasser</h3>
<table>';

print'
<tr>
	<td class="color">PlassID</td>
	<td class="color">KundeID</td>
	<td class="color">Lengde</td>
	<td class="color">Bredde</td>
	<td class="color">Handicap</td>
	<td class="color">Husdyr</td>
	<td class="color">Elektrisitet</td>
	<td class="color">Vann</td>
	<td class="color">Type</td>
	<td class="color">Kommentar</td>
</tr>';

$antallrow= $teller;

for ($a=0;$a<=$antallrow;$a++) {
print'
<tr>
	<td class="color">'.$PlassID[$a].'</td>
	<td class="color">'.$KundeID[$a].'</td>
	<td class="color">'.$Lengde[$a].'</td>
	<td class="color">'.$Bredde[$a].'</td>
	<td class="color">'.$Handicap[$a].'</td>
	<td class="color">'.$Husdyr[$a].'</td>
	<td class="color">'.$Elektrisitet[$a].'</td>
	<td class="color">'.$Vann[$a].'</td>
	<td class="color">'.$Type[$a].'</td>
	<td class="color">'.$Kommentar[$a].'</td>
</tr>'; }

}
Print '</table>';

print '
<table><tr><td>Velg utleieplass:</td><td><select name="Utleieplassnr" id="inputfelt4">';

$antallrow1= $teller;

for ($b=0;$b<=$antallrow1;$b++) {
print'<option value="'.$PlassID[$b].'" id="option4">'.$PlassID[$b].'</option>'; }
Print '</select></td></tr></table>';

?>