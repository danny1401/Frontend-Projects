<?php

$valg = '

<html>
<head>
<title>Temperaturfall</title>
<style>
body {
	background-color: #660000;
	background-image: linear-gradient(to right, #660000 , #ff4d4d);
	background-image: -webkit-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -moz-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -ms-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -o-linear-gradient(top, #660000 , #ff4d4d);
	background-image: linear-gradient(to bottom, #660000 , #ff4d4d);
}
#innhold {
	position: relative;
	top: 35px;
	height: 530px;
	width: 600px;
	border-radius: 5px;
	border: 3px solid black;
	background-color: white;
}
#title {
	position: relative;
	top: 0px;
	width: 350px;
	padding-bottom: 5px;
	border-radius: 5px;
	border: 3px solid black;
	background-color: #660000;
	background-image: linear-gradient(to right, #660000 , #ff4d4d);
	background-image: -webkit-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -moz-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -ms-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -o-linear-gradient(top, #660000 , #ff4d4d);
	background-image: linear-gradient(to bottom, #660000 , #ff4d4d);
	color: white;
	font-size: 37px;
	font-style: italic;
	text-align: center;
	margin-bottom: 40px;
}
.boks {
	position: relative;
	top: -5px;
	padding-top: 3px;
	padding-bottom: 3px;
	border-radius: 5px;
	border: 2px solid black;
	background-color: #ff3333;
	color: white;
	font-size: 20px;
	text-align: center;
	margin-bottom: 20px;
}
#calculate {
	position: relative;
	top: 1px;
	width: 160px;
	padding: 3px 10px;
	border: 2px solid black;
	border-radius: 5px;
	background-color: #990000;
	color: white;
	font-size: 20px;
	font-style: italic;
	text-align: center;
	margin-bottom: 5px;
}
#info {
	position: absolute;
	top: 100px;
	left: 80px;
	height: 210px;
	width: 180px;	
	padding-left: 20px;
	padding-right: 20px;
	background-color: white;
	border: 3px solid black;
	border-radius: 5px;
	font-size: 18px;
}
#icons {
	position: absolute;
	top: 345px;
	left: 80px;
	width: 220px;
	border: 3px solid black;
	border-radius: 5px;
}
#thermo {
	position: absolute;
	top: 90px;
	right: 87px;
	height: 400px;
	width: 200px;
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: white;
	border: 3px solid black;
	border-radius: 5px;
}
#BackButton {
	position: absolute;
	top: 10px;
	left: 7px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>

<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>
<img src="./thermometer.png" id="thermo"></img>

<center><div id="innhold">
<h1 id="title">Temperaturfall</h1>

<form name="personal" action="" method="POST"> 
<p>
<h3>Høyden der du befinner deg i <i>(meter)</i>: </h3>
<input type="" class="boks" name="hoyde1">

<p>
<h3>Temperaturen der du befinner deg i <i>(grader)</i>: </h3>
<input type="" class="boks" name="temperatur">

<p>
<h3>Høyden du vil beregne temperaturen på <i>(meter)</i>: </h3>
<input type="" class="boks" name="hoyde2">

<p>
<input type="submit" id="calculate" name="submit" value="Regn ut">
</form>
<div></center>

<div id="info">
<center><h3>Info</h3></center>
For hver 100 meter 
<br>vi beveger oss oppover i atmosfæren, 
<br>faller temperatturen i gjennomsnitt på 0,65 °C.
</div>

<img src="./icons.jpg" id="icons"></img>

</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valg = "";
$temperatur = $_POST['temperatur'];
$hoyde1 = $_POST['hoyde1'];
$hoyde2 = $_POST['hoyde2'];

$hoyde1_justert= str_replace (",",".",$hoyde1);
$nytemperatur_justert= str_replace (",",".",$temperatur);
$hoyde2_justert= str_replace (",",".",$hoyde2);


$hoydeforskjell = $hoyde2_justert - $hoyde1_justert;
$sum = (($hoydeforskjell + $nytemperatur_justert)*0.0065);
$result = $temperatur - $sum;


print "
<html>
<head>
<title>Temperaturfall</title>
<style>
body {
	background-color: #660000;
	background-image: linear-gradient(to right, #660000 , #ff4d4d);
	background-image: -webkit-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -moz-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -ms-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -o-linear-gradient(top, #660000 , #ff4d4d);
	background-image: linear-gradient(to bottom, #660000 , #ff4d4d);
}
#innhold {
	position: relative;
	top: 35px;
	height: 530px;
	width: 600px;
	border-radius: 5px;
	border: 3px solid black;
	background-color: white;
}
#title {
	position: relative;
	top: 0px;
	width: 350px;
	padding-bottom: 5px;
	border-radius: 5px;
	border: 3px solid black;
	background-color: #660000;
	background-image: linear-gradient(to right, #660000 , #ff4d4d);
	background-image: -webkit-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -moz-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -ms-linear-gradient(top, #660000 , #ff4d4d);
	background-image: -o-linear-gradient(top, #660000 , #ff4d4d);
	background-image: linear-gradient(to bottom, #660000 , #ff4d4d);
	color: white;
	font-size: 37px;
	font-style: italic;
	text-align: center;
	margin-bottom: 40px;
}
#tekst {
	width: 450px;
	text-align: center;
	margin-bottom: 5px;
}
#knapp {
	position: relative;
	top: 25px;
	width: 160px;
	padding: 3px 10px;
	border: 2px solid black;
	border-radius: 5px;
	background-color: #990000;
	color: white;
	font-size: 20px;
	font-style: italic;
	text-align: center;
	margin-bottom: 5px;
}
.space {
	margin-bottom: 50px;
}
#space1 {
	position: relative;
	top: 5px;
}
#info {
	position: absolute;
	top: 100px;
	left: 80px;
	height: 210px;
	width: 180px;	
	padding-left: 20px;
	padding-right: 20px;
	background-color: white;
	border: 3px solid black;
	border-radius: 5px;
	font-size: 18px;
}
#icons {
	position: absolute;
	top: 345px;
	left: 80px;
	width: 220px;
	border: 3px solid black;
	border-radius: 5px;
}
#thermo {
	position: absolute;
	top: 90px;
	right: 87px;
	height: 400px;
	width: 200px;
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: white;
	border: 3px solid black;
	border-radius: 5px;
}
#BackButton {
	position: absolute;
	top: 10px;
	left: 7px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>

<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>
<img src='./thermometer.png' id='thermo'></img>

<center>
<div id='innhold'>
<h1 id='title'>Resultatene:</h1>

<div id='tekst'>
<h3 class='space'>Du er <i>".$hoyde1." meter</i> over havet.</h3>
<p>
<h3 class='space'>I den høyden er det <i>".$temperatur." grader</i>.</h3>
<p>
<h3 class='space'>Forskjellen mellom din nåværende høyde <div id='space1'> og den ønskede høyden er <i>".$hoydeforskjell. " meter</i>.</div></h3>
<p>
<h3 class='space'>Temperaturen for den ønskede høyden er <i>".$result." grader</i>.</h3>
</div>
<a href=".$valg."><button id='knapp'>Regn ut igjen</button></a>
</div>
</center>

<div id='info'>
<center><h3>Info</h3></center>
For hver 100 meter 
<br>vi beveger oss oppover i atmosfæren, 
<br>faller temperatturen i gjennomsnitt på 0,65 °C.
</div>
<img src='./icons.jpg' id='icons'></img>

</body>
</html>
";
}
print '<div id="valg">'.$valg.'</div>';

?>