<?php

print'<html ><head></head><body><h1> Opprette tbl_plass</h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_plass_camping_danny (PlassID VARCHAR(8) NOT NULL PRIMARY KEY, KundeID int(8), Lengde int(2), Bredde int(2), Handicap TEXT, Husdyr TEXT,
Elektrisitet TEXT, Vann TEXT, Type TEXT, Kommentar TEXT )" ;

mysqli_query ($lenke, $sql);
mysqli_close ($tilkopling);

//Utskrift til skjerm.
print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>';
print $sql;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>