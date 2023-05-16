<?php

print '

<html>
<head></head>
<body>
<h1>Eksempel 304. Opprette tbl_stemmer </h1><p>
';

include("./db_connection.php");

$sql = "create table if not exists tbl_stemmer_danny 
(id bigint auto_increment primary key, 
stemmer varchar(128) charset utf8,
ipAdd varchar (20),
datoTid varchar(20)) 
engine=InnoDB default charset latin1";

mysqli_query($lenke, $sql);

mysqli_close($tilkopling);

print '<p><strong> Setning som blev eksekvert: </strong></p>';

print "<p>".$sql."</p>";

print '<p><strong> Tabell ble opprettet: tbl_stemmer </strong><p></body></html>';


?> 