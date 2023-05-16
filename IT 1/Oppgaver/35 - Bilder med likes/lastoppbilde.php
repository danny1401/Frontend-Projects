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
}
#bar {
	position: relative;
	top: 20px;
	padding: 0px 120px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 50px;
}
.button {
	width: 435px;
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
#input {
	color: black;
	background-color: white;
	padding: 10px 10px;
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
<a href="./Oppgave35.php"><button class="button" id="bar"><h1>Logg ut</h1></button></a>
<a href="./lastoppbilde.php"><button id="bar"><h1>Last opp bilder</h1></button></a>

<h1 id="title">Last opp bilder</h1>
<div id="boks">
<form action="lastoppbilde.php" method="post" enctype="multipart/form-data">
<br><br><br><br><br>
<input id="input" type="file" name="filbane" accept="image/x-png,image/gif,image/jpeg" size="60" />
</div>
<input type="submit" id="knapp" value="Fullfør opplastning" name="Lastopp" />
</form>
</center>
</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valg = "";
if(empty($_FILES['filbane']['name'])) {
    die ("
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
	padding: 0px 120px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 50px;
}
.button {
	width: 435px;
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
<body background='./background.jpg'>
<center>
<body>
<center>
<a href='./Oppgave35.php'><button class='button' id='bar'><h1>Logg ut</h1></button></a>
<a href='./lastoppbilde.php'><button id='bar'><h1>Last opp bilder</h1></button></a>

<h1 id='title'>Last opp bilder</h1>
<div id='boks'>
<br><br><br><br>
<h2>Ingen fil ble valgt</h2>
</div>

<a href=".$valg."><button id='knapp'>Prøv igjen</button></a>
</center>
</body>
</html>
"); 
   
   } 
else { 

$temp_fil = $_FILES['filbane']['tmp_name'];

$filnavn = "./bildekatalog/" . $_FILES['filbane']['name']; 

move_uploaded_file($temp_fil, $filnavn)
    or die ("
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
	padding: 0px 120px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 50px;
}
.button {
	width: 435px;
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
<body background='./background.jpg'>
<center>
<body>
<center>
<a href='./Oppgave35.php'><button class='button' id='bar'><h1>Logg ut</h1></button></a>
<a href='./lastoppbilde.php'><button id='bar'><h1>Last opp bilder</h1></button></a>

<h1 id='title'>Last opp bilder</h1>
<div id='boks'>
<br><br><br><br>
<h2>Kunne ikke kopiere fil</h2>
</div>

<a href=".$valg."><button id='knapp'>Prøv igjen</button></a>
</center>
</body>
</html>
"); 

print "
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
	padding: 0px 120px;
	color: black;
	background-color: white;
	border: 3px solid black;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 50px;
}
.button {
	width: 435px;
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
<body background='./background.jpg'>
<center>
<body>
<center>
<a href='./Oppgave35.php'><button class='button' id='bar'><h1>Logg ut</h1></button></a>
<a href='./lastoppbilde.php'><button id='bar'><h1>Last opp bilder</h1></button></a>

<h1 id='title'>Last opp bilder</h1>
<div id='boks'>
<br><br><br><br>
<h2>Bildet ble lastet opp!</h2>
</div>

<a href=".$valg."><button id='knapp'>Last opp igjen</button></a>
</center>
</body>
</html>
";
}

}
print '<div id="valg">'.$valg.'</div>';
   
?>