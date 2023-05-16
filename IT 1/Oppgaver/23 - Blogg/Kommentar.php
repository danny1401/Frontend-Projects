<?php

$valg = '
<html>
<head>
<link rel="stylesheet" href="./styles.css">
<title>Danny</title>
<link rel="icon" href="./Ninja.png" type="image/gif" sizes="16x16">

<style>
body {
    background-image: url("./TurquoisePolygon.jpg");
	background-size: 100%;
	margin: 0;
}
@font-face {
   font-family: GraduateRegular;
   src: url(./GraduateRegular.ttf);
}
#cssmenu {
	z-index: 2;
}
#Tiger {
	width: 46px;
	height: 46px;
	right: 50px;
}
#Danny {
	position:absolute;
	left: 370px;
}
#title {
	position: relative;
	top: 5px;
	width: 350px;
	height: 6%;
	text-align: center;
	text-shadow: 3px 3px black;
	color: white;
	font-family: GraduateRegular;
	border: 3px solid white;
}
#boks1 {
	position: absolute;
	top: 160px; 
	left: 100px; 
	width: 500px;
	height: 370px;
	border: 2px solid white;	
	color: white;
	text-shadow: 2px 1px black;
	padding: 10px 30px;
	line-height: 1.6;
	font-size: 19px;
	font-family: Georgia, serif;
}
#title1 {
	position: relative;
	top: -5px;
	font-size: 24px;
}
#boks2 {
	position: absolute;
	top: 140px; 
	right: 100px;
}
#title2 {
	padding: 20px;
	color: white;
	background-color: rgb(34, 176, 114);
	border: 2px solid white;
	text-shadow: 2px 1px black;
}
#text {
	height: 239px;
	width: 550px;
	background-color: rgb(34, 176, 114);
	color: white;
	border: 2px solid white;
	font-size: 19px;
	font-family: Georgia, serif;
	padding: 10px 15px;
	margin-bottom: 16px;
	resize: none;
}
#knapp1 {
	position: absolute; 
	top: 522px;
	right: 130px;
	padding: 5px 28px;
	color: white;
	background-color: rgb(34, 176, 114);
	border: 2px solid white;
	font-size: 17px;
	font-family: Georgia, serif;
	margin-left: 20px; 
	margin-right: 20px;
}
#knapp2 {
	position: absolute; 
	top: 382px;
	right: 272px;
	padding: 5px 28px;
	color: white;
	background-color: rgb(34, 176, 114);
	border: 2px solid white;
	font-size: 17px;
	font-family: Georgia, serif;
	margin-left: 20px; 
	margin-right: 20px;
}
</style>
</head>
<body>

