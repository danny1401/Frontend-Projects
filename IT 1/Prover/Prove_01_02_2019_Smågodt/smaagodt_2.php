<?php

$valg = '
<html>
<head>
<title>Smågodt</title>
<style>
body {
	background-color: #99ebff;
	background-size: cover;
	background-attachment: fixed;
	overflow: hidden;
}
#boks1 {
	position: relative;
	height: 70px;
	width: 850px;
	background-color: white;
	border: 2px solid black;
}
#boks2 {
	position: relative;
	top: 70px;
	left: -2px;
	height: 320px;
	width: 850px;
	background-color: white;
	border: 2px solid black;
}
#boks3 {
	position: relative;
	top: 58px;
	left: -2px;
	height: 70px;
	width: 850px;
	background-color: white;
	border: 2px solid black;
}
#felt {
	width: 140px;
	padding-left: 54px;
	background-color: white;
	border: 2px solid grey;
	font-size: 15px;
}
#title {
	position: relative;
	top: 30px;	
	width: 850px;
	height: 51px;
	padding-top: 10px;
	padding-bottom: 10px;
	color: white;
	background: linear-gradient(to right, silver 0%, #585858 90%);
	border: 2px solid black;
	font-size: 40px;
	text-shadow: 2px 1px black;
}
#title1 {
	position: absolute;
	top: 5px;
	left: 90px;	
}
#title2 {
	position: absolute;
	top: 5px;
	right: 60px;	
}
#title3 {
	position: absolute;
	top: 0px;
	left: 35px;	
}
#title4 {
	position: absolute;
	top: 0px;
	right: 300px;	
}
#titleD {
	position: relative;
	top: 60px;
	right: 283px;
}
.gramboksD {
	position: relative;
	top: 40px;
	left: 210px;
}
#titleFa {
	position: relative;
	top: 50px;
	right: 250px;
}
.gramboksFa {
	position: relative;
	top: 30px;
	left: 210px;
}
#titleT {
	position: relative;
	top: 40px;
	right: 255px;
}
.gramboksT {
	position: relative;
	top: 20px;
	left: 210px;
}
#titleS {
	position: relative;
	top: 30px;
	right: 244px;
}
.gramboksS {
	position: relative;
	top: 10px;
	left: 210px;
}
#titleFl {
	position: relative;
	top: 20px;
	right: 299px;
}
.gramboksFl {
	position: relative;
	top: 0px;
	left: 210px;
}
#pose {
	position: absolute;
	top: 5px;
	left: 32px;
}
#pose1 {
	position: absolute;
	top: 5px;
	left: 200px;
}
#pose2 {
	position: absolute;
	top: 5px;
	left: 325px;
}
#pose3 {
	position: absolute;
	top: 5px;
	left: 450px;
}
.gramboksP {
	position: absolute;
	top: 24px;
	right: 480px;
}
#line1 {
	position: relative;
	top: -400px;
	width: 0px;
	height: 386px;
	border-left: 2px solid black;
}
#line2 {
	position: absolute;
	top: 384px;
	right: 270px;
	width: 0px;
	height: 70px;
	border-left: 2px solid black;
}
#knapp {
	position: relative;
	top: 16px;
	left: 290px;
	height: 40px;
	width: 120px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 4px;
	font-size: 20px;
	font-style: italic;
	letter-spacing: 0.5px;
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
<center>
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>
<i><h1 id="title">Smågodt</h1></i>

<form method="POST" action="">	

<div id="boks1">
<h3 id="title1">Hvilket smågodt vil du kjøpe?</h3>
<h3 id="title2">Hvor mye gram smågodt vil du kjøpe?</h3>
<div>

