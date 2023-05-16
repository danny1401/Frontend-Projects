<?php

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
	top: -5px;
	left: 5px;
	padding: 5px 15px;
	font-weight: 700;
}
#felt {
	border: 1px solid black;
	height: 25px;
	padding-left: 10px;
	font-size: 16px;
}
#felt2 {
	border: 1px solid black;
	height: 25px;
	padding-left: 10px;
	margin-right: 20px;
	font-size: 14px;
}
#felt3 {
	border: 1px solid black;
	height: 25px;
	width: 207px;
	padding-left: 5px;
	margin-right: 20px;
	font-size: 14px;
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
<h2 id="title1">Registrer inn kvitteringen din her!</h2>
<form method="POST" action="RegistrerK.php" name="">
<table>
<tr>
	<td>Kvitteringsnummer</td>
	<td><input type="text" name="Kvitteringsnummer" id="felt" value=""></td>
</tr>
<tr>
	<td>Navn</td>
	<td><input type="text" name="Navn" id="felt" value=""></td>
</tr>
<tr>
	<td>Dato</td>
	<td><select name="Dag" id="felt2">';

for ($a=1; $a<=31; $a++) {
print '<option value="'.$a.'">'.$a.'</option>';
}
print '</select><select name="Month" id="felt2">';
for ($b=1; $b<=12; $b++) {
print '<option value="'.$b.'">'.$b.'</option>';
}
print '</select><select name="Year" id="felt2">';
for ($c=2010; $c<=2029; $c++) {
print '<option value="'.$c.'">'.$c.'</option>';
}
print '</select></td></tr>';

print '<input type="hidden" name="SjekkInn" value="Ja">';

print '
<tr>
	<td>Butikknavn</td>
	<td><input type="text" name="Butikknavn" id="felt" value=""></td>
</tr>
<tr>
	<td>Vare</td>
	<td><input type="text" name="Vare" id="felt" value=""></td>
</tr>
<tr>
	<td>Pris</td>
	<td><input type="text" name="Pris" id="felt" value=""></td>
</tr>
<tr>
	<td>Betalingsmetode</td>
	<td><select name="Betalingsmetode" id="felt3">
		<option value="Ikke valgt"></option>
		<option value="Kontant">Kontant</option>
		<option value="Visa">Visa</option>
		<option value="Mastercard">Mastercard</option>
		<option value="Bankaxept">Bankaxept</option>
		<option value="Paypal">Paypal</option>
		<option value="Vipps">Vipps</option>
		<option value="Paysafecard">Paysafecard</option>
		<option value="Stjeling">Stjeling</option>
	</select></td>
</tr>
</table>
<input type="submit" value="Registrer kvitteringen" name="send_kvittering" id="knapp1">
</form>
<a href="VisningK.php"><button id="knapp2">Vis kvitteringer</button></a>
</form>

</div>
</center>
</body>
</html>

';
?>
