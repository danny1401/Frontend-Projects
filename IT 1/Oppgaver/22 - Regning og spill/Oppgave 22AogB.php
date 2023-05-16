<?php

print"
<html>
<head>
<title>Regning og spill</title>
<style>
body {
	background-image: url('./blackandyellow.jpg');
	background-attachment: fixed;
	background-size: 100%;
}	
#boks {
	position: relative;
	top: 45px;
	height: 520px;
	width: 1200px;
	background-color: lightgrey;
	border: 2px solid black;
	z-index: -2;
}
#vrtline {
	position: absolute;
	top: 53px;
	left: 740px;
	height: 315px;
	border-left: 2px solid black;
}
#hzline {
	position: relative;
	top: -165px;
	width: 1200px;
	border-bottom: 2px solid black;
}
#title1 {
	position: absolute;
	top: 50px;
	left: 130px;
	font-size: 35px;
}
#oppgave {
	position: absolute;
	top: 140px;
	left: 145px;
	font-size: 21px;
}
#boks1 {
	position: absolute;
	top: 200px;
	left: 145px;
}
#text {
	height: 35px;
	width: 210px;
	border: 1px solid black;
	border-radius: 25px;
	padding: 5px 20px;
	font-size: 18px;
	text-align: center;
}
#submit {
	height: 36px;
	width: 100px;
	background-color: yellow;
	border: 1px solid black;
	border-radius: 25px;
	padding: 5px 20px;
	margin-left: 20px;
	font-weight: 700;
	font-size: 17px;
}
#title4 {
	position: absolute;
	top: 260px;
	left: 140px;
}
#title5 {
	position: absolute;
	top: 290px;
	left: 140px;
}
#title6 {
	position: absolute;
	top: 300px;
	left: 380px;
	font-size: 14px;
}
#title2 {
	position: absolute;
	top: 50px;
	left: 790px;
	font-size: 35px;
}
#resultatsvar {
	position: absolute;
	top: 120px;
	left: 805px;
	font-size: 25px;
}
#dittsvar {
	position: absolute;
	top: 190px;
	left: 805px;
	font-size: 18px;
}
#antallriktige {
	position: absolute;
	top: 245px;
	left: 805px;
	font-size: 18px;	
}
#antallfeil {
	position: absolute;
	top: 280px;
	left: 805px;
	font-size: 18px;	
}
#title_riktig {
	position: absolute;
	top: 360px;
	left: 130px;
	font-size: 18px;
}
#title_feil {
	position: absolute;
	top: 450px;
	left: 130px;
	font-size: 18px;
}
#diagramback1 {
	position: absolute;
	top: 421px;
	left: 141px;
	height: 35px;
	width: 1065px;
	background-color: white;
	border: 1px solid black;
	border-radius: 25px;
}
#diagramback2 {
	position: absolute;
	top: 511px;
	left: 141px;
	height: 35px;
	width: 1065px;
	background-color: white;
	border: 1px solid black;
	border-radius: 25px;
}
#diagram1 {
	position: absolute;
	top: 420px;
	left: 140px;
	color: black;
	background-color: yellow;
	border: 1px solid black;
	border-radius: 25px;
	text-align: center;
	font-size: 21px;
	font-weight: 700;
	padding: 5px 20px;
	margin: 1px;	
	display: block;
}
#diagram2 {
	position: absolute;
	top: 510px;
	left: 140px;
	color: black;
	background-color: yellow;
	border: 1px solid black;
	border-radius: 25px;
	text-align: center;
	font-size: 21px;
	font-weight: 700;
	padding: 5px 20px;
	margin: 1px;
	display: block;
}
#smiley {
	position: absolute;
	top: 160px;
	left: 1060px;
}
#sadface {
	position: absolute;
	top: 160px;
	left: 1060px;
}
#BackButton {
	position: absolute;
	top: 5px;
	left: 5px;
	border: 0; 
	height: 49; 
	width: 52;
	z-index: 2;
}
</style>
</head>
<body>
<a href='./../../index.html'><img src='back0.png' id='BackButton'></img></a>