<div id="cssmenu">
<ul>
   <li><a></a></li>
   <li><img src="./../../TigerFavicon1.jpg" id="Tiger"></li>
   <li><a></a></li>
   <li><a href="./../../index.html">Home</a></li>
   <li><a>-</a></li>
   <li class="active"><a>Oppgaver</a>
      <ul>
         <li><a>Termin 1</a>
            <ul>
				<li><a>Uke 1</a>
					<ul>
						<li><a href="./../../Andre%20filer/forstehtmlfil.html">F&oslash;rste HTML-fil</a></li>
						<li><a href="./../../Andre%20filer/Pseudokode.docx" download>Pseudokode</a></li>
					</ul>
				</li>
				<li><a>Uke 2</a>
					<ul>
						<li><a href="./../../Oppgaver/2 - Nyheter/nyhetskiosken.html">Nyhetskiosken</a></li>
					</ul>
				</li>
				<li><a>Uke 3</a>
					<ul>
						<li><a href="./../../Oppgaver/3 - Musikk/Musikk.html">Musikk</a></li>
						<li><a href="./../../Oppgaver/3 - Bestillingsside/PizzaBestilling.html">Bestillingsside</a></li>
					</ul>
				</li>
				<li><a>Uke 4</a>
					<ul>
						<li><a href="./../../Oppgaver/4 - Norgeskart/map area.html">Norgeskartet</a></li>
						<li><a href="./../../Oppgaver/4 - Lyn/Oppgave 4A.html">Lyn</a></li>
					</ul>
				</li>
				<li><a>Uke 5</a>
					<ul>
						<li><a href="./../../Oppgaver/5 - Quantum Computer med iframes/Oppgave 5.html">Kvantedatamaskinen</a></li>
					</ul>
				</li>
				<li><a>Uke 6</a>
					<ul>
						<li><a href="./../../Oppgaver/6 - Menybar/Oppgave%206.html">MenyBar</a></li>
					</ul>
				</li>
				<li><a>Uke 7</a>
					<ul>
						<li><a href="./../../Oppgaver/7 - Internett/Internett.html">Internett</a></li>
					</ul>
				</li>
				<li><a>Uke 8</a>
					<ul>
						<li><a href="./../../Oppgaver/8 - Den digitale samtid/Oppgave 8.html">Den digitale samtid</a></li>
					</ul>
				</li>
				<li><a>Uke 10</a>
					<ul>
						<li><a href="./../../Oppgaver/10 - Bursdagshilsen/Bursdagshilsen.html">Bursdagshilsen</a></li>
					</ul>
				</li>
				<li><a>Uke 11</a>
					<ul>
						<li><a href="./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011.pdf">Fargelegging av hus</a></li>
						<li><a href="./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011B.pdf">Bamse - Oppg 11B</a></li>
						<li><a href="./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011D.pdf">Collage - Oppg 11D</a></li>
						<li><a href="./../../Oppgaver/11 - Bilderedigering/Oppgave%2011E%20-%20Sandfigur.pdf">Sandfigur - Oppg 11E</a></li>
						<li><a href="./../../Oppgaver/11 - Bilderedigering/11%20-%20Bilderedigering/Oppgave%2011E%20-%20Skilt.pdf">Skilt - Oppg 11E</a></li>
					</ul>
				</li>
				<li><a>Uke 12</a>
					<ul>
						<li><a href="./../../Oppgaver/12 - Hytten/Hytten.html">Hytten</a></li>
					</ul>
				</li>
				<li><a>Uke 13</a>
					<ul>
						<li><a href="./../../Oppgaver/13 - Flyselskap/home.html">Flyselskap</a></li>
					</ul>
				</li>
				<li><a>Uke 14</a>
					<ul>
						<li><a href="./../../Oppgaver/14 - PowerPoint om flyselskap/Plan om flyselskap.pdf">Plan om flyselskap</a></li>
					</ul>
				</li>
				<li><a>Uke 15</a>
					<ul>
						<li><a href="#">Datamaskinen</a></li>
					</ul>
				</li>
				<li><a>Uke 16</a>
					<ul>
						<li><a href="#">Videoredigering</a></li>
						<li><a href="./../../Oppgaver/16 - Videoredigering/Trymskvad.html">Trymskvad</a></li>
					</ul>
				</li>
				<li><a>Uke 18</a>
					<ul>
						<li><a href="#">Evaluering av faget</a></li>
						<li><a href="#">coming soon...</a></li>
					</ul>
				</li>
            </ul>
         </li>
         <li><a>Termin 2</a>
            <ul>
               <li><a>Uke 19</a>
					<ul>
						<li><a href="./../../Oppgaver/19 - PHP Start/Oppgave 19A.php">F&oslash;rste PHP-fil</a></li>
						<li><a href="./../../Oppgaver/19 - PHP Start/Oppgave 19B.php">En velkomst</a></li>
						<li><a href="./../../Oppgaver/19 - PHP Start/Oppgave 19C.php">PHP Kalkulator</a></li>
						<li><a href="./../../Oppgaver/19 - PHP Start/Oppgave 19D.php">Ferieplanlegger</a></li>
					</ul>
				</li>
				<li><a>Uke 20</a>
					<ul>
						<li><a href="./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20A.php">Liter til gallon</a></li>
						<li><a href="./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20BogC.php">Literpris og gallonpris</a></li>
						<li><a href="./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20DogE.php">Temperaturfall</a></li>
						<li><a href="#">Frokostbestilling</a></li>
					</ul>
				</li>
				<li><a>Uke 21</a>
					<ul>
						<li><a href="./../../Oppgaver/21 - Geometri og formler/Oppgave 21AogB.php">Geometri hos rektangler</a></li>
						<li><a href="./../../Oppgaver/21 - Geometri og formler/Oppgave 21C-D-E.php">Geometri hos en kube</a></li>
					</ul>
				</li>
				<li><a>Uke 22</a>
					<ul>
						<li><a href="./../../Oppgaver/22 - Regning og spill/Oppgave 22AogB.php">Test deg selv i matte!</a></li>
					</ul>
				</li>
				<li><a>Uke 23</a>
					<ul>
						<li><a href="./Blogg.php">Blogg</a></li>
					</ul>
				</li>
				<li><a>Uke 24</a>
					<ul>
						<li><a href="./../../Oppgaver/24 - Filkatalog/Oppgave 24A.php">Filkatalog</a></li>
						<li><a href="./../../Oppgaver/24 - Filkatalog/Oppgave 24BogC.php">Bildekatalog</a></li>
					</ul>
				</li>
				<li><a>Uke 25</a>
					<ul>
						<li><a href="./../../Oppgaver/25 - Beskyttelse mot hacking/Oppgave 25A.php">Character Counter</a></li>
						<li><a href="./../../Oppgaver/25 - Beskyttelse mot hacking/Oppgave 25B.php">Webside for epost</a></li>
					</ul>
				</li>
				<li><a>Uke 26</a>
					<ul>
						<li><a href="./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26A.php">Sektordiagram</a></li>
						<li><a href="./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26B.php">Bildeopplastning</a></li>
						<li><a href="./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26C.php">Filopplastning</a></li>
					</ul>
				</li>
				<li><a>Uke 27</a>
					<ul>
						<li><a href="./../../Oppgaver/27 - CSV til PHP/Oppgave 27D.php">Norske OL medaljer</a></li>
					</ul>
				</li>
				<li><a>Uke 28</a>
					<ul>
						<li><a href="./../../Oppgaver/28 - SQL Start/Sitat.php">Sitater</a></li>
						<li><a href="./../../Oppgaver/28 - SQL Start/Kvittering.php">Kvittering</a></li>
					</ul>
				</li>
				<li><a>Uke 29</a>
					<ul>
						<li><a href="./../../Oppgaver/29 - Campingplass og Aktivitetsdag/Campingplass/campingplass.html">Campingplass</a></li>
						<li><a href="#">Aktivitetsdag</a></li>
					</ul>
				</li>
				<li><a>Uke 32</a>
					<ul>
						<li><a href="./../../Oppgaver/32 - Bordbestilling/Bordbestilling.php">Bordbestilling</a></li>
					</ul>
				</li>
				<li><a>Uke 34</a>
					<ul>
						<li><a href="./../../Oppgaver/34 - Potpurri/Potpurri.html">Potpurri</a></li>
					</ul>
				</li>
				<li><a>Uke 35</a>
					<ul>
						<li><a href="./../../Oppgaver/35 - Bilder med likes/Oppgave35.php">Bilder med likes</a></li>
					</ul>
				</li>
            </ul>
         </li>
		 <li><a>Pr&oslash;ver</a>
            <ul>
				<li><a href="./../../Pr&oslash;ver/Prove_21_09_2018_Kubenvika/index-p1.html">Kubenvika</a></li>
				<li><a href="./../../Pr&oslash;ver/Prove_02_11_2018_Julebestilling/indexP2.html">Julebestilling</a></li>
				<li><a href="./../../Pr&oslash;ver/Prove_07_12_2018_Bjelleklang/index.html">Bjelleklang</a></li>
				<li><a href="#">Sm&aring;godt</a>
					<ul>
						<li><a href="./../../Pr&oslash;ver/Prove_01_02_2019_Sm&aring;godt/smaagodt_1.php">Oppgave 1</a></li>
						<li><a href="./../../Pr&oslash;ver/Prove_01_02_2019_Sm&aring;godt/smaagodt_2.php">Oppgave 2</a></li>
					</ul>
				</li>
				<li><a href="#">Tog og passasjerer</a>
					<ul>
						<li><a href="./../../Pr&oslash;ver/Prove_29_03_2019_Tog/NSB_1/NSB_1.php">Oppgave 1</a></li>
						<li><a href="./../../Pr&oslash;ver/Prove_29_03_2019_Tog/NSB_2/NSB_2_index1.php">Oppgave 2</a></li>
					</ul>
				</li>
				<li><a href="./../../Pr&oslash;ver/Prove_30_04_2019_Bordbestilling/Bordbestilling.php">Bordbestilling</a></li>
            </ul>
         </li>
		 <li><a>Andre Filer</a>
            <ul>
               <li><a href="./../../Oppgaver/Oppgave Uke 1.html">Oppgaver fra Uke 1</a></li>
			   <li><a href="./../../Andre%20filer/Send Mail/Skriv inn og send Mail.html">Send Mail</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a>-</a></li>
   <li><a href="./Blogg.php">Blogg</a></li>
   <li><a>-</a></li>
   <li><a href="./../.././Ommeg.html">Om meg</a></li>
   <li><a>-</a></li>
   <li><a href="./../../Kontakt.html">Kontakt</a></li>
   <li><a></a></li>
   <li><a id="Danny">Danny Thinh Tran</a></li>
