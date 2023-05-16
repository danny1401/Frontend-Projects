<?php

$valg = '
<html>
<head>
<title>Tog og passasjertall</title>
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
<a href="./../../../index.html"><img src="./../back1.png" id="BackButton"></img></a>

<h1 id="title1">Tog og passasjertall</h1>

<form method="POST" action="">
<div id="boks1">
	<center>
	<h2 class="title2">Dato og tid</h2>
		<h3 class="title5">Dato</h3>
		<input type="date" name="dato" class="felt1">

		<h3 class="title6">Tidspunkt</h3>
		<input type="time" name="tidspunkt" class="felt2">
	</center>
</div>	
<div id="boks2">
	<center>
	<h2 class="title2">Toget</h2>	
		<h3 class="title5">Tog-rute</h3>
		<select name="togrutenr" class="felt_tog">
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
	</center>
</div>
<div id="boks3">
	<center>
	<h2 class="title2">Info om toget</h2>	
		<h3 class="title5">Antall passasjerer</h3>
		<input type="number" name="passasjerer" class="felt_x">		
		
		<h3 class="title6">Antall seter</h3>
		<input type="number" name="seter" class="felt_y">
		
		<h3 class="title7">Togtype</h3>
		<select name="togtype" class="felt_z">
			<option value="Har ikke valgt noe"></option>
			<option value="Type 69">Type 69</option>
			<option value="Type 72">Type 72</option>
			<option value="Type 74">Type 74</option>
		</select>
	</center>
</div>

	<input type="submit" name="submit" value="Opprett tog" id="submit">
</form>

</center>
</body>
</html>
';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valg = "";

$togrutenr = $_POST['togrutenr'];
$tognr = $_POST['tognr'];
$dato = $_POST['dato'];
$tidspunkt = $_POST['tidspunkt'];
$seter = $_POST['seter'];
$togtype = $_POST['togtype'];
$sektor = $_POST['sektor'];
$passasjerer = $_POST['passasjerer'];

$togrutenr = str_replace("<"," &#60; ", $togrutenr);
$togrutenr = str_replace(">"," &#62; ", $togrutenr);
$togrutenr = str_replace("<script>"," &#60;_script_&#62; ", $togrutenr);
$togrutenr = str_replace("</script>"," &#60;_&#47;script_&#62; ", $togrutenr);
$togrutenr = str_replace("//"," &#47; &#47; ", $togrutenr);
$togrutenr = str_replace("$"," &#36; ", $togrutenr);

$tognr = str_replace("<"," &#60; ", $tognr);
$tognr = str_replace(">"," &#62; ", $tognr);
$tognr = str_replace("<script>"," &#60;_script_&#62; ", $tognr);
$tognr = str_replace("</script>"," &#60;_&#47;script_&#62; ", $tognr);
$tognr = str_replace("//"," &#47; &#47; ", $tognr);
$tognr = str_replace("$"," &#36; ", $tognr);

$dato = str_replace("<"," &#60; ", $dato);
$dato = str_replace(">"," &#62; ", $dato);
$dato = str_replace("<script>"," &#60;_script_&#62; ", $dato);
$dato = str_replace("</script>"," &#60;_&#47;script_&#62; ", $dato);
$dato = str_replace("//"," &#47; &#47; ", $dato);
$dato = str_replace("$"," &#36; ", $dato);

$tidspunkt = str_replace("<"," &#60; ", $tidspunkt);
$tidspunkt = str_replace(">"," &#62; ", $tidspunkt);
$tidspunkt = str_replace("<script>"," &#60;_script_&#62; ", $tidspunkt);
$tidspunkt = str_replace("</script>"," &#60;_&#47;script_&#62; ", $tidspunkt);
$tidspunkt = str_replace("//"," &#47; &#47; ", $tidspunkt);
$tidspunkt = str_replace("$"," &#36; ", $tidspunkt);

$seter = str_replace("<"," &#60; ", $seter);
$seter = str_replace(">"," &#62; ", $seter);
$seter = str_replace("<script>"," &#60;_script_&#62; ", $seter);
$seter = str_replace("</script>"," &#60;_&#47;script_&#62; ", $seter);
$seter = str_replace("//"," &#47; &#47; ", $seter);
$seter = str_replace("$"," &#36; ", $seter);

$togtype = str_replace("<"," &#60; ", $togtype);
$togtype = str_replace(">"," &#62; ", $togtype);
$togtype = str_replace("<script>"," &#60;_script_&#62; ", $togtype);
$togtype = str_replace("</script>"," &#60;_&#47;script_&#62; ", $togtype);
$togtype = str_replace("//"," &#47; &#47; ", $togtype);
$togtype = str_replace("$"," &#36; ", $togtype);

$passasjerer = str_replace("<"," &#60; ", $passasjerer);
$passasjerer = str_replace(">"," &#62; ", $passasjerer);
$passasjerer = str_replace("<script>"," &#60;_script_&#62; ", $passasjerer);
$passasjerer = str_replace("</script>"," &#60;_&#47;script_&#62; ", $passasjerer);
$passasjerer = str_replace("//"," &#47; &#47; ", $passasjerer);
$passasjerer = str_replace("$"," &#36; ", $passasjerer);

$eksempel = fopen("./togrutenr8.txt", "w");
$tekst = $togrutenr;
$tekst .= "\r\n";
fwrite($eksempel, $tekst);
fclose($eksempel);

$eksempel1 = fopen("./tognr8.txt", "w");
$tekst1 = $tognr;
$tekst1 .= "\r\n";
fwrite($eksempel1, $tekst1);
fclose($eksempel1);

$eksempel2 = fopen("./dato8.txt", "w");
$tekst2 = $dato;
$tekst2 .= "\r\n";
fwrite($eksempel2, $tekst2);
fclose($eksempel2);

$eksempel3 = fopen("./tidspunkt8.txt", "w");
$tekst3 = $tidspunkt;
$tekst3 .= "\r\n";
fwrite($eksempel3, $tekst3);
fclose($eksempel3);

$eksempel4 = fopen("./passasjerfil8.txt", "w");
$tekst4 = $passasjerer;
$tekst4 .= "\r\n";
fwrite($eksempel4, $tekst4);
fclose($eksempel4);

$eksempel5 = fopen("./seterfil8.txt", "w");
$tekst5 = $seter;
$tekst5 .= "\r\n";
fwrite($eksempel5, $tekst5);
fclose($eksempel5);

$eksempel6 = fopen("./togtype8.txt", "w");
$tekst6 = $togtype;
$tekst6 .= "\r\n";
fwrite($eksempel6, $tekst6);
fclose($eksempel6);

if($seter >= $passasjerer) {	
print '
<html>
<head>
<meta http-equiv="refresh" content="0;
url=./register8.php">
</head>
<body>
</body>
</html>
';
}
if($seter < $passasjerer) {	
print '
<html>
<head>
<meta http-equiv="refresh" content="0;
url=./register82.php">
</head>
<body>
</body>
</html>
';	
}
}




print '<div id="valg">'.$valg.'</div>';

?>