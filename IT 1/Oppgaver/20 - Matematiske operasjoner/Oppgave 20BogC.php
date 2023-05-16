<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$liter = $_POST['liter'];
$literpris = $_POST['literpris'];

$gallon = ($liter * 3.785411784);
$gallonpris = ($literpris * 3.785411784);

$gallonavrund = round($gallon,2);
$gallonprisavrund = round($gallonpris,2);

print "
<html>
<head>
<style>
#svar {
	position: relative;
	top: 440px;
	z-index: 2;
}
</style>
</head>
<body>
<center><h3 id='svar'> Når literprisen er ".$literpris." kr på ".$liter." liter (".$gallonavrund." gallon), 
<br>så er prisen per gallon = ".$gallonprisavrund." kr</br></h3></center>
</body>
</html>
";

}

print '
<html>
<head>
<title>Literpris og gallonpris</title>
<style>
body {
	background-color: #66ff66;
	background-image: linear-gradient(to right, #66ff66 , #004d00);
}
#title1 {
	position: absolute;
	top: 0px;
	left: 210px;
	font-size: 40px;
}
#title2 {
	position: absolute;
	top: 67px;
	left: 170px;
}
#tekst {
	position: absolute;
	top: 63px;
	left: 381px;
	height: 490px;
	width: 600px;
	background-color: white;
	border: 2px solid black;
	z-index: -2;
}
#info {
	position: absolute;
	top: 170px;
	right: 72px;
	letter-spacing: 0.3px;
}
#felt1 {
	position: absolute;
	top: 279px;
	left: 546px;
	letter-spacing: 0.3;
	font-style: italic;
}
#felt2 {
	position: absolute;
	top: 318px;
	left: 520px;
	letter-spacing: 0.3;
	font-style: italic;
}
#boks1 {
	position: absolute;
	top: 298px;
	left: 597px;
	text-align: center;
	z-index: 2;
}
#boks2 {
	position: absolute;
	top: 338px;
	left: 597px;
	text-align: center;
	z-index: 2;
}
#calculate {
	position: absolute;
	top: 390px;
	left: 639px;
	width: 90px;
	text-align: center;
}
#BackButton {
	position: absolute;
	top: 20px;
	left: 20px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>

<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<form method="POST" action="">
	
	<center><div id="tekst">
	<h1 id="title1">Omregner </h1><h3 id="title2"> - fra literpris til pris per gallon!</h3>
	
	<h3><i id="info">Her kan du bruke literprisen til å finne prisen per gallon: </i></h3>
	<p>
	</div></center>
	
	<h4 id="felt1">Liter: </h4>
	<input name="liter" id="boks1">
	
	<h4 id="felt2">Literpris: </h4>
	<input name="literpris" id="boks2">

	<p>
	<input type="submit" name="submit" value="Regn ut" id="calculate">
</form>

</body>
</html>

';
?>