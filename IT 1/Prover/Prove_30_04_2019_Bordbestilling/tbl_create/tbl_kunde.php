<?php
print'<html ><head></head><body><h1> Opprette tbl_kunde</h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_kunde_danny (Telefonnr int(10) NOT NULL auto_increment PRIMARY KEY,
BordID VARCHAR(10),
Fodselsnr TEXT, 
Fornavn TEXT, Etternavn TEXT, Gatenavn TEXT, Poststed TEXT, 
Postnr TEXT, Land TEXT, 
Email TEXT,  
Kommentar TEXT,
Opprettet TEXT)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>