<div id="boks2">
<i><h4 id="title3">Godteri:</h4></i>
<i><h4 id="title4">Antall gram:</h4></i>

	<div id="titleD"><input type="checkbox"  name="Dumle" value="Dumle karamellbiter"> Dumle karamellbiter</div>
	<select name="gramboksD" class="gramboksD" id="felt">
		<option value="">0</option>
        <option value="10 gram">10</option> 
		<option value="20 gram">20</option>
        <option value="30 gram">30</option> 
		<option value="40 gram">40</option>
        <option value="50 gram">50</option> 
		<option value="60 gram">60</option>
        <option value="70 gram">70</option> 
		<option value="80 gram">80</option>
        <option value="90 gram">90</option> 
		<option value="100 gram">100</option>
        <option value="110 gram">110</option> 
		<option value="120 gram">120</option>
        <option value="130 gram">130</option> 
		<option value="140 gram">140</option>
        <option value="150 gram">150</option> 
		<option value="160 gram">160</option>
        <option value="170 gram">170</option> 
		<option value="180 gram">180</option>
        <option value="190 gram">190</option> 
		<option value="200 gram">200</option>
        <option value="210 gram">210</option> 
		<option value="220 gram">220</option>
        <option value="230 gram">230</option> 
        <option value="240 gram">240</option> 
		<option value="250 gram">250</option>
        <option value="260 gram">260</option> 
		<option value="270 gram">270</option>
        <option value="280 gram">280</option> 
		<option value="290 gram">290</option>
        <option value="300 gram">300</option> 
	</select><p>

	<div id="titleFa"><input type="checkbox" name="Fazer" value="Fazer liqueue (sjokolade-likør)"> Fazer liqueue (sjokolade-likør)</div>
	<select name="gramboksFa" class="gramboksFa" id="felt">
		<option value="">0</option>
        <option value="10 gram">10</option> 
		<option value="20 gram">20</option>
        <option value="30 gram">30</option> 
		<option value="40 gram">40</option>
        <option value="50 gram">50</option> 
		<option value="60 gram">60</option>
        <option value="70 gram">70</option> 
		<option value="80 gram">80</option>
        <option value="90 gram">90</option> 
		<option value="100 gram">100</option>
        <option value="110 gram">110</option> 
		<option value="120 gram">120</option>
        <option value="130 gram">130</option> 
		<option value="140 gram">140</option>
        <option value="150 gram">150</option> 
		<option value="160 gram">160</option>
        <option value="170 gram">170</option> 
		<option value="180 gram">180</option>
        <option value="190 gram">190</option> 
		<option value="200 gram">200</option>
        <option value="210 gram">210</option> 
		<option value="220 gram">220</option>
        <option value="230 gram">230</option> 
        <option value="240 gram">240</option> 
		<option value="250 gram">250</option>
        <option value="260 gram">260</option> 
		<option value="270 gram">270</option>
        <option value="280 gram">280</option> 
		<option value="290 gram">290</option>
        <option value="300 gram">300</option> 
	</select><p>

	<div id="titleT"><input type="checkbox" name="Twix" value="Twix sjokoladekaramell-biter"> Twix sjokoladekaramell-biter</div>
	<select name="gramboksT" class="gramboksT" id="felt">
		<option value="">0</option>
        <option value="10 gram">10</option> 
		<option value="20 gram">20</option>
        <option value="30 gram">30</option> 
		<option value="40 gram">40</option>
        <option value="50 gram">50</option> 
		<option value="60 gram">60</option>
        <option value="70 gram">70</option> 
		<option value="80 gram">80</option>
        <option value="90 gram">90</option> 
		<option value="100 gram">100</option>
        <option value="110 gram">110</option> 
		<option value="120 gram">120</option>
        <option value="130 gram">130</option> 
		<option value="140 gram">140</option>
        <option value="150 gram">150</option> 
		<option value="160 gram">160</option>
        <option value="170 gram">170</option> 
		<option value="180 gram">180</option>
        <option value="190 gram">190</option> 
		<option value="200 gram">200</option>
        <option value="210 gram">210</option> 
		<option value="220 gram">220</option>
        <option value="230 gram">230</option> 
        <option value="240 gram">240</option> 
		<option value="250 gram">250</option>
        <option value="260 gram">260</option> 
		<option value="270 gram">270</option>
        <option value="280 gram">280</option> 
		<option value="290 gram">290</option>
        <option value="300 gram">300</option> 
	</select><p>
		
	<div id="titleS"><input type="checkbox" name="Snickers" value="Snickers sjokoladekaramell-biter"> Snickers sjokoladekaramell-biter</div>
	<select name="gramboksS" class="gramboksS" id="felt">
		<option value="">0</option>
        <option value="10 gram">10</option> 
		<option value="20 gram">20</option>
        <option value="30 gram">30</option> 
		<option value="40 gram">40</option>
        <option value="50 gram">50</option> 
		<option value="60 gram">60</option>
        <option value="70 gram">70</option> 
		<option value="80 gram">80</option>
        <option value="90 gram">90</option> 
		<option value="100 gram">100</option>
        <option value="110 gram">110</option> 
		<option value="120 gram">120</option>
        <option value="130 gram">130</option> 
		<option value="140 gram">140</option>
        <option value="150 gram">150</option> 
		<option value="160 gram">160</option>
        <option value="170 gram">170</option> 
		<option value="180 gram">180</option>
        <option value="190 gram">190</option> 
		<option value="200 gram">200</option>
        <option value="210 gram">210</option> 
		<option value="220 gram">220</option>
        <option value="230 gram">230</option> 
        <option value="240 gram">240</option> 
		<option value="250 gram">250</option>
        <option value="260 gram">260</option> 
		<option value="270 gram">270</option>
        <option value="280 gram">280</option> 
		<option value="290 gram">290</option>
        <option value="300 gram">300</option> 
	</select><p>
	
	<div id="titleFl"><input type="checkbox" name="Flote" value="Fløtekarameller"> Fløtekarameller</div>
	<select name="gramboksFl" class="gramboksFl" id="felt">
		<option value="">0</option>
        <option value="10 gram">10</option> 
		<option value="20 gram">20</option>
        <option value="30 gram">30</option> 
		<option value="40 gram">40</option>
        <option value="50 gram">50</option> 
		<option value="60 gram">60</option>
        <option value="70 gram">70</option> 
		<option value="80 gram">80</option>
        <option value="90 gram">90</option> 
		<option value="100 gram">100</option>
        <option value="110 gram">110</option> 
		<option value="120 gram">120</option>
        <option value="130 gram">130</option> 
		<option value="140 gram">140</option>
        <option value="150 gram">150</option> 
		<option value="160 gram">160</option>
        <option value="170 gram">170</option> 
		<option value="180 gram">180</option>
        <option value="190 gram">190</option> 
		<option value="200 gram">200</option>
        <option value="210 gram">210</option> 
		<option value="220 gram">220</option>
        <option value="230 gram">230</option> 
        <option value="240 gram">240</option> 
		<option value="250 gram">250</option>
        <option value="260 gram">260</option> 
		<option value="270 gram">270</option>
        <option value="280 gram">280</option> 
		<option value="290 gram">290</option>
        <option value="300 gram">300</option> 
	</select><p>
