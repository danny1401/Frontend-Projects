<?php

$stemme = $_POST['stem'];

$datoTid = date("d.m.Y_H:i:s");
$ipAdd = $_SERVER['REMOTE_ADDR'];

include ("./db_connection.php");

$sql= "INSERT INTO tbl_stemmer_danny (stemmer, ipAdd, datoTid) VALUES ('$stemme','$ipAdd', '$datoTid')";

mysqli_query($lenke, $sql);

mysqli_close($tilkopling);

mysqli_close($lenke);

print '
<html>
<head>
<title>Bilder med likes</title>
<style>
body {
	background-color: #505050;
	background-attachment: fixed;
	background-repeat: no-repeat;
}
#bar {
	position: relative;
	top: 20px;
	padding: 0px 160px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 50px;
}
#title {
	position: relative;
	top: 0px;
	width: 500px;
	padding: 20px 0px;
	background-color: white;	
	border: 2px solid black;
	font-size: 35px;
}
#boks {
	position: relative;
	top: -31px;
	height: 250px;
	width: 500px;
	padding: 30px 30x;
	color: white;
	background-color: #101010;
	border: 2px solid black;
	font-size: 19px;
}
#knapp {
	position: relative;
	top: -33px;
	width: 504px;
	padding: 20px 0px;
	background-color: white;	
	border: 2px solid black;
	font-size: 23px;
	font-style: italic;
}
</style>
<body>
<center>
<a href="./Oppgave35.php"><button id="bar"><h1>Home</h1></button></a>
<a href="./Admin.php"><button id="bar"><h1>Admin</h1></button></a>

<h2 id="title">Stemmen er mottatt</h2>
<div id="boks">
<br><br>
Du stemte på: '.$stemme.'
<br><br><br>
Din IP-adresse er: '.$ipAdd.'
<br><br><br>
Du stemte: '.$datoTid.'</h2></div>
<a href="./Oppgave35.php"><button id="knapp"><b>Stem på nytt</b></button></a>

</center>
</body>
</html>
';
?> 