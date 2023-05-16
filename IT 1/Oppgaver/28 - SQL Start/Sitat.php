<?php

print '
<html>
<head>
<title></title>
<style>
body {
	background-color: #0033cc;
	background: linear-gradient(to bottom right, #3366ff 0%, #cc33ff 90%);
}
#boks {
	position: relative;
	top: 30px;
	height: 540px;
	width: 550px;
	background-color: white;
	border: 3px solid black;
	border-radius: 8px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 400px;
	padding: 5px 0px;
	background-color: #0033cc;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 40px;
}
#title2 {
	position: relative;
	top: 25px;
	font-size: 21px;
}
#tabell {
	position: relative;
	top: 35px;
}
.felt {
	height: 35px;
	width: 250px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 15px;
	padding: 10px 12px;
}
#felt1 {
	position: relative;
	top: 20px;
}
#felt2 {
	position: relative;
	top: 40px;
}
#felt3 {
	position: relative;
	top: 60px;
}
#info1 {
	position: relative;
	top: 20px;
	right: -17px;
	font-weight: 700;
}
#info2 {
	position: relative;
	top: 40px;
	right: 20px;
	font-weight: 700;
}
#info3 {
	position: relative;
	top: 60px;
	right: 5px;
	font-weight: 700;
}
#knapp1 {
	position: absolute;
	top: 430px;
	left: 90px;
	height: 40px;
	width: 170px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 430px;
	right: 90px;
	height: 40px;
	width: 170px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#BackButton {
	position: absolute;
	top: 13px;
	left: 15px;
	height: 63; 
	width: 67;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<h1 id="title1">Sitater</h1>
<h3 id="title2">Her kan du opprette ny rad i sitatdatabasen</h3>

<form method="POST" action="./RegistrerS.php" name="database_sitat">
<table id="tabell">
	<tr><td id="info1">
		Sitatet:
	</td><td id="felt1">
		<input type="text" name="sitat" size="40" value="" class="felt">
	</td></tr>
	<tr><td id="info2">
		Opprinnelse:
	</td><td id="felt2">
		<input type="text" name="opprinnelse" size="40" value="" class="felt">
	</td></tr>
	<tr><td id="info3">
		Referanse:
	</td><td id="felt3">
		<input type="text" name="referanse" size="40" value="" class="felt">
	</td></tr>
</table>
<input type="submit" value="Opprett sitat" name="send_sitat" id="knapp1">
</form>
<a href="./VisningS.php"><button id="knapp2">Se på alle sitatene</button></a>
</div>
</center>

</body>
</html>
';

?>