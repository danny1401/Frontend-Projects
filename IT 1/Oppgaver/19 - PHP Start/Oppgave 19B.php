<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$navn = $_POST['navn'];

print '<center><h3>Hei ' .$navn. '! <p>Velkommen til min nettside!<p></h3></center>';

}

print '

<html>
<head>
<title>Oppgave 19B</title>
<style>
center {
	position: relative;
	top: 230px;
}
</style>
</head>
<body>

<center>
<form name="personal" action="" method="POST">

Navn: <input type="" size="20" name="navn"><p>

<input type="submit" name="submit" value="Submit">
</form>
</center>

</body>
</html>

';
?>
