<?php
print '
<html>
<head>
<link rel="stylesheet" href="./../style/style.css" type="text/css">
<title>Tog og passasjertall</title>
</head>
<body>
<center>
<h1 id="title2">Tog og passasjertall</h1>
<div id="boks">
<br>
<h2>Informasjonen har blitt registrert</h2>
<h3><i>Det er '.$beregning.' mer passasjerer enn seter.</i>
<p>Det er visst fullt av passasjerer i dette toget, så<br> noen må dessverre vente eller ta et annet tog.</h3>

<a href="./../NSB_2_index1.php"><button id="knapp3">Angre alle tog-opprettelsene</button></a>
<br><br>
<a href="./NSB_2_index4.php"><button id="knapp3">Angre tog-opprettelsen</button></a>
<br><br>
<a href="./../5/NSB_2_index5.php"><button id="knapp3">Opprett et annet tog</button></a>
<br><br>
<a href="./kvittering4.php"><button id="knapp3">Vis alle tog-opprettelsene</button></a>
</div>
</center>
</body>
</html>
';	
?>