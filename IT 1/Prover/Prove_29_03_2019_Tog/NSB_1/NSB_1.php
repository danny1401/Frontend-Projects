<?php

$valg = '
<html>
<head>
<style>
body {
	background-color: grey;
}
#title1 {
	position: relative;
	top: 20px;
	width: 480px;
	padding-bottom: 6px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 38px;
}
.title2 {
	position: relative;	
	top: 0px;
	font-size: 27px;
}
#title3 {
	position: relative;
	top: 40px;
}
#title4 {
	position: relative;
	top: 70px;
}
.title5 {
	position: relative;
	top: 10px;
}
.title6 {
	position: relative;
	top: 15px;
}
.title7 {
	position: relative;
	top: 20px;
}
#boks1 {
	position: absolute;	
	top: 120px;
	left: 100px;
	height: 400px;
	width: 350px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
}
#boks2 {
	position: absolute;	
	top: 120px;
	left: 500px;
	height: 400px;
	width: 350px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
}
#boks3 {
	position: absolute;	
	top: 120px;
	right: 100px;
	height: 400px;
	width: 350px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
}
.felt_x {
	position: relative;
	height: 30px;
	width: 230px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 17;
	text-align: center;
}
.felt_y {
	position: relative;
	top: 5px;
	height: 30px;
	width: 230px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 17;
	text-align: center;
}
.felt_z {
	position: relative;
	top: 10px;
	height: 30px;
	width: 230px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 17;
	text-align: center;
}
.felt_tog {
	position: relative;
	height: 30px;
	width: 230px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 14;
	text-align: center;
}
.felt1 {
	position: relative;
	height: 30px;
	width: 230px;
	padding-left: 60px;
	padding-right: 5px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 17;
	text-align: center;
}
.felt2 {
	position: relative;
	top: 5px;
	height: 30px;
	width: 230px;
	padding-left: 40px;
	padding-right: 5px;
	border: 1px solid black;
	border-radius: 8px;
	font-size: 17;
	text-align: center;
}
#submit {
	position: relative;
	top: 470px;
	height: 40px;
	width: 140px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-size: 17;
	font-weight: 700;
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
<center>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>
<h1 id="title1">Tog og passasjertall</h1>

<form method="POST" action="">
<div id="boks1">
	<center>
	<h2 class="title2">Dato og tid</h2>
		<h3 class="title5">Dato</h3>
		<input type="date" name="dato" class="felt1">

		<h3 class="title6">Tidspunkt</h3>
		<input type="time" name="tid" class="felt2">
	</center>
</div>	
<div id="boks2">
	<center>
	<h2 class="title2">Toget</h2>	
		<h3 class="title5">Tog-rute</h3>
		<select name="togrute" class="felt_tog">
			<option value="Har ikke valgt togrute"></option>
			<option value="L1: Spikkestad - Asker - Oslo S - Lillestrøm">			L1: Spikkestad - Asker - Oslo S - Lillestrøm</option>
			<option value="L2: Stabekk - Skøyen - Oslo - Ski">						L2: Stabekk - Skøyen - Oslo - Ski</option>
			<option value="L3: Oslo S - Nittedal - Jaren/Gjøvik (Gjøvikbanen)">		L3: Oslo S - Nittedal - Jaren/Gjøvik (Gjøvikbanen)</option>
			<option value="L12: Kongsberg - Drammen - Oslo S - OSL - Eidsvoll">		L12: Kongsberg - Drammen - Oslo S - OSL - Eidsvoll</option>
			<option value="L13: Drammen - Oslo S - Kongsvinger">					L13: Drammen - Oslo S - Kongsvinger</option>
			<option value="L14: Asker - Oslo S - Kongsvinger">						L14: Asker - Oslo S - Kongsvinger</option>
			<option value="L21: Stabekk - Oslo - Moss">								L21: Stabekk - Oslo - Moss</option>
			<option value="L22: Skøyen - Oslo S - Mysen-Rakkestad">					L22: Skøyen - Oslo S - Mysen-Rakkestad</option>
			<option value="Har ikke valgt togrute">-----------------------------------------------------------------------</option>
			<option value="L1: Lillestrøm - Oslo S - Asker - Spikkestad">			L1: Lillestrøm - Oslo S - Asker - Spikkestad</option>
			<option value="L2: Ski - Oslo - Skøyen - Stabekk">						L2: Ski - Oslo - Skøyen - Stabekk</option>
			<option value="L3: Jaren/Gjøvik (Gjøvikbanen) - Nittedal - Oslo S">		L3: Jaren/Gjøvik (Gjøvikbanen) - Nittedal - Oslo S</option>
			<option value="L12: Eidsvoll - OSL - Oslo S - Drammen - Kongsberg">		L12: Eidsvoll - OSL - Oslo S - Drammen - Kongsberg</option>
			<option value="L13: Kongsvinger - Oslo S - Drammen">					L13: Kongsvinger - Oslo S - Drammen</option>
			<option value="L14: Kongsvinger - Oslo S - Asker">						L14: Kongsvinger - Oslo S - Asker</option>
			<option value="L21: Stabekk - Oslo - Moss">								L21: Stabekk - Oslo - Moss</option>
			<option value="L22: Mysen-Rakkestad - Oslo S - Skøyen">					L22: Mysen-Rakkestad - Oslo S - Skøyen</option>
		</select>
		
		<h3 class="title6">Tog Nr.</h3>
		<input type="text" name="tognr" class="felt_y">
		
		<h3 class="title7">Strekning</h3>
		<input type="text" name="strekning" class="felt_z">
	</center>
