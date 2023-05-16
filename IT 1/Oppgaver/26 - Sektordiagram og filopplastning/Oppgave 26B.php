<?php

if ($innskrevet_pw == "") {

$valg = '

<html>
<head>
<title>Webside for bildeopplastning</title>
<style>
body {
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 3px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;
	background-color: #008071;
	background-image: linear-gradient(to right, #008071 , #1affe4);
	background-image: -webkit-linear-gradient(top, #008071 , #1affe4);
	background-image: -moz-linear-gradient(top, #008071 , #1affe4);
	background-image: -ms-linear-gradient(top, #008071 , #1affe4);
	background-image: -o-linear-gradient(top, #008071 , #1affe4);
	background-image: linear-gradient(to bottom, #008071 , #1affe4);
	border: 2px solid black;
	border-radius: 10px;
	font-size: 34px;
}
#title2 {
	position: relative;
	top: 45px;
}
#title3 {
	position: relative;
	top: 40px;
}
#title4 {
	position: relative;
	top: 75px;
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
	border: 2px solid black;
	border-radius: 10px;
	text-align: center;
	font-size: 20px;
	margin-top: 20px;
	margin-bottom: 20px;
}
.knapp {
	height: 35px;
	width: 112px;
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
	border: 2px solid black;
	border-radius: 10px;
	font-weight: 700;
	margin-left: 10px;
	margin-right: 10px;
}
.hint {
	position: absolute;
	top: 10px;
	right: 30px;
	height: 23px;
	width: 50px;
	background-color: #e0e0e0;
	border: 2px solid black;
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
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>
<h3><div class="hint">Hint<div class="hinttext"><i>danny / passord</i></div></div></h3>

<center>
<div id="boks">
<h1 id="title1">Webside for bildeopplastning</h1>
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
<title>Webside for bildeopplastning</title>
<style>
body {
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 3px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;
	background-color: #008071;
	background-image: linear-gradient(to right, #008071 , #1affe4);
	background-image: -webkit-linear-gradient(top, #008071 , #1affe4);
	background-image: -moz-linear-gradient(top, #008071 , #1affe4);
	background-image: -ms-linear-gradient(top, #008071 , #1affe4);
	background-image: -o-linear-gradient(top, #008071 , #1affe4);
	background-image: linear-gradient(to bottom, #008071 , #1affe4);
	border: 2px solid black;
	border-radius: 10px;
	font-size: 34px;
}
#title5 {
	position: relative;
	top: 15px;
}
#title6 {
	position: relative;
	top: 20px;
	font-size: 17px;
}
#velgfil {
	position: relative;
	top: 50px;
	padding: 8px 8px;
	background-color: lightgrey;
	border: 1px solid black;
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
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
	border: 2px solid black;
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
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<h1 id="title1">Webside for bildeopplastning</h1>
<h2 id="title5">Her kan du laste opp bilder (jpg/png/gif)</h2>

<form action = "Mottak1.php" method="post" enctype="multipart/form-data">
<div id="title6">Bruk knappen under for å velge bilde som skal lastes opp.</div>
<p>
<input type="file" name="filbane" size="50" accept="image/x-png,image/gif,image/jpeg" id="velgfil" />
<p>
<input type="submit" name="Lastopp" value="Last opp bildene" class="knapp" id="knapp1" />
</form>

<a href="Oppgave%2026B.php"><button class="knapp">Logg ut</button></a>
</div>

</body>
</html>
';

} 

function avvist() {
print "
<html>
<head>
<title>Webside for epost</title>
<style>
body {
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 3px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 5px;
	padding-bottom: 6px;	
	background-color: #008071;
	background-image: linear-gradient(to right, #008071 , #1affe4);
	background-image: -webkit-linear-gradient(top, #008071 , #1affe4);
	background-image: -moz-linear-gradient(top, #008071 , #1affe4);
	background-image: -ms-linear-gradient(top, #008071 , #1affe4);
	background-image: -o-linear-gradient(top, #008071 , #1affe4);
	background-image: linear-gradient(to bottom, #008071 , #1affe4);
	border: 2px solid black;
	border-radius: 10px;
	font-size: 34px;
}
#title8 {
	position: relative;
	top: 60px;
	font-size: 30px;
}
#title9 {
	position: relative;
	top: 65px;
}
#title10 {
	position: relative;
	top: 105px;
	font-style: italic;
}
#felt {
	position: relative;
	top: 30px;
}
.knapp {
	position: relative;
	top: 125px;
	height: 35px;
	width: 112px;
	background-color: #00665a;
	background-image: linear-gradient(to right, #00665a , #1affe4);
	background-image: -webkit-linear-gradient(top, #00665a , #1affe4);
	background-image: -moz-linear-gradient(top, #00665a , #1affe4);
	background-image: -ms-linear-gradient(top, #00665a , #1affe4);
	background-image: -o-linear-gradient(top, #00665a , #1affe4);
	background-image: linear-gradient(to bottom, #00665a , #1affe4);
	border: 2px solid black;
	border-radius: 10px;
	font-weight: 700;
	margin-left: 10px;
	margin-right: 10px;
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
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>

<center><div id='boks'>
<center><h1 id='title1'>Webside for bildeopplastning</h1></center>
<center><h1 id='title8'>Passordet er feil</h1></center>
<center><h3 id='title9'>Du får ikke tilgang til å sende epost.</h3></center>
<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
<p>
<center><a href='./Oppgave 26B.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
</div></center>
</body>
</html>
";
}

print '<div id="$valg"'.$valg.'</div>';

?>