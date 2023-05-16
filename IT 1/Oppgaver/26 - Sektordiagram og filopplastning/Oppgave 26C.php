<?php

if ($innskrevet_pw == "") {

$valg = '

<html>
<head>
<title>Webside for filopplastning</title>
<style>
body {
	background-image: url(./Tech.png);
	background-size: 100%;
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #303030;
	border: 4px solid white;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;
	color: white;
	background-image: url(./Tech1.png);
	border: 3px solid white;
	border-radius: 10px;
	font-size: 34px;
	text-shadow: 2px 1px black;
}
#title2 {
	position: relative;
	top: 45px;
	color: white;
}
#title3 {
	position: relative;
	top: 40px;
	color: white;
}
#title4 {
	position: relative;
	top: 75px;
	color: white;
	letter-spacing: 1;
}
#felt {
	position: relative;
	top: 65px;
}
#inputfelt {
	position: relative;
	top: -25px;
	height: 40px;
	width: 350px;
	color: white;
	background-color: #404040;
	border: 2px solid white;
	border-radius: 10px;
	text-align: center;
	font-size: 20px;
	margin-top: 20px;
	margin-bottom: 20px;
}
.knapp {
	height: 35px;
	width: 112px;
	color: white;
	background-image: url(./Tech2.png);
	border: 2px solid white;
	border-radius: 10px;
	font-weight: 700;
	margin-bottom: 20px;
	margin-left: 10px;
	margin-right: 10px;
}
.hint {
	position: absolute;
	top: 10px;
	right: 30px;
	height: 23px;
	width: 50px;
	color: white;
	background-color: #303030;
	border: 2px solid white;
	text-align: center;
	display: inline-block;
}

.hint .hinttext {
	position: absolute;
	top: 35px;
	right: -20px;
	width: 160px;
	padding: 5px 0;
	border-radius: 6px;
	background-color: #555;
	color: #fff;
	text-align: center;
	visibility: hidden;
}

.hint .hinttext::after {
	content: "";
	position: absolute;
	top: -10px;
	left: 110px;
	border-width: 5px;
	border-style: solid;
	border-color: transparent transparent #555 transparent;
}
.hint:hover .hinttext {
	visibility: visible;
}
#BackButton {
	position: absolute;
	top: 30px;
	left: 40px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>
<h3><div class="hint">Hint<div class="hinttext"><i>danny / passord</i></div></div></h3>

<center>
<div id="boks">
<h1 id="title1">Webside for filopplastning</h1>
<h2 id="title2"><i>Vennligst logg inn for å kunne sende epost</i></h2>

<h3 id="title3">(<i>Passord Only</i>)</h3>

<h4 id="title4"><i>Skriv inn her:</i></h4>

<form action="" method="post" name="test" id="felt">
<p>
<input type="password" name="passord" size = "30" value="" id="inputfelt">
<p>
<input type="submit" name="submit" value="Log in" class="knapp">
<input type="reset" name="reset" value ="Reset" class="knapp">
</form>
</div>
<center>

</body>
</html>
';
}

$innskrevet_pw = "";
$riktig_pw = ("danny");
$riktig_pw1 = ("passord");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$innskrevet_pw = $_POST['passord'];

if ($innskrevet_pw == $riktig_pw || $innskrevet_pw == $riktig_pw1) {
innlogget();	}

elseif ($innskrevet_pw != $riktig_pw) {
avvist();	}
}

function innlogget() {
print '
<html>
<head>
<title>Webside for filopplastning</title>
<style>
body {
	background-image: url(./Tech.png);
	background-size: 100%;
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #303030;
	border: 4px solid white;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;
	color: white;
	background-image: url(./Tech1.png);
	border: 3px solid white;
	border-radius: 10px;
	font-size: 34px;
	text-shadow: 2px 1px black;
}
#title5 {
	position: relative;
	top: 15px;
	color: white;
}
#title6 {
	position: relative;
	top: 20px;
	font-size: 17px;
	color: white;
}
#velgfil {
	position: relative;
	top: 50px;
	padding: 8px 8px;
	color: white;
	background-image: url(./Tech1.png);
	border: 1px solid white;
	border-radius: 7px;
}
#knapp1 {
	height: 40px;
	width: 180px;
	font-size: 18px;
}
.knapp {
	position: relative;
	top: 90px;
	height: 35px;
	width: 112px;
	color: white;
	background-image: url(./Tech2.png);
	border: 2px solid white;
	border-radius: 10px;
	font-weight: 700;
	margin-bottom: 20px;
}
#BackButton {
	position: absolute;
	top: 30px;
	left: 40px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>

