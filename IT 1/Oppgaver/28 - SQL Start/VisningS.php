<?php

include ("./db_connection.php");

print' 
<html>
<head>
<style>
body {
	background-color: #0033cc;
	background: linear-gradient(to bottom right, #3366ff 0%, #cc33ff 90%);
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 30px;
	height: auto;
	width: 550px;
	padding-bottom: 125px;
	margin-bottom: 30px;
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
#boks2 {
	position: relative;
	top: 10px;
}
td {
	padding: 5px 10px;
	width: 110px;
	border-right: 2px solid black;	
}
.top {
	border-top: 2px solid black;	
}
#linje {
	border-left: 2px solid black;
}
#linje1 {
	border-top-left-radius: 8px;
	border-left: 2px solid black;
}
#linje2 {
	border-top-right-radius: 8px;
}
.padding {
	padding-top: 7px;
	padding-bottom: 7px;
	font-size: 19px;
	font-weight: 700;
}
#knapp {
	position: relative;
	top: 75px;
	left: 0px;
	right: 0px;
	height: 40px;
	width: 170px;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#line {
	position: relative;
	top: 10px;
	width: 401px;
	border-bottom: 2px solid black;
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
<div id="hr"></div>
<table id="boks2">
	<tr>
		<td class="top" id="linje1"><div class="padding"> Sitat </div></td>
		<td class="top"			   ><div class="padding"> Opprinnelse </div></td>
		<td class="top" id="linje2"><div class="padding"> Referanse </div></td>
	</tr>
';

$sql = "SELECT id, sitat, opprinnelse, referanse FROM tbl_sitat_danny";

$resultat = mysqli_query($lenke, $sql);

while ($row = mysqli_fetch_array($resultat)){

$sitat = $row["sitat"];

$opprinnelse = $row["opprinnelse"];

$referanse = $row["referanse"];

print '
	<tr>
		<td id="linje">' .$sitat. '</td>
		<td>' .$opprinnelse. '</td>
		<td>' .$referanse. '</td>
	</tr>
';

}

mysqli_close($tilkopling);

print '
</table>
<div id="line"></div>
<a href="./Sitat.php"><button id="knapp">Opprett et nytt sitat</button></a>
</div>
</center>
</body>
</html>
';

?>