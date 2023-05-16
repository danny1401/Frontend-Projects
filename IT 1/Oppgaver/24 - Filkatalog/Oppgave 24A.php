<?PHP

$folder = "";
$file = "";

$folder = "./filkatalog/";
$filListe = opendir($folder);

while ($file = readdir($filListe))
{
    if ($file !="." && $file !=".." && $file !="back1.png")
    {
        if (filetype($dirname.$file) == "dir")
        {    }

        if (filetype($dirname.$file) != "dir")
        { $files[] = $file; }	
	}
}    

closedir($filListe);

print '
<html>
<head>
<title>Min filkatalog</title>
<style>
body {
	background-color: #8080ff;
	background-image: linear-gradient(to right, #80ffff , #00004d);
}
#title {
	position: relative;
	top: 20px;
	width: 400px;
	padding-bottom: 5px;
	border: 3px solid grey;
	border-radius: 10px;
	color: white;
	background-image: linear-gradient(to right, #00004d , #80ffff);
	text-shadow: 2px 2px black;
	font-size: 40px;
}
#BackButton {
	position: absolute;
	top: 30px;
	left: 40px;
	border: 0; 
	height: 69; 
	width: 72;
	z-index: 2;
}
</style>
</head>
<body>
<center><h2 id="title">Min Fil-Katalog</h2></center>
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>
</body>
</html>
';

foreach ($files as $file) {

print '
<html>
<head>
<title>Min filkatalog</title>
<style>
#button {
	position: relative;
	top: 40px;
	height: 50px;
	width: 320px;
	border: 2px solid grey;
	border-radius: 10px;
	text-align: center;
	margin-bottom: 5px;
	font-weight: 700;
}
</style>
</head>
<body>
<center><a href="'.$folder.$file.'" target="_blank"><button id="button">'.$file.'</button></a></center>
</body>
</html>
';

print '<br>';
}

?>