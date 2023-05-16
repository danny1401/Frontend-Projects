<?php

$valg = '

<html>
<head>
<title>Geometri hos rektangler</title>
<style>
body {
	background-color: #ffff66;
}
#title {
	position: relative;
	top: 10px;	
	width: 500px;
	padding-bottom: 2px;
	border: 2px solid black;
	background-color: white;
	font-size: 40px;
}
#title1 {
	position: absolute;
	top: 95px;
	left: 623px;
}
#boks1 {
	position: absolute;
	top: 180px;
	left: 470px;
	text-align: center;
}
#boks2 {
	position: absolute;
	top: 180px;
	left: 720px;
	text-align: center;
}
#parantes1 {
	position: absolute;
	top: 149px;
	left: 396px;	
}
#parantes2 {
	position: absolute;
	top: 149px;
	left: 910px;
}
#pluss1 {
	position: absolute;
	top: 160px;
	left: 675px;
}
#title2 {
	position: absolute;
	top: 240px;
	left: 641px;
}
#boks3 {
	position: absolute;
	top: 320px;
	left: 470px;
	text-align: center;
}
#boks4 {
	position: absolute;
	top: 0px;
	left: 44px;
	text-align: center;
}
#ganging {
	position: absolute;
	top: 300px;
	left: 675px;
}
#title3 {
	position: absolute;
	top: 380px;
	left: 528px;	
}
#squareroot {
	position: absolute;
	top: 445px;
	left: 400px;
}
#boks5 {
	position: absolute;
	top: 470px;
	left: 470px;
	text-align: center;
}
#boks6 {
	position: absolute;
	top: 470px;
	left: 720px;
	text-align: center;
}
#pluss2 {
	position: absolute;
	top: 449px;
	left: 675px;
}
#calculate {
	position: absolute;
	top: 540px;
	left: 608px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 40px;
	padding-right: 40px;
	border: 2px solid black;
	background-color: white;
	font-size: 17px;
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

<center><i><h1 id="title">Geometri hos rektangler</h1></i></center>
<form method="POST" action="">
	<h1 id="title1">Omkrets</h1>
	
	<p>
	<h1 id="parantes1">2 * (</h1>
	<input name="lengde" id="boks1">
	<h2 id="pluss1">+</h2>
	<input name="bredde" id="boks2">
	<h1 id="parantes2">)</h1>
	<p>

	<h1 id="title2">Areal</h1>

	<p>
	<input name="lengde" id="boks3">
	<h2 id="ganging">*</h>
	<input name="bredde" id="boks4">
	<p>
	
	<h1 id="title3">Diagonalen/Hypotenus</h1>
	<p>
	<h1 id="squareroot">&#8730</h1>
	<input name="lengde" id="boks5">
	<h2 id="pluss2">+</h2>
	<input name="bredde" id="boks6">
	
	<p>
	<input type="submit" name="submit" value="Regn ut" id="calculate">
</form>

</body>
</html>

';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$lengde = $_POST['lengde'];
$bredde = $_POST['bredde'];

$omkrets = 2 *($lengde + $bredde);
$areal = $lengde * $bredde;

$diagonal = (sqrt((($lengde) * ($lengde)) + (($bredde) * ($bredde))) . "<br>");

$diagonalavrund = round($diagonal,2);

print "
<html>
<head>
<title>Geometri hos rektangler</title>
<style>
body {
	background-color: #ffff66;
}
#linje {
	position: relative;
	top: 20px;
	width: 300px;
	border: 2px solid black;
	background-color: white;
	font-size: 35px;
}
#linje1 {
	position: absolute;
	top: 80px;
	left: 413px;
	width: 540px;
	padding-bottom: 2px;
	background-color: white;
	border: 2px solid black;
}
#linje2 {
	position: absolute;
	top: 130px;
	left: 413px;
	width: 540px;
	padding-bottom: 2px;
	background-color: white;
	border: 2px solid black;
}
#linje3 {
	position: absolute;
	top: 180px;
	left: 413px;
	width: 540px;
	padding-bottom: 2px;
	background-color: white;
	border: 2px solid black;
}
#svar1 {
	position: absolute;
	top: 530px;
	left: 660px;
}
#svar2 {
	position: absolute;
	top: 360px;
	left: 920px;
}
#svar3 {
	position: absolute;
	top: 335px;
	left: 610px;
}
#rektangel {
	position: absolute;
	top: 240px;
	left: 445px;
}
#knapp {
	position: absolute;
	top: 28px;
	left: 40px;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 10px;
	padding-right: 10px;
	border: 2px solid black;
	background-color: white;
	color: black;
	font-size: 22px;
	text-align: center;
	text-decoration: none;
}
</style>
</head>
<body>
<center><h1 id='linje'>Resultatene:</h1></center>
<center><h2 id='linje1'> Omkretsen av rektanglet = 2*(".$lengde." + ".$bredde.") = " .$omkrets." </h2></center>
<center><h2 id='linje2'> Areal av rektanglet = ".$lengde." * ".$bredde." = " .$areal." </h2></center>
<center><h2 id='linje3'> Diagonalen i rektanglet = &#8730 ( ".$lengde."<sup>2</sup> + ".$bredde."<sup>2</sup> ) = " .$diagonalavrund." </h2></center>
<img src='rektangel1.png' id='rektangel'></img>
<h1 id='svar1'>".$lengde."<h1>
<h1 id='svar2'>".$bredde."<h1>
<h1 id='svar3'>".$diagonalavrund."<h1>

<a href='".$valg."' id='knapp'>Tilbake</a>
</body>
</html>
";

}

print '<div id="$valg"'.$valg.'</div>';

?>