<center>
<div id="boks">
<h1 id="title1">Webside for filopplastning</h1>
<h2 id="title5">Her kan du laste opp dokumenter (doc/pdf/xls)</h2>

<form action = "Mottak2.php" method="post" enctype="multipart/form-data">
<div id="title6">Bruk knappen under for å velge filen som skal lastes opp.</div>
<p>
<input type="file" name="filbane" size="50"  id="velgfil"
accept="
	application/msword,
	application/vnd.openxmlformats-officedocument.wordprocessingml.document,
	application/vnd.openxmlformats-officedocument.wordprocessingml.template,
	application/vnd.ms-word.document.macroEnabled.12,
	application/vnd.ms-word.template.macroEnabled.12,

	application/pdf,
	
	application/excel,
	application/vnd.ms-excel,
	application/x-excel,
	application/x-msexcel,
	application/vnd.ms-excel,
	application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,
	application/vnd.openxmlformats-officedocument.spreadsheetml.template,
	application/vnd.ms-excel.sheet.macroEnabled.12,
	application/vnd.ms-excel.template.macroEnabled.12,
	application/vnd.ms-excel.addin.macroEnabled.12,
	application/vnd.ms-excel.sheet.binary.macroEnabled.12,
	
	application/vnd.ms-powerpoint,
	application/vnd.openxmlformats-officedocument.presentationml.presentation,
	application/vnd.openxmlformats-officedocument.presentationml.template,
	application/vnd.openxmlformats-officedocument.presentationml.slideshow,
	application/vnd.ms-powerpoint.addin.macroEnabled.12,
	application/vnd.ms-powerpoint.presentation.macroEnabled.12,
	application/vnd.ms-powerpoint.template.macroEnabled.12,
	application/vnd.ms-powerpoint.slideshow.macroEnabled.12
" />
<p>
<input type="submit" name="Lastopp" value="Last opp filene" class="knapp" id="knapp1" />
</form>

<a href="Oppgave%2026C.php"><button class="knapp">Logg ut</button></a>
</div>

</body>
</html>
';

} 

function avvist() {
print "
<html>
<head>
<title>Webside for filopplastning</title>
<style>
body {
	background-image: url(./Tech.png);
	background-size: 100%;
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #303030;
	border: 4px solid white;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;
	color: white;
	background-image: url(./Tech1.png);
	border: 3px solid white;
	border-radius: 10px;
	font-size: 34px;
	text-shadow: 2px 1px black;
}
#title8 {
	position: relative;
	top: 60px;
	color: white;
	font-size: 30px;
}
#title9 {
	position: relative;
	top: 65px;
	color: white;
}
#title10 {
	position: relative;
	top: 105px;
	color: white;
	font-style: italic;
}
#felt {
	position: relative;
	top: 30px;
}
.knapp {
	position: relative;
	top: 110px;
	height: 35px;
	width: 112px;
	color: white;
	background-image: url(./Tech2.png);
	border: 2px solid white;
	border-radius: 10px;
	font-weight: 700;
	margin-bottom: 20px;
}
#BackButton {
	position: absolute;
	top: 30px;
	left: 40px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>
<a href='./../../index.html'><img src='back0.png' id='BackButton'></img></a>

<center><div id='boks'>
<center><h1 id='title1'>Webside for filopplastning</h1></center>
<center><h1 id='title8'>Passordet er feil</h1></center>
<center><h3 id='title9'>Du får ikke tilgang til å sende epost.</h3></center>
<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
<p>
<center><a href='./Oppgave 26C.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
</div></center>
</body>
</html>
";
}

print '<div id="$valg"'.$valg.'</div>';

?>