</div>
<div id="boks3">
	<center>
	<h2 class="title2">Info om toget</h2>	
		<h3 class="title5">Antall passasjerer</h3>
		<input type="number" name="passasjerer" class="felt_x">		
		
		<h3 class="title6">Antall seter</h3>
		<input type="number" name="sitteplasser" class="felt_y">
		
		<h3 class="title7">Togtype</h3>
		<select name="togtype" class="felt_z">
			<option value="Har ikke valgt noe"></option>
			<option value="Type 69">Type 69</option>
			<option value="Type 72">Type 72</option>
			<option value="Type 74">Type 74</option>
		</select>
	</center>
</div>

	<input type="submit" name="submit" value="Submit" id="submit">
</form>

</center>
</body>
</html>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valg = "";

$dato = $_POST['dato'];
$tid = $_POST['tid'];
$togrute = $_POST['togrute'];
$tognr = $_POST['tognr'];
$strekning = $_POST['strekning'];
$togtype = $_POST['togtype'];

$passasjerer = $_POST['passasjerer'];
$sitteplasser = $_POST['sitteplasser'];

$prosent = round((($passasjerer/$sitteplasser)*100),2);

if ($passasjerer > 0 && $sitteplasser > 0) {
print "
<html>
<head>
<style>
body {
	background-color: grey;
}
#title1 {
	position: relative;
	top: 10px;
	width: 480px;
	padding-bottom: 6px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 40px;
}
#boks {
	position: absolute;
	top: 120px;
	left: 100px;
	height: 400px;
	width: 610px;
	padding-left: 20px;
	padding-right: 20px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
}
#info1 {
	position: absolute;
	top: 90px;
	left: 76px;
	font-size: 20px;
}
.info1 {
	position: absolute;
	top: 92px;
	left: 175px;
	font-size: 18px;
}
#info2 {
	position: absolute;
	top: 160px;
	left: 85px;
	font-size: 20px;
}
.info2 {
	position: absolute;
	top: 162px;
	left: 175px;
	font-size: 18px;
}
#info3 {
	position: absolute;
	top: 230px;
	left: 64px;
	font-size: 20px;
}
.info3 {
	position: absolute;
	top: 233px;
	left: 175px;
	font-size: 18px;
}
#info4 {
	position: absolute;
	top: 300px;
	left: 80px;
	font-size: 20px;
}
.info4 {
	position: absolute;
	top: 302px;
	left: 175px;
	font-size: 18px;
}
#boks2 {
	position: absolute;
	top: 120px;
	right: 100px;
	height: 400px;
	width: 440px;
	padding-left: 20px;
	padding-right: 20px;
	background-color: lightgrey;
	border: 2px solid black;
	border-radius: 8px;
}
#tall {
	position: relative;
	top: 20px;
	left: 30px;
	font-size: 19px;
}
.tall1 {
	position: relative;
	top: -2px;
	left: 200px;
	width: 30px;
	font-size: 19px;
}
.tall2 {
	position: relative;
	top: -2px;
	left: 145px;
	width: 30px;
	font-size: 19px;
}
#sektordiagram {
    position: relative;
    top: 50px;
	height: 140px;
	width: 140px;
}
#knapp {
	position: relative;
	top: 470px;
	padding: 10px 25px;
	background-color: white;
	color: black;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	text-decoration: none;
	font-size: 17;
	font-weight: 700;
}
</style>
</head>
<body>
<center><h1 id='title1'>Tog og passasjertall</h1></center>

<div id='boks'>
<center><h1>Toginfo</h1></center>
<b id='info1'>Tog rute :</b><div class='info1'>".$togrute."</div>
<b id='info2'>Tog Nr. :</b><div class='info2'>".$tognr."</div>
<b id='info3'>Strekning :</b><div class='info3'>".$strekning."</div>
<b id='info4'>Togtype :</b><div class='info4'>".$togtype."</div>
</div>

<div id='boks2'>
<center><h1>Passasjerer og seter på turen</h1></center>
<b id='tall'>Antall passasjerer :</b><div class='tall1'>".$passasjerer."</div>
<b id='tall'>Antall seter :</b><div class='tall2'>".$sitteplasser."</div>
<b id='tall'>Passasjerene fyller ".$prosent."% av plassene</b>
<center><img id='sektordiagram' src='./sektordiagram_1.php?pass=".$passasjerer."&seter=".$sitteplasser."'></img></center>
</div>

<center><a href='./NSB_1.php' id='knapp'>Prøv på nytt</a></center>
</body>
</html>
";

}
}

print '<div id="$valg"'.$valg.'</div>';

?>