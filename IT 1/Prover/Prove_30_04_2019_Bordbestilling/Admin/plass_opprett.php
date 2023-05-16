<?php
print '
<html>
<head>
<link rel="stylesheet" href="./style1.css">
<title>Bordbestilling</title>
<style>
body {
	background-image: url(./background1.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
	background-attachment: fixed;
}
#title1 {
	width: 500px;
	padding: 20px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	font-size: 35px;
	text-shadow: 2px 1px black;	
}
#boks {
	position: relative;
	top: -26px;
	width: 480px;
	height: 345px;
	padding: 20px 40px;
	background-color: #505050;
	border: 2px solid white;
}
td {
	color: white;
	font-size: 19px;
	text-shadow: 2px 1px black;
}
.inputfelt {
	height: 33px;
	width: 250px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	font-size: 16px;
	margin: 5px 10px;
}
#knapp1 {
	position: absolute;
	top: 540px;
	left: 401px;
	width: 283px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
}
#knapp2 {
	position: absolute;
	top: 540px;
	right: 401px;
	width: 283px;
	padding: 15px 30px;
	color: white;
	background-color: #101010;
	border: 2px solid white;
	text-shadow: 2px 1px black;	
	font-size: 25px;
	font-family: Georgia, serif;
}
#knapp1:hover {
	background-color: black;	
}
#knapp2:hover {
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
		<a href="./AdminIndex.php" class="meny"><strong>Home</strong></a>
		<a href="./plass_opprett.php" class="meny"><strong>Opprett Bord</strong></a>
		<a href="./Admin_Kunde_opprett.php" class="meny"><strong>Bestilling</strong></a>
		<a href="./Kunde_Sjekk_ut.php" class="meny"><strong>Sjekk ut kunde</strong></a>
		<a href="./Uonsket.php" class="meny"><strong>Uønsket</strong></a>
		<a href="./vis_kunde.php" class="meny"><strong>Vis kunder</strong></a>
		<a href="./vis_ledige_bord.php" class="meny"><strong>Vis ledige bord</strong></a>
		<a href="./../Bordbestilling.php" class="meny"><strong>Logg ut</strong></a>
	</div>
	<h1 id="title">Bordbestilling</h1>
</div>
<center>
<br><br><br>
<h1 id="title1">Opprett nytt bord</h1>

<div id="boks">
<form method="POST" action="./plass_registrer.php" name="plass" >
<table>
<tr>
	<td>BordID</td>
	<td><input type="text" name="BordID" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Antall Bord</td>
	<td><input type="text" name="Antall_Bord" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Antall Plasser</td>
	<td><input type="text" name="Antall_Plasser" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Handicapvennlig</td>
	<td><select name="Handicap" class="inputfelt">
			<option value="Ja">Ja</option>
			<option value="Nei">Nei</option>
	</select></td>
</tr>
<tr>
	<td>Kommentar</td>
	<td><input type="text" name="Kommentar" "value="" class="inputfelt"></td>
</tr>
<tr>
	<td>StartTid</td>
	<td><select name="StartTid" class="inputfelt">
			<option value="12:00">12:00</option>
			<option value="14:00">14:00</option>
			<option value="16:00">16:00</option>
			<option value="18:00">18:00</option>
			<option value="20:00">20:00</option>
			<option value="22:00">22:00</option>
			<option value="23:59">23:59</option>
	</select></td>
</tr>
<tr>
	<td>SluttTid</td>
	<td><select name="SluttTid" class="inputfelt">
			<option value="12:00">12:00</option>
			<option value="14:00">14:00</option>
			<option value="16:00">16:00</option>
			<option value="18:00">18:00</option>
			<option value="20:00">20:00</option>
			<option value="22:00">22:00</option>
			<option value="23:59">23:59</option>
	</select></td>
</tr>
</table>
</div>
<input type="reset" value="Reset" name="fjern_skjemainfo" id="knapp1">
<input type="submit" value="Opprett bord" name="send_plass" id="knapp2">
</form>
</center>
</body>
</html>
';

?>