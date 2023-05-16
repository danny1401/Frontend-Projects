<html>
<head>
<title>Campingplass</title>
<style>
body {
    background-image: url("camping2.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#boks {
	position: relative;
	top: 40px;
	height: 420px;
	width: 500px;
	padding: 50px; 50px;
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
	top: -30px;
}
#felt {
	position: relative;
	top: -35px;
}
.undertitle {
	width: 130px;
	margin-bottom: 25px;
}
.inputfelt {
	height: 25px;
	width: 230px;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid black;
	border-radius: 6px;
	font-size: 14px;
}
#inputfelt1 {
	height: 25px;
	width: 90px;
	border: 1px solid black;
	border-radius: 6px;
}
#inputfelt2 {
	height: 25px;
	width: 160px;
	border: 1px solid black;
	border-radius: 6px;
}
select, option {
	padding-left: 30px;
}
#knapp1 {
	position: absolute;
	top: 304px;
	left: 55px;
	height: 35px;
	width: 170px;
	background-color: white;
	border: 1px solid black;
	border-radius: 8px;
	text-align: center;
	font-weight: 700;
}
#knapp2 {
	position: absolute;
	top: 454px;
	right: 105px;
	height: 35px;
	width: 180px;
	background-color: white;
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
}
</style>
</head>
<body>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>

<center>
<div id="boks">
<a href="./campingplass.html" id="buttontitle"><h1 id="title">Campingplass</h1></a>
<h3 id="title1">Her kan du opprette ny plass i tabellen</h3>

<form method="POST" action="./opprett_plass_registrere.php" name="plass" id="felt">
<table>
<tr>
	<td class="undertitle">PlassID</td>
	<td><input type="text" name="PlassID" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Lengde</td>
	<td><input type="text" name="Lengde" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Bredde</td>
	<td><input type="text" name="Bredde" size="40" value="" class="inputfelt"></td>
</tr>
<tr>
	<td>Handicapvennlig</td>
	<td><select name="Handicap" id="inputfelt1">
		<option value="Ja">Ja</option>
		<option value="Nei">Nei</option>
	</select></td>
</tr>
<tr>
	<td>Husdyr</td>
	<td><select name="Husdyr" id="inputfelt1">
		<option value="Ja">Ja</option>
		<option value="Nei">Nei</option>
	</select></td>
</tr>
<tr>
	<td>Elektrisitet</td>
	<td><select name="Elektrisitet" id="inputfelt1">
		<option value="Ja">Ja</option>
		<option value="Nei">Nei</option>
	</select></td>
</tr>
<tr>
	<td>Vann</td>
	<td><select name="Vann" id="inputfelt1">
		<option value="Ja">Ja</option>
		<option value="Nei">Nei</option></select>
	</td>
</tr>
<tr>
	<td>Type</td>
	<td><select name="Type" id="inputfelt2">
		<option value="Telt">Telt</option>
		<option value="Campingvogn">Campingvogn</option>
		<option value="Bobil">Bobil</option>
	</select></td>
</tr>
<tr>
	<td>Kommentar</td>
	<td><input type="text" name="Kommentar"size="40"value="" class="inputfelt"></td>
</tr>
</table>
<input type ="submit" value= "Opprett plass" name="send_plass" id="knapp1">
</form>
<a href="./plass_vis_alle.php"><button id="knapp2">Se på plasstabellen</button></a>
</div>
</center>

</body>
</html>