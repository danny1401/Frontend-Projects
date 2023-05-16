<?php

$sitat = $_POST['sitat'];
$opprinnelse = $_POST['opprinnelse'];
$referanse = $_POST['referanse'];

############### Beskyttelse mot SQL-injection ######################################

$sitat = str_replace("<"," &#60; ", $sitat);
$sitat = str_replace(">"," &#62; ", $sitat);
$sitat = str_replace("<script>"," &#60;_script_&#62; ", $sitat);
$sitat = str_replace("</script>"," &#60;_&#47;script_&#62; ", $sitat);
$sitat = str_replace("//"," &#47; &#47; ", $sitat);
$sitat = str_replace("$"," &#36; ", $sitat);

$opprinnelse = str_replace("<"," &#60; ", $opprinnelse);
$opprinnelse = str_replace(">"," &#62; ", $opprinnelse);
$opprinnelse = str_replace("<script>"," &#60;_script_&#62; ", $opprinnelse);
$opprinnelse = str_replace("</script>"," &#60;_&#47;script_&#62; ", $opprinnelse);
$opprinnelse = str_replace("//"," &#47; &#47; ", $opprinnelse);
$opprinnelse = str_replace("$"," &#36; ", $opprinnelse);

$referanse = str_replace("<"," &#60; ", $referanse);
$referanse = str_replace(">"," &#62; ", $referanse);
$referanse = str_replace("<script>"," &#60;_script_&#62; ", $referanse);
$referanse = str_replace("</script>"," &#60;_&#47;script_&#62; ", $referanse);
$referanse = str_replace("//"," &#47; &#47; ", $referanse);
$referanse = str_replace("$"," &#36; ", $referanse);

################## Avslutt paa beskyttelsestiltak ###############

include("./db_connection.php");

// sitat opprettes i database.
$sql = "INSERT INTO tbl_sitat_danny (sitat, opprinnelse, referanse) VALUES ('$sitat', '$opprinnelse', '$referanse')";
mysqli_query($lenke, $sql);
mysqli_close($tilkopling);
mysqli_close($lenke);

print '
<html>
<head>
<style>
body {
	background-color: #0033cc;
	background: linear-gradient(to bottom right, #3366ff 0%, #cc33ff 90%);
}
#boks {
	position: relative;
	top: 30px;
	height: 540px;
	width: 550px;
	background-color: white;
	border: 3px solid black;
	border-radius: 8px;
}
#title1 {
	position: relative;
	top: 5px;
	width: 400px;
	padding: 5px 0px;
	background-color: #0033cc;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 40px;
}
#title2 {
	position: relative;
	top: 10px;
}
#boks2 {
	position: relative;
	top: 55px;
}
#info1 {
	position: absolute;
	top: -36px;
	left: 153px;
}
#info2 {
	position: absolute;
	top: 35px;
	left: 100px;
}
#info3 {
	position: absolute;
	top: 112px;
	left: 116px;
}
#felt1 {
	position: absolute;
	top: -15px;
	left: 200px;
	font-size: 16px;
}
#felt2 {
	position: absolute;
	top: 56px;
	left: 200px;
	font-size: 16px;
}
#felt3 {
	position: absolute;
	top: 133px;
	left: 200px;
	font-size: 16px;
}
#knapp1 {
	position: absolute;
	top: 430px;
	left: 90px;
	height: 40px;
	width: 170px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 430px;
	right: 90px;
	height: 40px;
	width: 170px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#BackButton {
	position: absolute;
	top: 13px;
	left: 15px;
	height: 63; 
	width: 67;
	z-index: 2;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<h1 id="title1">Sitater</h1>
<h2 id="title2">Sitatet ditt ble opprettet</h2>

<div id="boks2">
<h4 id="info1">Sitat:</h4> <div id="felt1">'.$sitat.'</div>
<h4 id="info2">Opprinnelse:</h4> <div id="felt2">'.$opprinnelse.'</div>
<h4 id="info3">Referanse:</h4> <div id="felt3">'.$referanse.'</div>
</div>

<a href="./Sitat.php"><button id="knapp1">Opprett et nytt sitat</button></a>
<a href="./VisningS.php"><button id="knapp2">Se på alle sitatene</button></a>
</div>
</center>
</body>
</html>
';

?>