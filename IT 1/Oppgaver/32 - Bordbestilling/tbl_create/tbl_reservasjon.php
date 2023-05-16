<?php
print'<html ><head></head><body><h1> Opprette tbl_kunde </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_reservasjon_danny (Telefonnr int(10) NOT NULL auto_increment PRIMARY KEY,

BordID VARCHAR(10), 
Personer int(2), 
Bevegelsehemmende TEXT,
StartDato TEXT, 
StartTid TEXT,
SluttDato TEXT,
SluttTid TEXT,
Betalt TEXT,
SjekkInn VARCHAR(10), 
SjekkUt VARCHAR(10)

)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>