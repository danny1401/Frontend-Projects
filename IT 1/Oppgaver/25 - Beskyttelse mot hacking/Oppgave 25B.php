<?php

if ($innskrevet_pw == "") {

$valg = '

<html>
<head>
<title>Webside for epost</title>
<style>
body {
    background-image: url("marble1.png");
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 2px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 1px;
	padding-bottom: 3px;
    background-image: url("marblecut.png");
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
    background-image: url("marblecut.png");
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
<h1 id="title1">Passordbeskyttet webside for epost</h1>
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
print "
<html>
<head>
<title>Webside for epost</title>
<style>
body {
    background-image: url('marble1.png');
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 2px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 1px;
	padding-bottom: 3px;
    background-image: url('marblecut.png');
	border: 2px solid black;
	border-radius: 10px;
	font-size: 34px;
}
#felt1 {
	position: relative;
	top: 25px;
	height: 50px;
	width: 310px;
	background: white;
	color: black;
	border: 2px solid black;
	border-radius: 10px;
	padding-left: 15px;
	padding-right: 15px;
	font-size: 17px;
	font-family: Georgia, serif;
}
#felt2 {
	position: relative;
	top: 30px;
	height: 50px;
	width: 310px;
	background: white;
	color: black;
	border: 2px solid black;
	border-radius: 10px;
	padding-left: 15px;
	padding-right: 15px;
	font-size: 17px;
	font-family: Georgia, serif;
}
#felt3 {
	position: relative;
	top: 35px;
	height: 130px;
	width: 310px;
	background: white;
	color: black;
	border: 2px solid black;
	border-radius: 10px;
	padding-left: 15px;
	padding-right: 13px;
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 17px;
	font-family: Georgia, serif;
	resize: none;
}
.knapp {
	height: 35px;
	width: 112px;
    background-image: url('marblecut.png');
	border: 2px solid black;
	border-radius: 10px;
	font-weight: 700;
	margin-left: 10px;
	margin-right: 10px;
}
#knapp1 {
	position: absolute;
	top: 430px;
	left: 200px;
}
#knapp2 {
	position: absolute;
	top: 430px;
	right: 200px;
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

<center>
<div id='boks'>
<h1 id='title1'>Passordbeskyttet webside for epost</h1>

<form action='./mail.php' method='get'>
<input type='text' placeholder='Avsender' name='felt1' id='felt1'>
<p>
<input type='text' placeholder='Emne' name='felt2' id='felt2'>
<p>
<textarea name='felt3' placeholder='Melding' id='felt3'></textarea>
<p>
<input type='submit' name='submit' value='Send' class='knapp' id='knapp1'>
</form>

<a href='Oppgave%2025B.php'><button class='knapp' id='knapp2'>Logg ut</button></a>
</div>

</center>
</body>
</html>
";
} 

function avvist() {
print "
<html>
<head>
<title>Webside for epost</title>
<style>
body {
    background-image: url('marble1.png');
}
#boks {
	position: relative;
	top: 50px;
	height: 500px;
	width: 680px;
	background-color: #e0e0e0;
	border: 2px solid black;
	border-radius: 10px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 560px;
	padding-top: 1px;
	padding-bottom: 3px;
    background-image: url('marblecut.png');
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
    background-image: url('marblecut.png');
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
<center><h1 id='title1'>Passordbeskyttet webside for epost</h1></center>
<center><h1 id='title8'>Passordet er feil</h1></center>
<center><h3 id='title9'>Du får ikke tilgang til å sende epost.</h3></center>
<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
<p>
<center><a href='./Oppgave 25B.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
</div></center>
</body>
</html>
";
}

print '<div id="$valg"'.$valg.'</div>';

?>