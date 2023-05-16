<?php
if(empty($_FILES['filbane']['name'])) {
    die ("
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
			<center><h1 id='title8'>Ingen fil ble valgt</h1></center>
			<center><h3 id='title9'>Du må velge filene for å kunne laste dem opp.</h3></center>
			<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
			<p>
			<center><a href='./Oppgave 26C.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
			</div></center>
			</body>
			</html>
		");  
    } 
else { 

$temp_fil = $_FILES['filbane']['tmp_name'];
$filnavn = "./filkatalog/" . $_FILES['filbane']['name']; 

move_uploaded_file($temp_fil, $filnavn)
    or die ("
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
			<center><h1 id='title8'>En error oppstod</h1></center>
			<center><h3 id='title9'>Kunne ikke kopiere filen/filene.</h3></center>
			<center><h3 id='title10'>Vennligst prøv på nytt</h3></center>
			<p>
			<center><a href='./Oppgave 26C.php' id='felt'><button class='knapp'>Tilbake</button></a></center>
			</div></center>
			</body>
			</html>
		");

$filtype = $_FILES['filbane']['type']; 
$storrelse = $_FILES['filbane']['size']; 

$folder = "";
$file = "";

$folder = "./filkatalog/";
$filListe = opendir($folder);

while ($file = readdir($filListe))
{
    if ($file !="." && $file !=".." && $file !="back1.png")
    {
        if (filetype($dirname.$file) == "dir")
        {    }

        if (filetype($dirname.$file) != "dir")
        { $files[] = $file; }	
	}
}    

closedir($filListe);
$bildeCount = 0;

print '
<html>
<head>
<title>Webside for filopplastning</title>
<style>
body {
	background-image: url(./Tech.png);
	background-size: 100%;
}
#boks2 {
	position: fixed;
	top: 60px;
	left: 170px;
	height: 500px; 
	width: 600px;
	color: white;
	background-color: #303030;
	border: 4px solid white;
	border-radius: 10px;
	margin-bottom: 30px; 
}
#title1 {
	position: relative;
	top: 0px;
	width: 500px;
	padding-top: 5px;
	padding-bottom: 6px;
	color: white;
	background-image: url(./Tech1.png);
	border: 3px solid white;
	border-radius: 10px;
	font-size: 34px;
	text-shadow: 2px 1px black;
}
#button {
	position: relative;
	top: 170px;
	left: 390px;
	height: 50px;
	width: 320px;
	color: white;
	background-color: #303030;
	border: 2px solid white;
	border-radius: 10px;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: 5px;
	margin-right: 5px;
	font-weight: 700;
	font-size: 14px;
}
#title2 {
	position: relative;
	top: 20px;
}
#info {
	margin-top: 70px;
}
.skrift {
	font-size: 17px;
}
#title3 {
	position: absolute;
	top: 65px;
	right: 105px;
	width: 380px;	
	padding-top: 5px;
	padding-bottom: 6px;
	background-color: #303030;	
	border: 3px solid white;
	border-radius: 10px;
	font-size: 34px;
	text-align: center;
	text-shadow: 2px 1px black;	color: white;	
}
#knapp1 {
	position: relative;
	top: 60px;
	height: 35px;
	width: 160px;
	color: white;
	background-image: url(./Tech2.png);
	border: 2px solid white;
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
<a href="./../../index.html"><img src="back0.png" id="BackButton"></img></a>

<h1 id="title3">Liste over filer</h1>

<center>
<div id="boks2">
<h1 id="title1">Webside for filopplastning</h1>
<h2 id="title2">Denne filen ble lastet opp</h2>
<div id="info">
<b class="skrift">Filnavn:</b> '.$filnavn.'<p> 
<b class="skrift">Type:</b> '.$filtype.'<p> 
<b class="skrift">Størrelse:</b> '.$storrelse.' byte<p> 

<a href="./Oppgave 26C.php"><button id="knapp1">Last opp ny fil</button>
</div>
</div>

<table>
<tr>
';

foreach ($files as $file) {
	print '
		<td><a href="'.$folder.$file.'" target="_blank"><button id="button">'.$file.'</button></a></td>';

	if ($bildeCount == 0) {
		print '</tr><tr>';
		$bildeCount = 0;
	}
	else {$bildeCount++;}
}

print '</tr></table><div id="bottom"></div></center></body></html>';

}

?>