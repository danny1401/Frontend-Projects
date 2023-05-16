<?PHP

$folder = "";
$file = "";

$folder = "./bildekatalog/";
$bilde = opendir($folder);

while ($file = readdir($bilde))
	
{
$pathinfo = pathinfo($file);

if ($pathinfo['extension'] == "jpg" || $pathinfo['extension'] == "png" || $pathinfo['extension'] == "jpeg")
	{$files[] = $file;}
}

closedir($bilde);
$bildeCount = 0;

print '
<html>
<head>
<style>
body {
	background-color: #000033;
}
#title {
	position: relative;
	top: 20px;
	width: 400px;
	padding-bottom: 5px;
	border: 3px solid grey;
	border-radius: 10px;
	color: white;
	background-color: #000066;
	text-shadow: 2px 2px black;
	font-size: 40;
}
#editbilde {
	position: relative;
	top: 20px;
	height: 230px;
	width: 370px;
	margin-bottom: 5px;
	margin-left: 5px;
	border: 1px solid black;
}
#bottom {
	margin-bottom: 60px; 
}
#BackButton {
	position: absolute;
	top: 20px;
	left: 20px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body><center>
<a href="./../../../index.html"><img src="back1.png" id="BackButton"></img></a>
<h1 id="title">Min Bilde-Katalog</h1>
<table>
<tr>
';

foreach ($files as $file) {
	print '<td><img src="'.$folder.$file.'" id="editbilde"></img></td>';
	
	if ($bildeCount == 2) {
		print '</tr><tr>';
		$bildeCount = 0;
	}
	else {$bildeCount++;}
}

print '</tr></table><div id="bottom"></div></center></body></html>';

?>