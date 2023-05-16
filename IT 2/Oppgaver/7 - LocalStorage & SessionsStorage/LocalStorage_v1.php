<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=1366, initial-scale=1">
	<title>Local Storage</title>

<style>
body {
	background-image: url(./water.gif);
	background-repeat: no-repeat;
	background-size: 100%;
	font-family: Arial, Helvetica, sans-serif;
}
#text1 {
	position: absolute;
	top: 190px;
	left: 0;
	width: 100%;
	padding: 10px 0;
	color: white;
	background-color: black;
	border-top: 5px solid #00b3b3;
	border-bottom: 5px solid #00b3b3;
	font-size: 28px;
	text-align: center;
}
#title1 {
	padding-top: 27px;
	font-size: 45px;	
	text-transform: uppercase;
}
#text2 {
	position: absolute;
	top: 190px;
	left: 0;
	width: 100%;
	padding: 10px 0;
	color: white;
	background-color: black;
	border-top: 5px solid #00b3b3;
	border-bottom: 5px solid #00b3b3;
	font-size: 28px;
	text-align: center;
}
#title2 {
	padding-top: 27px;
	font-size: 45px;	
	text-transform: uppercase;
}
#BackButton {
	position: absolute;
	top: 20px;
	left: 20px;
	height: 78px; 
	width: 80px;
}
</style>
</head>
<body>
<script>
if("visit" in localStorage){
    var teller = localStorage.visit;
    teller = parseInt(teller);
    document.body.innerHTML = "<h1 id='text1'><div id='title1'>Velkommen tilbake!</div><p> Du har vært på besøk her "+teller+" ganger allerede.";
    teller = teller + 1;
    localStorage.visit = teller;
}
else {
    localStorage.visit = 1;
    document.body.innerHTML = "<h1 id='text2'><div id='title2'>Velkommen!</div><p> Dette er ditt første besøk på denne nettsiden.";
    var teller = lokalStorage.visit;
    teller = parseInt(teller);
    teller = teller + 1;
    localStorage.visit = teller;
}
</script>

<a href="./../../assignmentsT1_140IOl.html"><img src="./../backbuttonB.png" id="BackButton"></img></a>
</body>
</html>