<?php

$hostname = "localhost";

$user = "inforjza_danny";

$password = "1F9eEYqqz4RV";

$db = "inforjza_db2";

$tilkopling = mysqli_connect("$hostname", "$user", "$password") or die('Could not connect to databasehost');

$lenke = mysqli_connect($hostname, $user, $password, $db);

mysqli_select_db($tilkopling, $db) or die('Could not select databasename');

?>