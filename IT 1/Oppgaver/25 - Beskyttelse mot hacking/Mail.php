<?php

$avsender = "dinmailadresse@mailserver.domene";

$mottaker = $_GET['felt1']; 
$subject = $_GET['felt2'];
$innhold = $_GET['felt3'];

$avsender = $avsender;
$heading = $subject;
$melding = $innhold;

$to = $mottaker;
$subject = $heading . "\r\n";
$txt = $melding;
$headers = "From:". $avsender;

mail($to,$subject,$txt,$headers);

Print '<h2>Kvittering på sendt mail</h2>';
print '<p>';
print 'Avsender; ';
print $avsender;
print '<p>';
print 'Mottaker; ';
print $mottaker;
print '<p>';
print 'Subject; ';
print $subject;
print '<p>';
print 'Innhold; ';
print $innhold;

?>
