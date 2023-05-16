<?php
$eksempel_innlegg = fopen('./innleggtekst.txt', "r"); 
$result1 = fread($eksempel_innlegg,filesize('innleggtekst.txt'));

$eksempel_kommentar = fopen('./kommentartekst.txt', "r"); 
$result2 = fread($eksempel_kommentar,filesize('kommentartekst.txt'));

print '
<html>
<head>
<link rel="stylesheet" href="./styles.css">
<title>Danny</title>
<link rel="icon" href="./Ninja.png" type="image/gif" sizes="16x16">

<style>
body {
    background-image: url("./PinkPolygon.png");
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
	width: 17%;
	height: 6%;
	text-align: center;
	text-shadow: 3px 3px black;
	color: white;
	font-family: GraduateRegular;
	border: 3px solid white;
}
#innleggboks {
	position: absolute;
	top: 236px;
	left: 130px;
	width: 380px;
	height: 300px;
	padding: 15px 60px;
	border: 2px solid white;	
	text-shadow: 2px 1px black;
	overflow: auto;
}
#kommentarboks {
	position: absolute;
	top: 236px;
	right: 130px;
	width: 380px;
	height: 300px;
	padding: 15px 60px;
	border: 2px solid white;	
	text-shadow: 2px 1px black;
	overflow: auto;
}
#title1 {
	position: absolute;
	top: 150px;
	left: 130px;
	width: 500px;
	padding: 15px 0px;
	color: white;
	border: 2px solid white;
	font-size: 30px;
}
#title2 {
	position: absolute;
	top: 150px;
	right: 130px;
	width: 500px;
	padding: 15px 0px;
	color: white;
	border: 2px solid white;
	font-size: 30px;
}
#innlegg {
	position: relative;
	top: -3px;
	color: white;
	font-size: 21px;
}
#knapp1 {
	position: absolute; 
	top: 81px; 
	left: 320px;
	padding: 5px 28px;
	color: white;
	background-color: rgb(158, 50, 101);
	border: 2px solid white;
}
#knapp2 {
	position: absolute; 
	top: 81; 
	right: 315px;
	padding: 5px 24px;
	color: white;
	background-color: rgb(158, 50, 101);
	border: 2px solid white;
}
.hint1 .hinttext1 {
	position: absolute;
	top: 0px;
	right: 133px;
	width: 160px;
	padding: 5px 0;
	border-radius: 6px;
	background-color: #555;
	color: #fff;
	text-align: center;
	visibility: hidden;
}
.hint1 .hinttext1::after {
	content: "";
	position: absolute;
	top: 7px;
	right: -10px;
	border-width: 5px;
	border-style: solid;
	border-color: transparent transparent transparent #555;
}
.hint1:hover .hinttext1 {
	visibility: visible;
}
.hint2 .hinttext2 {
	position: absolute;
	top: 0px;
	left: 146px;
	width: 190px;
	padding: 5px 0;
	border-radius: 6px;
	background-color: #555;
	color: #fff;
	text-align: center;
	visibility: hidden;
}
.hint2 .hinttext2::after {
	content: "";
	position: absolute;
	top: 7px;
	left: -10px;
	border-width: 5px;
	border-style: solid;
	border-color: transparent #555 transparent transparent;
}
.hint2:hover .hinttext2 {
	visibility: visible;
}
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background-color: white; 
}
::-webkit-scrollbar-thumb {
  background-color: #101010; 
}
::-webkit-scrollbar-thumb:hover {
  background-color: black; 
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
               <li><a href="./../../../../Oppgaver/Oppgave Uke 1.html">Oppgaver fra Uke 1</a></li>
			   <li><a href="./../../../../Andre%20filer/Send Mail/Skriv inn og send Mail.html">Send Mail</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a>-</a></li>
   <li><a href="./Blogg.php">Blogg</a></li>
   <li><a>-</a></li>
   <li><a href="./../../Ommeg.html">Om meg</a></li>
   <li><a>-</a></li>
   <li><a href="./../../Kontakt.html">Kontakt</a></li>
   <li><a></a></li>
   <li><a id="Danny">Danny Thinh Tran</a></li>
</ul>
</div>

<center><h1 id="title">Blogg</h1></center>

<div class="hint1"><a href="./Innlegg.php"><button id="knapp1">
Logg inn<div class="hinttext1"><i>For å skrive i bloggen</i></div>
</button></a></div>
<div class="hint2"><a href="./Kommentar.php"><button id="knapp2">
Kommentar<div class="hinttext2"><i>For å skrive en kommentar</i></div>
</button></a></div>

<center>
<h1 id="title1">Mine innlegg</h1>
<div id="innleggboks">
<h2 id="innlegg">'.$result1.'</h2>
</div>
</center>

<center>
<h1 id="title2">Kommentarer fra andre</h1>
<div id="kommentarboks">
<h2 id="innlegg">'.$result2.'</h2>
</div>
</center>

</body>
</html>
';

?>