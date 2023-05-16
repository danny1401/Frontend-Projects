<?php

$valg = '

<html>
<head>
<title>Geometri hos en kube</title>
<style>
body {
	background-color: #99ccff;
}
#title1 {
	position: relative;
	top: 10px;	
	font-size: 40px;
}
#title2 {
	position: absolute;
	top: 50px;
	left: 600px;
	font-size: 30px;
}
#title3 {
	position: absolute;
	top: 125px;
	left: 638px;
}
#title4 {
	position: absolute;
	top: 225px;
	left: 639px;
}
#title5 {
	position: absolute;
	top: 325px;
	left: 642px;
}
#title6 {
	position: absolute;
	top: 425px;
	left: 631px;
}
#boks1 {
	position: absolute;
	top: 180px;
	left: 543px;
	height: 30px;
	width: 270px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-size: 18;
}
#boks2 {
	position: absolute;
	top: 280px;
	left: 543px;
	height: 30px;
	width: 270px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-size: 18;
}
#boks3 {
	position: absolute;
	top: 380px;
	left: 543px;
	height: 30px;
	width: 270px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-size: 18;
}
#boks4 {
	position: absolute;
	top: 480px;
	left: 543px;
	height: 30px;
	width: 270px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-size: 18;
}
#calculate {
	position: absolute;
	top: 545px;
	left: 625px;
	height: 30px;
	width: 100px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
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

<center><h1 id="title1">Overflateareal og volum </h1><br><i><h2 id="title2">- av en kube</h2></i></center>
<form method="POST" action="">
	
	<h2 id="title3">Lengde</h2>
	<input name="lengde" id="boks1">

	<p>	
	<h2 id="title4">Bredde</h2>
	<input name="bredde" id="boks2">

	<p>	
	<h2 id="title5">Høyde</h2>
	<input name="hoyde" id="boks3">	
	
	<p>	
	<h2 id="title6">Tykkelse</h2>
	<input name="tykkelse" id="boks4">
	
	<p>
	<input type="submit" name="submit" value="Calculate" id="calculate">
</form>

</body>
</html>

';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$lengde = $_POST['lengde'];
$bredde = $_POST['bredde'];
$hoyde = $_POST['hoyde'];
$tykkelse = $_POST['tykkelse'];

$areal = $lengde * $bredde;

$overflateareal = $areal * 6;

$volum = $lengde * $bredde * $hoyde;

$volumt = ($lengde+($tykkelse*2))*($bredde+($tykkelse*2))*($høyde+($tykkelse*2));

print "
<html>
<head>
<title>Geometri hos en kube</title>
<style>
body {
	background-color: #99ccff;
}
#linje {
	position: relative;
	top: 30px;
	font-size: 22px;
}
#linje1 {
	position: relative;
	top: 50px;
	width: 450px;
	background-color: white;
	padding-top: 7px;
	padding-bottom: 10px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
}
#linje2 {
	position: relative;
	top: 70px;
	width: 450px;
	background-color: white;
	padding-top: 7px;
	padding-bottom: 10px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
}
#linje3 {
	position: relative;
	top: 90px;
	width: 450px;
	background-color: white;
	padding-top: 7px;
	padding-bottom: 10px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
}
#linje4 {
	position: relative;
	top: 110px;
	width: 450px;
	background-color: white;
	padding-top: 7px;
	padding-bottom: 10px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
}
#knapp {
	position: relative;
	top: 130px;
	background-color: white;
	color: black;
	padding: 7px 20px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	text-decoration: none;
	font-weight: 700;
}
</style>
</head>
<body>
<center id='linje'><h1>Resultatene:</h1></center>
<center><h2 id='linje1'> Overflatearealet av en side = ".$areal." m<sup>2</sup></h2></center>
<center><h2 id='linje2'> Overflatearealet av alle sidene = ".$overflateareal." m<sup>2</sup></h2></center>
<center><h2 id='linje3'> Volumet til kuben uten veggene = ".$volum." m<sup>3</sup></h2></center>
<center><h2 id='linje4'> Volumet til kuben med veggene = ".$volumt." m<sup>3</sup></h2></center>

<center><a href='".$valg."' id='knapp'>Regn på nytt</a></center>
</body>
</html>
";

}

print '<div id="$valg"'.$valg.'</div>';

?>