<center>
<div id='boks'>
</div>
<div id='vrtline'></div>
<div id='hzline'></div>

<h2 id='title2'>Dine resultater</h2>

<h4 id='title_riktig'>Antall riktige svar:</h4>
<h4 id='title_feil'>Antall feil svar:</h4>

<div id='diagramback1'></div>
<div id='diagramback2'></div>
";

session_start();
	if ($_SESSION['flagget'] != 1) {
	$_SESSION['rett_svar'] = 0;
	$_SESSION['feil_svar'] = 0;
}
function testSvar() {
	$resultat = $_SESSION['result'];
	$svarInn = $_SESSION['svarInn'];
	echo '<h4 id="dittsvar">Ditt svar: '.$svarInn.'</h4> <p>';

if  ($svarInn == $resultat) {
	$_SESSION['rett_svar'] = $_SESSION['rett_svar'] +1;
	echo '<h4 id="resultatsvar">Riktig svar!</h4> <p>';
	echo '<img src="./smiley.png" id="smiley"></img>';

	echo '<div id="diagram1" style="width: ';
	echo 40*$_SESSION['rett_svar'];
	echo 'px;">';
	echo $_SESSION['rett_svar'];
	echo '</div><br>';

	echo '<div id="diagram2" style="width: ';
	echo 40*$_SESSION['feil_svar'];
	echo 'px;">';
	echo $_SESSION['feil_svar'];
	echo '</div><br>';
	}
else if  ($svarInn != $resultat){
	$_SESSION['feil_svar'] = $_SESSION['feil_svar'] +1;
	echo '<h4 id="resultatsvar">Feil svar!</h4> <p>';
	echo '<img src="./sadface.png" id="sadface"></img>';

	echo '<div id="diagram1" style="width: ';
	echo 40*$_SESSION['rett_svar'];
	echo 'px;">';
	echo $_SESSION['rett_svar'];
	echo '</div><br>';

	echo '<div id="diagram2" style="width: ';
	echo 40*$_SESSION['feil_svar'];
	echo 'px;">';
	echo $_SESSION['feil_svar'];
	echo '</div>';
	echo '</div><br>';
	;
	}
	echo '<h4 id="antallriktige">Antall riktige svar: '.$_SESSION['rett_svar'].'</h4> <p>';
	echo '<h4 id="antallfeil">Antall feil svar: '.$_SESSION['feil_svar'].'</h4> <p>';
}
                   
$svaret = $_POST['svar'];
$flagg = $_POST['flagg'];
$_SESSION['flagget'] = $flagg;
$_SESSION['svarInn'] = $svaret;
                    
if ($svaret !="" && $flagg == "1" ) {
	testSvar();
}

$art = mt_rand(1, 4);
$tall1 = mt_rand(0,10);
$tall2 = mt_rand(0,10);

if($art == 1){
$result = $tall1*$tall2;
$_SESSION['result'] = $result;
$regnetegn = "⋅";
}
elseif($art == 2){
	$result = $tall1/$tall2;
	$_SESSION['result'] = $result;
	$regnetegn = "÷";
}
elseif($art == 3){
	$result = $tall1+$tall2;
	$_SESSION['result'] = $result;
	$regnetegn = "+";
}
elseif($art == 4){
	$result = $tall1-$tall2;
	$_SESSION['result'] = $result;
	$regnetegn = "-";
}

print '
<h2 id="title1">Test deg selv i matte!</h2>
<h3 id="oppgave">Hva er svaret på '.$tall1.' '.$regnetegn.'  '.$tall2.' ?</h3>
<h3 id="title4">Regneoppgavene består av 2 tall mellom 0 og 10</h3>
<h3 id="title5">og testes i de 4 regneartene.</h3>
<h3 id="title6">(Addisjon, Subtraksjon, Multiplikasjon og Divisjon)</h3>


<form action="" method="POST" id="boks1">
	<input type="text" name="svar" id="text">					
	<input type="hidden" name="flagg" value="1">
	<input type="submit" value="Send" id="submit">						
</form>
					
</center>
</body>  
</html>
';
?>