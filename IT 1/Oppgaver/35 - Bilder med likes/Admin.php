<?php
$valg = '
<html>
<head>
<title>Bilder med likes</title>
<style>
body {
	background-color: #505050;
	background-attachment: fixed;
	background-repeat: no-repeat;
	overflow: hidden;
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
	top: -26px;
	height: 300px;
	width: 500px;
	padding: 30px 30x;
	color: white;
	background-color: #101010;
	border: 2px solid black;
	font-size: 19px;
}
#input {
	width: 250px;
	height: 30px;
	text-align: center;
}
#knapp1 {
	position: relative;
	top: -63px;
	right: -3px;
	width: 253px;
	padding: 20px 0px;
	background-color: white;	
	border: 2px solid black;
	font-size: 20px;
	font-style: italic;
	font-weight: 700;
}
#knapp2 {
	position: relative;
	top: -63px;
	left: -3px;
	width: 253px;
	padding: 20px 0px;
	background-color: white;	
	border: 2px solid black;
	font-size: 20px;
	font-style: italic;
	font-weight: 700;
}
</style>
</head>
</style>
<body>
<center>
<a href="./Oppgave35.php"><button id="bar"><h1>Home</h1></button></a>
<a href="./Admin.php"><button id="bar"><h1>Admin</h1></button></a>

<h1 id="title">Admin</h1>
<div id="boks">
<form action="" method="post" name="test">
<br><br>
<h2>Passord:</h2>
<input type="password" name="passord" id="input" value=""> 
</div>
<input id="knapp1" type="reset" name="Reset" value="Reset">
<input id="knapp2" type="submit" name="submit" value="Logg inn">

</form>
</center>
</body>
</html>
';

$innskrevet_pw = "";
$riktig_pw = ("test");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$valg = "";
	
$innskrevet_pw = $_POST['passord'];

if ($innskrevet_pw == $riktig_pw) {
innlogget();	}

elseif ($innskrevet_pw != $riktig_pw) {
avvist();	}
}

function innlogget() {

print "
<html>
<body>
<meta http-equiv='refresh' content='0;url=./lastoppbilde.php'>
</body>
</html>
";

} 

function avvist() {;
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
	top: -26px;
	height: 270px;
	width: 500px;
	padding: 30px 30x;
	color: white;
	background-color: #101010;
	border: 2px solid black;
	font-size: 19px;
}
#knapp {
	position:relative;
	top: -28px;
	width: 504px;
	padding: 13px 10px;
	color: black;
	background-color: white;
	border: 2px solid black;
	font-size: 23px;
	font-style: italic;
	font-weight: 700;
}
</style>
</head>
</style>
<body>
<center>
<a href="./Oppgave35.php"><button id="bar"><h1>Home</h1></button></a>
<a href="./Admin.php"><button id="bar"><h1>Admin</h1></button></a>

<h1 id="title">Admin</h1>
<div id="boks">
<br><br><br><br>
<h3>Feil passord!</h3>
</div>
<a href="./Admin.php"><button id="knapp">Prøv igjen</button></a>
</center>
</body>
</html>
';
}

print '<div id="valg">'.$valg.'</div>';

?>