</ul>
</div>

<center><h1 id="title">Kommentarer</h1></center>
<div id="boks1">
<center><h3 id="title1">Legg igjen en kommentar</h3></center>
Her kan du kommentere om mitt arbeid eller <br> mine innlegg i bloggen.
<p>
Du kan også stille meg noen spørsmål hvis du lurer på noe.
<p>
Gjerne rapporter her om du finner noen feil på nettsiden min.
</div>

<center>
<div id="boks2">
<form name="innlegg" action="" method="POST"> 
<h2 id="title2">Skriv din kommentar her:</h2> 
<textarea id="text" rows="4" cols="50" name="innlegg_fil">
</textarea><p>
<input type="submit" name="submit" value="Legg til kommentar" id="knapp2">
</form>
</div>
</center>

<a href="./Blogg.php"><button id="knapp1">Tilbake til bloggen</button></a>
</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$innlegg_raw = $_POST['innlegg_fil'];

$innlegg_1 = str_replace("<","&#60;", $innlegg_raw);
$innlegg_2 = str_replace(">","&#62;", $innlegg_1);
$innlegg_3 = str_replace("$","&#36;", $innlegg_2);
$innlegg_4 = str_replace("?","&#63;", $innlegg_3);
$innlegg_5 = str_replace("'","&#39;", $innlegg_4);
$innlegg = str_replace("/","&#47;", $innlegg_5);
   
