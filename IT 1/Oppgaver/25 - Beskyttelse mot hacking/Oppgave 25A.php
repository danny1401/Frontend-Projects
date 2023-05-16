<?php

print '
<html>
<head>
<title>Character Counter</title>
<style>
body {
    background-image: url("space.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#title1 {
	position: fixed;
	top: 15px;
	left: 180px;
	width: 444px;
	color: white;
	background-color: black;
	padding-top: 5px;
	padding-bottom: 5px;
	border: 3px solid white;
	font-size: 35px;
}
#felt {
	position: fixed;
	top: 120px;
	left: 180px;
	height: 155px;
	width: 450px;
	color: white;
	background-color: black;
	border: 2px solid white;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 40px;
	padding-right: 40px;
	font-size: 17px;
	font-family: Georgia, serif;
	resize: none;
}
#submit {
	position: fixed;
	top: 244px;
	left: 565px;
	height: 31px;
	width: 65px;	
	color: white;
	background-color: black;
	border: 2px solid white;
	font-size: 15px;
	z-index: 2;
}
#boks1 {
	position: fixed;
	top: 330px;
	left: 180px;
	height: 200px;
	width: 407px;
	color: white;
	background-color: black;
	border: 2px solid white;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 20px;
	padding-right: 20px;
	font-size: 17px;
	font-family: Georgia, serif;
}
#title2 {
	position: relative;
	top: -10px;
	left: 20px;
	font-size: 20px;
}
#boks3 {
	position: fixed;
	top: 39px;
	left: 768px;
	height: 532px;
	width: 407px;
	background-color: black;
	border: 2px solid white;
}
#boks4 {
	position: fixed;
	top: 39px;
	left: 768px;
	height: 40px;
	width: 407px;
	color: white;
	background-color: black;
	border: 2px solid white;
	font-size: 20px;
	text-align: center;
}
#title3 {
	position: relative;
	top: 8px;	
}
#BackButton {
	position: fixed;
	top: 30px;
	left: 20px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>
<center><h1 id="title1">Character Counter</h1></center>
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>

<form method="POST" action="">
<textarea name="felt" placeholder="Skriv noe her" id="felt"></textarea>
<input type="submit" name="submit" value="Submit" id="Submit">
</form>

<div id="boks1">
<h2 id="title2">Resultater:</h2>
</div>

<div id="boks3"></div>
<div id="boks4"><b id="title3">Antall ulike tegn</b></div>

</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$eksempel = $_POST['felt'];

$lengde_av_streng = strlen($eksempel);

$tegn_i_streng = (count_chars($eksempel,3));

$til_array = str_split($tegn_i_streng);

$arrayLengde = count($til_array);

$vis_tegn = (print_r ($til_array, true));        

for ($a=0; $a<$arrayLengde; $a++) {
    $antall = (substr_count($eksempel,$tegn_i_streng[$a]));
    $sum[$a] = $antall;
    $tegn[$a] = $tegn_i_streng[$a];
}

print '
<html>
<head>
<style>
#boks1 {
	position: fixed;
	top: 330px;
	left: 180px;
	height: 200px;
	width: 407px;
	color: white;
	background-color: black;
	border: 2px solid white;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 20px;
	padding-right: 20px;
	font-size: 17px;
	font-family: Georgia, serif;
}
#text1 {
	position: relative;
	top: -5px;
	left: 20px;
}
#title2 {
	position: relative;
	top: -10px;
	left: 20px;
	font-size: 20px;
}
#linespace {
	font-size: 13px;
	letter-spacing: 1.5px;
	color: blue;
}
.color {
	color: #00ccff;
}
</style>
</head>
<body>
	<div id="boks1">
	<h2 id="title2">Resultater:</h2>
		<div id="text1">
			Dette skrev du: <i id="linespace">'.$eksempel.'</i>
			<p>
			Du skrev til sammen <i class="color">'.$arrayLengde.'</i> ulike karakterer.
			<p>
			Det er totalt <i class="color">'.$lengde_av_streng.'</i> tegn i det du skrev. 
			<p>
		</div>
	</div>
</body>
</html>
';

$teller = count($tegn);

for ($b=0; $b<$teller; $b++) {
	print "
		<html>
		<head>
		<style>
			#boks2 {
				position: relative;
				top: 75px;
				left: 760px;
				height: 20px;
				width: 407px;
				color: white;
				background-color: black;
				border-top: 2px solid white;
				border-bottom: 2px solid white;
				border-left: 2px solid white;
				border-right: 2px solid white;
				padding-top: 4px;
				padding-bottom: 4px;				
				font-size: 17px;
				font-family: Georgia, serif;
				text-align: center;	
			}
			#color1 {
				color: blue;
				margin-left: 5px;
				margin-right: 5px;
			}
			#color2 {
				color: #00ccff;
				margin-left: 5px;
				margin-right: 5px;
			}
			#margin {
				margin-bottom: 100px;
			}
		</style>
		</head>
		<body>	
			<div id='boks2'>
			Tegnet <i id='color1'>".$tegn[$b]."</i> forekommer i <i id='color2'>".$sum[$b]."</i> tilfeller.<br>
			<div id='margin'></div>
			</div>
		</body>
		</html>
";
}

}
?>     