</div>
<div id="boks3">
<h3 id="pose">Pose per 100g:</h3>
<h4 id="pose1"><input type="radio" name="pose" value="100 gram"> 100g</h4>
<h4 id="pose2"><input type="radio" name="pose" value="200 gram"> 200g</h4>
<h4 id="pose3"><input type="radio" name="pose" value="300 gram"> 300g</h4>

	<input type="submit" name="submit" value="Submit" id="knapp">
</form>
</div>
<div id="line1"></div>
<div id="line2"></div>
</center>	
</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$Dumle = $_POST['Dumle'];
$gramboksD = $_POST['gramboksD'];
$Fazer = $_POST['Fazer'];
$gramboksFa = $_POST['gramboksFa'];
$Twix = $_POST['Twix'];
$gramboksT = $_POST['gramboksT'];
$Snickers = $_POST['Snickers'];
$gramboksS = $_POST['gramboksS'];
$Flote = $_POST['Flote'];
$gramboksFl = $_POST['gramboksFl'];

$pose = $_POST['pose'];

$totalfett = ($gramboksD/100*23) + ($gramboksFa/100*21.2) + ($gramboksT/100*23.8) + ($gramboksS/100*8.9) + ($gramboksFl/100*21);
$totalkalori = ($gramboksD/100*486) + ($gramboksFa/100*436) + ($gramboksT/100*494) + ($gramboksS/100*386) + ($gramboksFl/100*474);
$totalenergi = ($gramboksD/100*2036) + ($gramboksFa/100*1828) + ($gramboksT/100*2071) + ($gramboksS/100*1615) + ($gramboksFl/100*1983);

$totalpris = ($gramboksD/1000*100) + ($gramboksFa/1000*95) + ($gramboksT/1000*100) + ($gramboksS/1000*115) + ($gramboksFl/1000*95);

$sum = $gramboksD + $gramboksFa + $gramboksT + $gramboksS + $gramboksFl;

$smågodt = "
	<div id='svar1'>".$gramboksD."</div> <div id='svar2'>".$Dumle." </div>
	<div id='svar1'>".$gramboksFa."</div> <div id='svar2'>".$Fazer." </div>
	<div id='svar1'>".$gramboksT."</div> <div id='svar2'>".$Twix." </div>
	<div id='svar1'>".$gramboksS."</div> <div id='svar2'>".$Snickers." </div>
	<div id='svar1'>".$gramboksFl."</div> <div id='svar2'>".$Flote." </div>
";