$eksempel_kommentar = fopen("./kommentartekst.txt", "a") or die("Kan ikke opne filen!");
$tekst = "<p>\n";
$tekst .= "$innlegg\n";
$tekst .= "\r\n";
fwrite($eksempel_kommentar, $tekst);
fclose($eksempel_kommentar);

print "
<html>
<head>
<link rel='stylesheet' href='./styles.css'>
<title>Danny</title>
<link rel='icon' href='./Ninja.png' type='image/gif' sizes='16x16'>

<style>
body {
    background-image: url('./TurquoisePolygon.jpg');
	background-size: 100%;
	margin: 0;
}
@font-face {
   font-family: GraduateRegular;
   src: url(./GraduateRegular.ttf);
}
#cssmenu {
	z-index: 2;
}
#Tiger {
	width: 46px;
	height: 46px;
	right: 50px;
}
#Danny {
	position:absolute;
	left: 370px;
}
#title {
	position: relative;
	top: 5px;
	width: 350px;
	height: 6%;
	text-align: center;
	text-shadow: 3px 3px black;
	color: white;
	font-family: GraduateRegular;
	border: 3px solid white;
}
#boks3 {
	position: absolute;
	top: 152px;
	left: 401px;
	width: 500px;
	height: 340px;
	border: 2px solid white;	
	color: white;
	text-shadow: 2px 1px black;
	padding: 10px 30px;
	line-height: 1.6;
	font-size: 19px;
	font-family: Georgia, serif;
}
#title1 {
	position: relative;
	top: -5px;
	font-size: 24px;
}
#knapp3 {
	position: relative; 
	top: 420px;
	padding: 5px 28px;
	color: white;
	background-color: rgb(34, 176, 114);
	border: 2px solid white;
	font-size: 17px;
	font-family: Georgia, serif;
	margin-left: 20px; 
	margin-right: 20px;
}
</style>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a></a></li>
   <li><img src='./../../TigerFavicon1.jpg' id='Tiger'></li>
   <li><a></a></li>
   <li><a href='./../../index.html'>Home</a></li>
   <li><a>-</a></li>
   <li class='active'><a>Oppgaver</a>
      <ul>
         <li><a>Termin 1</a>
            <ul>
				<li><a>Uke 1</a>
					<ul>
						<li><a href='./../../Andre%20filer/forstehtmlfil.html'>F&oslash;rste HTML-fil</a></li>
						<li><a href='./../../Andre%20filer/Pseudokode.docx' download>Pseudokode</a></li>
					</ul>
				</li>
				<li><a>Uke 2</a>
					<ul>
						<li><a href='./../../Oppgaver/2 - Nyheter/nyhetskiosken.html'>Nyhetskiosken</a></li>
					</ul>
				</li>
				<li><a>Uke 3</a>
					<ul>
						<li><a href='./../../Oppgaver/3 - Musikk/Musikk.html'>Musikk</a></li>
						<li><a href='./../../Oppgaver/3 - Bestillingsside/PizzaBestilling.html'>Bestillingsside</a></li>
					</ul>
				</li>
				<li><a>Uke 4</a>
					<ul>
						<li><a href='./../../Oppgaver/4 - Norgeskart/map area.html'>Norgeskartet</a></li>
						<li><a href='./../../Oppgaver/4 - Lyn/Oppgave 4A.html'>Lyn</a></li>
					</ul>
				</li>
				<li><a>Uke 5</a>
					<ul>
						<li><a href='./../../Oppgaver/5 - Quantum Computer med iframes/Oppgave 5.html'>Kvantedatamaskinen</a></li>
					</ul>
				</li>
				<li><a>Uke 6</a>
					<ul>
						<li><a href='./../../Oppgaver/6 - Menybar/Oppgave%206.html'>MenyBar</a></li>
					</ul>
				</li>
				<li><a>Uke 7</a>
					<ul>
						<li><a href='./../../Oppgaver/7 - Internett/Internett.html'>Internett</a></li>
					</ul>
				</li>
				<li><a>Uke 8</a>
					<ul>
						<li><a href='./../../Oppgaver/8 - Den digitale samtid/Oppgave 8.html'>Den digitale samtid</a></li>
					</ul>
				</li>
				<li><a>Uke 10</a>
					<ul>
						<li><a href='./../../Oppgaver/10 - Bursdagshilsen/Bursdagshilsen.html'>Bursdagshilsen</a></li>
					</ul>
				</li>
				<li><a>Uke 11</a>
					<ul>
						<li><a href='./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011.pdf'>Fargelegging av hus</a></li>
						<li><a href='./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011B.pdf'>Bamse - Oppg 11B</a></li>
						<li><a href='./../../Oppgaver/11%20-%20Bilderedigering/Oppgave%2011D.pdf'>Collage - Oppg 11D</a></li>
						<li><a href='./../../Oppgaver/11 - Bilderedigering/Oppgave%2011E%20-%20Sandfigur.pdf'>Sandfigur - Oppg 11E</a></li>
						<li><a href='./../../Oppgaver/11 - Bilderedigering/11%20-%20Bilderedigering/Oppgave%2011E%20-%20Skilt.pdf'>Skilt - Oppg 11E</a></li>
					</ul>
				</li>
				<li><a>Uke 12</a>
					<ul>
						<li><a href='./../../Oppgaver/12 - Hytten/Hytten.html'>Hytten</a></li>
					</ul>
				</li>
				<li><a>Uke 13</a>
					<ul>
						<li><a href='./../../Oppgaver/13 - Flyselskap/home.html'>Flyselskap</a></li>
					</ul>
				</li>
				<li><a>Uke 14</a>
					<ul>
						<li><a href='./../../Oppgaver/14 - PowerPoint om flyselskap/Plan om flyselskap.pdf'>Plan om flyselskap</a></li>
					</ul>
				</li>
				<li><a>Uke 15</a>
					<ul>
						<li><a href='#'>Datamaskinen</a></li>
					</ul>
				</li>
				<li><a>Uke 16</a>
					<ul>
						<li><a href='#'>Videoredigering</a></li>
						<li><a href='./Oppgaver/16 - Videoredigering/Trymskvad.html'>Trymskvad</a></li>
					</ul>
				</li>
				<li><a>Uke 18</a>
					<ul>
						<li><a href='#'>Evaluering av faget</a></li>
						<li><a href='#'>coming soon...</a></li>
					</ul>
				</li>
            </ul>
         </li>
         <li><a>Termin 2</a>
            <ul>
               <li><a>Uke 19</a>
					<ul>
						<li><a href='./../../Oppgaver/19 - PHP Start/Oppgave 19A.php'>F&oslash;rste PHP-fil</a></li>
						<li><a href='./../../Oppgaver/19 - PHP Start/Oppgave 19B.php'>En velkomst</a></li>
						<li><a href='./../../Oppgaver/19 - PHP Start/Oppgave 19C.php'>PHP Kalkulator</a></li>
						<li><a href='./../../Oppgaver/19 - PHP Start/Oppgave 19D.php'>Ferieplanlegger</a></li>
					</ul>
				</li>
				<li><a>Uke 20</a>
					<ul>
						<li><a href='./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20A.php'>Liter til gallon</a></li>
						<li><a href='./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20BogC.php'>Literpris og gallonpris</a></li>
						<li><a href='./../../Oppgaver/20 - Matematiske operasjoner/Oppgave 20DogE.php'>Temperaturfall</a></li>
						<li><a href='#'>Frokostbestilling</a></li>
					</ul>
				</li>
				<li><a>Uke 21</a>
					<ul>
						<li><a href='./../../Oppgaver/21 - Geometri og formler/Oppgave 21AogB.php'>Geometri hos rektangler</a></li>
						<li><a href='./../../Oppgaver/21 - Geometri og formler/Oppgave 21C-D-E.php'>Geometri hos en kube</a></li>
					</ul>
				</li>
				<li><a>Uke 22</a>
					<ul>
						<li><a href='./../../Oppgaver/22 - Regning og spill/Oppgave 22AogB.php'>Test deg selv i matte!</a></li>
					</ul>
				</li>
				<li><a>Uke 23</a>
					<ul>
						<li><a href='./Blogg.php'>Blogg</a></li>
					</ul>
				</li>
				<li><a>Uke 24</a>
					<ul>
						<li><a href='./../../Oppgaver/24 - Filkatalog/Oppgave 24A.php'>Filkatalog</a></li>
						<li><a href='./../../Oppgaver/24 - Filkatalog/Oppgave 24BogC.php'>Bildekatalog</a></li>
					</ul>
				</li>
				<li><a>Uke 25</a>
					<ul>
						<li><a href='./../../Oppgaver/25 - Beskyttelse mot hacking/Oppgave 25A.php'>Character Counter</a></li>
						<li><a href='./../../Oppgaver/25 - Beskyttelse mot hacking/Oppgave 25B.php'>Webside for epost</a></li>
					</ul>
				</li>
				<li><a>Uke 26</a>
					<ul>
						<li><a href='./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26A.php'>Sektordiagram</a></li>
						<li><a href='./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26B.php'>Bildeopplastning</a></li>
						<li><a href='./../../Oppgaver/26 - Sektordiagram og filopplastning/Oppgave 26C.php'>Filopplastning</a></li>
					</ul>
				</li>
				<li><a>Uke 27</a>
					<ul>
						<li><a href='./../../Oppgaver/27 - CSV til PHP/Oppgave 27D.php'>Norske OL medaljer</a></li>
					</ul>
				</li>
				<li><a>Uke 28</a>
					<ul>
						<li><a href='./../../Oppgaver/28 - SQL Start/Sitat.php'>Sitater</a></li>
						<li><a href='./../../Oppgaver/28 - SQL Start/Kvittering.php'>Kvittering</a></li>
					</ul>
				</li>
				<li><a>Uke 29</a>
					<ul>
						<li><a href='./../../Oppgaver/29 - Campingplass og Aktivitetsdag/Campingplass/campingplass.html'>Campingplass</a></li>
						<li><a href='#'>Aktivitetsdag</a></li>
					</ul>
				</li>
				<li><a>Uke 32</a>
					<ul>
						<li><a href='./../../Oppgaver/32 - Bordbestilling/Bordbestilling.php'>Bordbestilling</a></li>
					</ul>
				</li>
				<li><a>Uke 34</a>
					<ul>
						<li><a href='./../../Oppgaver/34 - Potpurri/Potpurri.html'>Potpurri</a></li>
					</ul>
				</li>
				<li><a>Uke 35</a>
					<ul>
						<li><a href='./../../Oppgaver/35 - Bilder med likes/Oppgave35.php'>Bilder med likes</a></li>
					</ul>
				</li>
            </ul>
         </li>
		 <li><a>Pr&oslash;ver</a>
            <ul>
				<li><a href='./../../Pr&oslash;ver/Prove_21_09_2018_Kubenvika/index-p1.html'>Kubenvika</a></li>
				<li><a href='./../../Pr&oslash;ver/Prove_02_11_2018_Julebestilling/indexP2.html'>Julebestilling</a></li>
				<li><a href='./../../Pr&oslash;ver/Prove_07_12_2018_Bjelleklang/index.html'>Bjelleklang</a></li>
				<li><a href='#'>Sm&aring;godt</a>
					<ul>
						<li><a href='./../../Pr&oslash;ver/Prove_01_02_2019_Sm&aring;godt/smaagodt_1.php'>Oppgave 1</a></li>
						<li><a href='./../../Pr&oslash;ver/Prove_01_02_2019_Sm&aring;godt/smaagodt_2.php'>Oppgave 2</a></li>
					</ul>
				</li>
				<li><a href='#'>Tog og passasjerer</a>
					<ul>
						<li><a href='./../../Pr&oslash;ver/Prove_29_03_2019_Tog/NSB_1/NSB_1.php'>Oppgave 1</a></li>
						<li><a href='./../../Pr&oslash;ver/Prove_29_03_2019_Tog/NSB_2/NSB_2_index1.php'>Oppgave 2</a></li>
					</ul>
				</li>
				<li><a href='./../../Pr&oslash;ver/Prove_30_04_2019_Bordbestilling/Bordbestilling.php'>Bordbestilling</a></li>
            </ul>
         </li>
		 <li><a>Andre Filer</a>
            <ul>
               <li><a href='./../../Oppgaver/Oppgave Uke 1.html'>Oppgaver fra Uke 1</a></li>
			   <li><a href='./../../Andre%20filer/Send Mail/Skriv inn og send Mail.html'>Send Mail</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a>-</a></li>
   <li><a href='./Blogg.php'>Blogg</a></li>
   <li><a>-</a></li>
   <li><a href='./../../Ommeg.html'>Om meg</a></li>
   <li><a>-</a></li>
   <li><a href='./../../Kontakt.html'>Kontakt</a></li>
   <li><a></a></li>
   <li><a id='Danny'>Danny Thinh Tran</a></li>
</ul>
</div>

<center><h1 id='title'>Kommentarer</h1></center>

<div id='boks3'>
<center><h3 id='title1'>Takk for din kommentar</h3></center>
Dette skrev du i din kommentar:<br><i>".$innlegg."</i>
</div>
<center><a href='./Blogg.php'><button id='knapp3'>Tilbake til bloggen</button></a></center>

</body>
</html>
";

}

print '<div id="$valg"'.$valg.'</div>';
?> 