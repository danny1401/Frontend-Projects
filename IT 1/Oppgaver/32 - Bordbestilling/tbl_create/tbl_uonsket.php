<?php
print'<html ><head></head><body><h1> Opprette tbl_uonsket </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_uonsket_danny (Telefonnr int(10) NOT NULL auto_increment PRIMARY KEY,
Arsak TEXT, Opprettet TEXT)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>