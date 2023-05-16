<?php

print "
<html>
<head>
<title>Bilder med likes</title>
</head>
<style>
#bar {
	position: relative;
	top: 20px;
	padding: 0px 160px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 80px;
}
#BackButton {
	position: absolute;
	top: 30px;
	left: 70px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
<body>
<center>
<a href='./../../index.html'><img src='back1.png' id='BackButton'></img></a>

<a href='./Oppgave35.php'><button id='bar'><h1>Home</h1></button></a>
<a href='./Admin.php'><button id='bar'><h1>Admin</h1></button></a>
</center>
</body>
</html>
";

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
<style>
body {
	background-color: #505050;
	background-attachment: fixed;
	background-repeat: no-repeat;
}
img {
	position: relative;
	height: 230px;
	width: 380px;
	margin-bottom: 5px;
	margin-left: 10px;
	margin-right: 10px;
	border: 2px solid black;
}
#sum {
	position:relative;
	top: -25px;
	width: 360px;
	padding: 15px 10px;
	color: white;
	background-color: #101010;
	border: 2px solid black;
	font-size: 20px;
}
#knapp {
	position:relative;
	top: -45px;
	width: 384px;
	padding: 13px 10px;
	color: black;
	background-color: white;
	border: 2px solid black;
	font-size: 20px;
	margin-bottom: 30px;
}
</style>
</head>
<body>

<center>
<table>
<tr>
';

foreach ($files as $file) {
	print '
	<form action="./registrer_mottak.php" method="POST">
	<input type="hidden" name="stem" value="'.$file.'">';
	$teller = 0;

include("./db_connection.php");  

$sql = "SELECT * FROM tbl_stemmer_danny WHERE stemmer = '$file'";  

$resultat = mysqli_query($lenke, $sql);
  
while ($row = mysqli_fetch_array($resultat)) {  
    $stemmer[$teller] = $row["stemmer"];  
    $teller = $teller+1;  
}  
mysqli_close($tilkopling);  
	print '
		<td><img src="'.$folder.$file.'"><br><center>
		<input type="hidden" name="bilde" value="'.$file.' "> 
		<h2 id="sum">'.$teller.' likes</h2>
		<input id="knapp" type="submit" value="Like"></img></center></form></td>';

	if ($bildeCount == 2) {
		print '</tr><tr>';
		$bildeCount = 0;
	}
	else {$bildeCount++;}
}

print '</tr></table></center></body></html>';

?>