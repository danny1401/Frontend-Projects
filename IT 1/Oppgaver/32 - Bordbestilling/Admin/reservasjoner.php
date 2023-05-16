<?php
$tellerC = 0;
print '
<html>
<head>
<style>
select {
	margin-left: 20px;
	padding: 5px 5px;
	border: 1px solid black;
	font-size: 16px;
}
#title4 {
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
}
</style>
</head>
<body>
';
include ("./db_connection.php");

$sql = 'SELECT * FROM tbl_reservasjon_danny'; 

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$Telefonnr[$tellerC]=$row["Telefonnr"]; 
$BordID[$tellerC]=$row["BordID"];
$Personer[$tellerC]=$row["Personer"];
$Bevegelsehemmende[$tellerC]=$row["Bevegelsehemmende"];

$StartDato[$tellerC]=$row["StartDato"]; 
$StartTid[$tellerC]=$row["StartTid"]; 
$SluttDato[$tellerC]=$row["SluttDato"]; 
$SluttTid[$tellerC]=$row["SluttTid"]; 

$Betalt[$tellerC]=$row["Betalt"]; 
$SjekkInn[$tellerC]=$row["SjekkInn"]; 
$SjekkUt[$tellerC]=$row["SjekkUt"];
$tellerC= $tellerC+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);

if ($tellerC >= 1) {

print'<table>';
print'
<tr>
	<td>Telefonnr</td>
	<td>BordID</td>
	<td>Personer</td>
	<td>Bevegelsehemmende</td>
	<td>StartDato</td>
	<td>StartTid</td>
	<td>SluttDato</td>
	<td>SluttTid</td>
	<td>Betalt</td>
	<td>SjekkInn</td>
	<td>SjekkUt</td>
</tr>';

$antallrow= $tellerC;

//list alle valgte rader ut i tabell
for ($a=0;$a<=$antallrow;$a++) {
print'<tr> <td>'.$Telefonnr[$a].'</td>
<td>'.$BordID[$a].'</td>
<td>'.$Personer[$a].'</td>
<td>'.$Bevegelsehemmende[$a].'</td>
<td>'.$StartDato[$a].'</td>
<td>'.$StartTid[$a].'</td>
<td>'.$SluttDato[$a].'</td>
<td>'.$SluttTid[$a].'</td>
<td>'.$Betalt[$a].'</td>
<td>'.$SjekkInn[$a].'</td>
<td>'.$SjekkUt[$a].'</td>


</tr>'; }
Print '</table>';

print '
<br><br>
<b id="title4">Velg Telefonnr:<b>
<select name="Telefonnr3">';
$antallrow1= $tellerC;

for ($b=0;$b<=$antallrow1;$b++) {
print'<option value = "'.$Telefonnr[$b].'">'.$Telefonnr[$b].'</option>'; }
Print '</select>';
}
print '</body></html>';
?>