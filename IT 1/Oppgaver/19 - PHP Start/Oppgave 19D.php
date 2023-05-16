<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valgavferie = $_POST['ferie'];
$typeferieform = $_POST['ferieform'];

print "<center><i id='svar'>I ".$valgavferie." vil du dra ".$typeferieform."!<p></i></center>";

}

print '

<html>
<head>
<style>
center {
	position: relative;
	top: 50px;
	line-height: 1.9;
}
#svar {
	position: relative;
	top: 400px;
	color: #000066;
	font-size: 24px;
}
</style>
</head>
<body>

<center>
<h2>Her kan du fortelle meg når og hvordan du vil tilbringe reisen din</h2>

<form name="personal" action="" ' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST"> 

<h3>I hvilken ferie tenker du å reise i?</h3> <p><select name="ferie">
	<option value="...">Velg her</option>
	<option value="sommerferien">Sommerferie</option>
	<option value="høstferien">Høstferie</option>
	<option value="vinterferien">Vinterferie</option>
	<option value="juleferien">Juleferie</option>
</select>
<p>
<h3>Hvordan skal du tilbringe ferien din?</h3> <p><select name="ferieform">
	<option value="på ...">Velg her</option>
	<option value="ombord på et cruiseskip">Ombord på et cruiseskip</option>
	<option value="på sykkeltur">Sykkeltur</option>
	<option value="på chartertur">Chartertur</option>
	<option value="på campingtur">Campingtur</option>
	<option value="på familietur>Familietur</option>
	<option value="på flytur">Flytur</option>
	<option value="på biltur">Biltur</option>
</select>
<p>
<input type="submit" name="submit" value="Submit">
</form>
</center>

</body>
</html>
';

?>