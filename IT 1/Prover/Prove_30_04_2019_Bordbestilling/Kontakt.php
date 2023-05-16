<?php
print '
<html>
<head>
<link rel="stylesheet" href="./style.css">
<title>Bordbestilling</title>
   
<style>
body {
	background-image: url(./kontakt.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title1 {
	position: absolute;
	top: 96px;
	right: 90px;
	width: 490px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;	
}
#title2 {
	position: absolute;
	top: 96px;
	left: 90px;
	width: 490px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;	
}
#tekst {
	position: absolute;
	top: 190px;
	left: 90px;
	height: 309px;
	width: 490px;
	background-color: #505050;
	border: 2px solid white;
	color: white;
	text-align: left;
	text-shadow: 2px 1px black;
	padding: 30px 30px;
	line-height: 1.6;
	font-size: 21px;
	font-family: Georgia, serif;
}
#felt1 {
	position: absolute;
	top: 190px;
	right: 90px;
	height: 60px;
	width: 554px;
	background-color: #505050;
	color: white;
	border: 2px solid white;
	font-size: 18px;
	font-family: Georgia, serif;
	padding: 5px 25px;
	margin-bottom: 25px;
}
#felt2 {
	position: absolute;
	top: 248px;
	right: 90px;
	height: 60px;
	width: 554px;
	background-color: #505050;
	color: white;
	border: 2px solid white;
	font-size: 18px;
	font-family: Georgia, serif;
	padding: 5px 25px;
	margin-bottom: 25px;
}
#felt3 {
	position: absolute;
	top: 306px;
	right: 90px;
	height: 200px;
	width: 554px;
	background-color: #505050;
	color: white;
	border: 2px solid white;
	font-size: 19px;
	font-family: Georgia, serif;
	padding: 15px 25px;
	resize: none;
}
#knapp {
	position: absolute;
	top: 487px;
	right: 90px;
	width: 554px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
	margin-top: 15px;
}
::placeholder {
	color: white;
	text-shadow: 2px 1px black;	
}
#knapp:hover {
	background-color: black;	
}
:focus {
    outline: none !important;
}
</style>
</head>
<body>
<div class="fixed" id="bar">
	<div class="buttons">
		<a href="./Bordbestilling.php" class="meny"><strong>Home</strong></a>
		<a href="./Kunde_opprett.php" class="meny"><strong>Bestilling</strong></a>
		<a href="./Kontakt.php" class="meny"><strong>Kontakt</strong></a>
		<a href="./Admin.php" class="meny"><strong>Admin</strong></a>
	</div>
	<h1 id="title">Bordbestilling</h1>
</div>
<br><br><br>
<center>
<h1 id="title1">Send din e-post her</h1>
<h1 id="title2">Ta kontakt med oss</h1>

<div id="tekst">
Her kan du ta kontakt med oss og stille oss sp&oslash;rsm&aring;l hvis 
du lurer på noe eller om du har noen problemer med din bestilling. 
<p>
Du kan bruke denne siden til å sende oss en e-post 
eller ringe oss ved nummeret vårt: 12345678.
<p>
Gjerne rapporter her om du finner noen feil p&aring; nettsiden vår.
</div>
</center>

<form action="./Mail.php" method="get" >
<input type="text" autocomplete="off" placeholder="E-post" name="felt1" id="felt1">
<br>
<input type="text" autocomplete="off" placeholder="Subjekt" name="felt2" id="felt2">
<br>
<textarea placeholder="Innhold" name="felt3" id="felt3"></textarea>
<p>
<a><button id="knapp">Send e-post</button></a>
</form>

</body>
</html>

';

?>