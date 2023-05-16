<?php

$kundeID = $_POST['KundeID'];
$day = $_POST['Day'];
$month = $_POST['Month'];
$year = $_POST['Year'];
$betaling = $_POST['Betaling'];

$avreise = $day.'.'.$month.'.'.$year;

print "<html>
<head>
<title>Campingplass</title>
<style>
body {
    background-image: url('camping2.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 40px;
	height: 420px;
	width: 600px;
	padding: 50px 50px;
	background-color: rgb(211, 211, 211, 0.9);
	border: 2px solid black;
}
#buttontitle {
	position: relative;
	top: -45px;
	color: black;
	text-decoration: none;
}
#title {
	width: 300px;
	padding: 5px 0px;
	border-radius: 8px;
	background-color: white;
	border: 2px solid black;
}
#title1 {
	position: relative;
	top: 10px;
}
#boks3 {
	position: relative;
	top: 30px;
	left: -10px;
}
#title4 {
	position: relative;
	left: -18px;
	margin-bottom: 15px;
}
#title5 {
	position: relative;
	left: 76px;
	margin-bottom: 15px;
	margin-right: 93px;
}
#title6 {
	position: relative;
	left: 63px;
	margin-right: 82px;
}

#knapp1 {
	position: absolute;
	top: 230px;
	left: 30px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#knapp2 {
	position: absolute;
	top: 230px;
	right: 205px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#knapp3 {
	position: absolute;
	top: 230px;
	right: 10px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
}
#BackButton {
	position: absolute;
	top: 13px;
	left: 15px;
	height: 63; 
	width: 67;
}
</style>
</head>
<body>
<a href='./../../../index.html'><img src='back1.png' id='BackButton'></img></a>

<center>
<div id='boks'>
<a href='./campingplass.html' id='buttontitle'><h1 id='title'>Campingplass</h1></a>

<h2 id='title1'>Utsjekking fullført</h2>

<div id='boks3'>
<b id='title4'>Kundenummer:</b> ".$kundeID."<p>
<b id='title5'>Avreise:</b> ".$avreise."<p>
<b id='title6'>Betaling:</b> ".$betaling."<p>
<div>

<a href='./kunde_sjekk_ut.php'><button id='knapp1'>Sjekk ut</button></a>
<a href='./kunde_sjekk_inn.php'><button id='knapp2'>Sjekk inn</button></a>
<a href='./campingplass.html'><button id='knapp3'>Hjemmesiden</button></a>
</body>
</html>";

include("./db_connection.php");

$sqlA = "UPDATE tbl_kunde_camping_danny SET Avreise='$avreise', SjekkUT='Ja', Betalt='$betaling' WHERE KundeID='$kundeID'";

$resultat = mysqli_query($lenke, $sqlA);

$sqlB = "UPDATE tbl_plass_camping_danny SET KundeID = null WHERE KundeID = '$kundeID'";

$resultat = mysqli_query($lenke, $sqlB);

mysqli_close($tilkopling);
mysqli_close($lenke);

?>