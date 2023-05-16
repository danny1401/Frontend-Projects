<?php

print'<html ><head></head><body><h1> Opprette tbl_plass</h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_bord_danny (BordID VARCHAR(8) NOT NULL PRIMARY KEY, Telefonnr int(10), Antall_Bord int(10), Antall_Plasser int(10), Handicap TEXT, Kommentar TEXT, StartTid TEXT, SluttTid TEXT )" ;


mysqli_query ($lenke, $sql);
mysqli_close ($tilkopling);

//Utskrift til skjerm.
print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>';
print $sql;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>

