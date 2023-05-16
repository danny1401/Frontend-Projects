<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$liter = $_POST['liter'];

$gallon = ($liter * 3.785411784);

$gallonavrund = round($gallon,2);

print "
<html>
<head>
<style>
#svar {
	position: relative;
	top: 450px;
	z-index: 2;
}
</style>
</head>
<body>
<center><h3 id='svar'> ".$liter." liter = ".$gallonavrund." gallon</h3></center>
</body>
</html>
";

}

print '
<html>
<head>
<title>Liter til gallon</title>
<style>
body {
	background-color: #ff4dff;
	background-image: linear-gradient(to right, #ff4dff , #330033);
	background-image: -webkit-linear-gradient(top, #ff4dff , #330033);
	background-image: -moz-linear-gradient(top, #ff4dff , #330033);
	background-image: -ms-linear-gradient(top, #ff4dff , #330033);
	background-image: -o-linear-gradient(top, #ff4dff , #330033);
	background-image: linear-gradient(to bottom, #ff4dff , #330033);
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
	left: 222px;
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
	top: 191px;
	right: 42px;
	letter-spacing: 0.3px;
}
#felt {
	position: absolute;
	top: 244px;
	left: 170px;
	letter-spacing: 0.3;
	font-style: italic;
}
#boks {
	position: absolute;
	top: 328px;
	left: 597px;
	text-align: center;
	z-index: 2;
}
#calculate {
	position: absolute;
	top: 380px;
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
	<h1 id="title1">Omregner </h1><h3 id="title2"> - fra liter til gallon!</h3>
	
	<h3><i id="info">Her kan du skrive inn hvor mye liter du vil konvertere til gallon: </i></h3>
	<p>
	<h4 id="felt">Liter: </h4>
	</div></center>
	
	<input name="liter" id="boks">

	<p>
	<input type="submit" name="submit" value="Regn ut" id="calculate">
</form>

</body>
</html>

';
?>