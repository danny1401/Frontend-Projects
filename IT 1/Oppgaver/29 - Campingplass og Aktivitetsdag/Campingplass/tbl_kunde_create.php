<?php

print'<html ><head></head><body><h1> Opprette tbl_kunde </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_kunde_camping_danny (KundeID int(8) NOT NULL auto_increment PRIMARY KEY,
Fornavn TEXT, Etternavn TEXT, Gatenavn TEXT, Poststed TEXT, Postnr
TEXT, Land TEXT, Ankomst TEXT, Avreise TEXT, Betalt TEXT, Personer
int(2), Kommentar TEXT, SjekkInn VARCHAR(10), SjekkUt VARCHAR(10))" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>