if($Dumle=="" & $Fazer=="" & $Twix=="" &  $Snickers=="" & $Flote=="") {
print "
<html>
<head>
<style>
</style>
</head>
<body>
<center>
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>
<i><h1 id='title'>Smågodt</h1></i>

<div id='boks5'>
<br>
<h1>Din kvittering:</h1>
<br><br><br>
<h3>Ingen av godteriene ble valgt!</h3>
<i><h3>Vennligst prøv på nytt.</h3><i>
<a href=".$valg."><button id='knapp'>Bestill på nytt</button>
</div>
</center>
</body>
</html>
";
}

if($gramboksD=="" & $gramboksFa=="" & $gramboksT=="" &  $gramboksS=="" & $gramboksFl=="") {
print "
<html>
<head>
<style>
</style>
</head>
<body>
<center>
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>
<i><h1 id='title'>Smågodt</h1></i>

<div id='boks5'>
<br>
<h1>Din kvittering:</h1>
<br><br><br>
<h3>Du må velge hvor mye du vil ha!</h3>
<i><h3>Vennligst prøv på nytt.</h3><i>
<a href=".$valg."><button id='knapp'>Bestill på nytt</button>
</div>
</center>
</body>
</html>
";
}

if ($sum <= $pose) {
$result1 = "
<div id='line1'></div>
<div id='line2'></div>
<div id='line3'></div>
<h3>".$smågodt." </h3>
<h3 id='svarfelt1'>Du har valgt en pose på ".$pose."</h3>
<h3 id='svarfelt2'>Prisen for din bestilling er ".$totalpris."kr</h3>
<h3 id='svarfelt3'>Posen inneholder:</h3>
<ul><li id='energi'><h3>Energi: ".$totalenergi." kilojoul</h3></li>
<li id='fett'><h3>Fett: ".$totalfett." gram</h3></li><ul>
<h3 id='svarfelt4'>Takk for din bestilling!</h3>
";
}
if ($sum > $pose) {
$result2 = "Det var ikke nok plass for godteriet ditt i posen!<p>
			<i>Vennligst velg en større pose enn posen på ".$pose.".</i>";		
}
print "
<html>
<head>
<style>
body {
	background-color: #99ebff;
	background-size: cover;
	background-attachment: fixed;
	overflow: hidden;
}
#boks5 {
	display: block;
	position: relative;
	top: 0px;
	height: 460px;
	width: 850px;
	background-color: white;
	border: 2px solid black;
	margin: auto;
	margin-top: none;
	margin-bottom: 200px;
}
#title {
	position: relative;
	top: 30px;	
	width: 850px;
	height: 51px;
	padding-top: 10px;
	padding-bottom: 10px;
	border: 2px solid black;
	color: white;
	background: linear-gradient(to right, silver 0%, #585858 90%);
	font-size: 40px;
	text-shadow: 2px 1px black;
}
#line1 {
	position: absolute;
	top: 70px;
	width: 850px;
	border-bottom: 2px solid black;
}
#line2 {
	position: absolute;
	top: 70px;
	left: 430px;
	height: 290px;
	border-left: 2px solid black;
}
#line3 {
	position: absolute;
	top: 360px;
	width: 850px;
	border-bottom: 2px solid black;
}
#svar1 {
	position: relative;
	top: 13px;
	right: 450px;
	text-align: right;
}
#svar2 {
	position: relative;
	top: -10px;
	left: 50px;
	text-align: center;
	text-align: left;
}
#svarfelt1 {
	position: absolute;
	top: 290px;
	left: 50px;
}
#svarfelt2 {
	position: absolute;
	top: 90px;
	right: 100px;
}
#svarfelt3 {
	position: absolute;
	top: 150px;
	right: 230px;
}
#svarfelt4 {
	position: absolute;
	top: 280px;
	right: 195px;
}
#energi {
	position: absolute;
	top: 180px;
	right: 170px;
}
#fett {
	position: absolute;
	top: 210px;
	right: 206px;
}
#knapp {
	position: absolute;
	top: 385px;
	left: 335px;
	height: 40px;
	width: 180px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 4px;
	font-size: 20px;
	font-style: italic;
	letter-spacing: 0.5px;
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
<center>
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>
<i><h1 id='title'>Smågodt</h1></i>

<div id='boks5'>
<h1>Din kvittering:</h1>
<h3>".$result1."</h3>
<h3>".$result2."</h3>
<a href=".$valg."><button id='knapp'>Bestill på nytt</button>
</div>
</center>
</body>
</html>
";
}
print '<div id="valg">'.$valg.'</div>';

?>