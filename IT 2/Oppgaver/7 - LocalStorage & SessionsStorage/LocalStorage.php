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
#title {
	position: absolute;
	top: -10px;
	right: 30px;
	font-size: 35px;	
	font-style: italic;
}
#text1 {
	position: absolute;
	top: 150px;
	left: 0;
	width: 100%;
	padding: 50px 0;
	color: white;
	background-color: black;
	border-top: 5px solid #00b3b3;
	border-bottom: 5px solid #00b3b3;
	font-size: 28px;
	text-align: center;
	opacity: 0.95;
}
.title1 {
	padding-top: 24px;
	font-size: 45px;	
	text-transform: uppercase;
}
#text2 {
	position: absolute;
	top: 150px;
	left: 0;
	width: 100%;
	padding: 20px 0;
	color: white;
	background-color: black;
	border-top: 5px solid #00b3b3;
	border-bottom: 5px solid #00b3b3;
	font-size: 28px;
	text-align: center;
	opacity: 0.95;
}
.title2 {
	padding-top: 22px;
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
<script>
function velkommen(){
    if (typeof localStorage.velkommen === 'undefined'){
		document.getElementById("text2").id='';
        document.getElementById("first_visit").innerHTML = "<div class='title1'>Velkommen!</div><p>Dette er ditt første besøk på denne nettsiden.";
        var dato = new Date();
        localStorage.velkommen = dato;
    }
    else {
        last_time();
		visit();
    }
}
function last_time(){
	var sistVisit = localStorage.velkommen;
		document.getElementById("text1").id='';
	document.getElementById("last_time").innerHTML = "<div class='title2'>Velkommen tilbake!</div><p>Siste besøk: <i>"+sistVisit+"</i>.";
	var dato = new Date();
	localStorage.velkommen = dato;
}

function visit(){
	if("visit" in localStorage){
		var teller = localStorage.visit;
		teller = teller.toString();
		console.log(teller)

		document.getElementById("visit").innerHTML = "Du har vært på besøk her "+teller+" ganger allerede.";
		teller = parseInt(teller);
		teller = teller+1;
		localStorage.visit = teller;
	}
	else {
		localStorage.visit = 2;
		teller = 1;
		document.getElementById("visit").innerHTML = "Du har vært på besøk her "+teller+" ganger allerede.";
	
		var teller = lokalStorage.visit;
		teller = parseInt(teller);
		teller = teller + 1;
		localStorage.visit = teller;
	}
}
</script>
</head>
<body>
<a href="./../../assignmentsT1_140IOl.html"><img src="./../backbuttonB.png" id="BackButton"></img></a>

<h1 id="title">Local Storage</h1>

<h1 id="text1"><div id="first_visit"></div></h1>

<h1 id="text2">
<div id="last_time"></div>
<p id="visit"></p>
</h1>

<script>velkommen();</script>
</body>
</html>