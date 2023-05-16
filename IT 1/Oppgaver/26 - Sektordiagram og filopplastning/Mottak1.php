<?php 
if(empty($_FILES['filbane']['name'])) {
    die ("
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
			<center><h1 id='title8'>Ingen bilder ble valgt</h1></center>
			<center><h3 id='title9'>Du må velge bildene for å kunne laste dem opp.</h3></center>
			<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
			<p>
			<center><a href='./Oppgave 26B.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
			</div></center>
			</body>
			</html>
		"); 
    } 
else { 

$temp_fil = $_FILES['filbane']['tmp_name'];
$filnavn = "./bildekatalog/" . $_FILES['filbane']['name'];

move_uploaded_file($temp_fil, $filnavn)
    or die ("
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
			<center><h1 id='title8'>En error oppstod</h1></center>
			<center><h3 id='title9'>Kunne ikke kopiere filen/filene.</h3></center>
			<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
			<p>
			<center><a href='./Oppgave 26B.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
			</div></center>
			</body>
			</html>
		"); 

$filtype = $_FILES['filbane']['type']; 
$storrelse = $_FILES['filbane']['size']; 			

$folder = "";
$file = "";

$folder = "./bildekatalog/";
$bilde = opendir($folder);

while ($file = readdir($bilde))
	
{
$pathinfo = pathinfo($file);

if ($pathinfo['extension'] == "jpg" || $pathinfo['extension'] == "png" || $pathinfo['extension'] == "jpeg")
	{$files[] = $file;}
}

closedir($bilde);
$bildeCount = 0;

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
#boks2 {
	position: relative;
	top: 50px;
	height: 350px; 
	width: 900px;
	background-color: #e0e0e0;
	border: 3px solid black;
	border-radius: 10px;
	margin-bottom: 90px; 
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
	margin-bottom: 40px; 
}
#editbilde {
	position: relative;
	top: 20px;
	height: 230px;
	width: 370px;
	margin-bottom: 10px;
	margin-left: 10px;
	border: 2px solid black;
	border-radius: 5px;
}
#bottom {
	margin-bottom: 60px; 
}
#knapp1 {
	position: relative;
	top: 20px;
	height: 35px;
	width: 160px;
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
	top: 20px;
	left: 20px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body><center>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>

<div id="boks2">
<h1 id="title1">Webside for bildeopplastning</h1>

<h3>Denne filen ble lastet opp</h3>
<b>Filnavn:</b> '.$filnavn.'<p> 
<b>Type:</b> '.$filtype.'<p> 
<b>Størrelse:</b> '.$storrelse.' byte<p> 

<a href="./Oppgave 26B.php"><button id="knapp1">Last opp nytt bilde</button></a>
</div>

<table>
<tr>
';

foreach ($files as $file) {
	print '
		<td><img src="'.$folder.$file.'" id="editbilde"></img></td>';
	
	if ($bildeCount == 2) {
		print '</tr><tr>';
		$bildeCount = 0;
	}
	else {$bildeCount++;}
}

print '</tr></table><div id="bottom"></div></center></body></html>';

}
        
?>