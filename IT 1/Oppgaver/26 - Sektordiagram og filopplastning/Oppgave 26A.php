<html>
<head>
<title>Sektordiagram</title>
<style>
body {
	overflow: hidden;
}
#title {
	position: absolute;
	top: -30px;
	left: 0px;
	height: 65px;
	width: 1310px;
	padding-top: 5px; 
	padding-left: 540px; 
	background-color: #BEBEBE;
	font-size: 45px;
}
#karbo {
	position: absolute;
	top: 70px;
	left: 500px
}
#protein {
	position: absolute;
	top: 70px;
	left: 900px;
}
#fett {
	position: absolute;
	top: 70px;
	left: 1240px;
}
#fargeboks1 {
	position: absolute;
	top: 91px;
	left: 464px;
	height: 22px;
	width: 25px;
	border: 1px solid black;
	display: inline;
	margin-right: 140px;
}
#fargeboks2 {
	position: absolute;
	top: 91px;
	left: 865px;
	height: 22px;
	width: 25px;
	border: 1px solid black;
	display: inline;
	margin-right: 140px;
}
#fargeboks3 {
	position: absolute;
	top: 91px;
	left: 1203px;
	height: 22px;
	width: 25px;
	border: 1px solid black;
	display: inline;
	margin-right: 140px;
}
#hzline {
	position: absolute;
	top: 70px;
	left: 0px;
	width: 1369px;
	border-bottom: 2px solid black;
	z-index: 1;
}
#boks {
	position: absolute;
	top: -3px;
	left: -3px;
	height: 766px;
	width: 1370px;
	background-color: white;
	border: 3px solid black;
}
#title2 {
	position: absolute;
	top: 70px;
	left: 80px;
}
#title3 {
	position: relative;
	top: 5px;
}
#title4 {
	position: relative;
	top: 5px;
}
#title5 {
	position: relative;
	top: 5px;
}
#title6 {
	position: relative;
	top: 5px;
}
#boks1 {
	position: absolute;
	top: 133px;
	left: -2px;
	height: 633px;
	width: 342px;
	background-color: lightgrey;
	border: 2px solid black;
}
#boks2 {
	position: absolute;
	top: 133px;
	left: 342px;
	height: 633px;
	width: 340px;
	background-color: lightgrey;
	border: 2px solid black;
}
#boks3 {
	position: absolute;
	top: 133px;
	right: 342px;
	height: 633px;
	width: 340px;
	background-color: lightgrey;
	border: 2px solid black;
}
#boks4 {
	position: absolute;
	top: 133px;
	right: 0px;
	height: 633px;
	width: 340px;
	background-color: lightgrey;
	border: 2px solid black;
}
#bilde1 {
	position: relative;
    top: 10px;
	left: -2px;
	height: 120px;
	width: 282px;
	background-color: white;
	border: 2px solid black;
	padding-top: 35px; 
	padding-bottom: 35px; 
	padding-left: 30px; 
	padding-right: 30px; 
}
#bilde2 {
	position: relative;
    top: 10px;
	left: -2px;
	height: 120px;
	width: 250px;
	background-color: white;
	border: 2px solid black;
	padding-top: 35px; 
	padding-bottom: 35px; 
	padding-left: 50px; 
	padding-right: 40px; 
}
#bilde3 {
	position: relative;
    top: 10px;
	left: -2px;
	height: 130px;
	width: 180px;
	background-color: white;
	border: 2px solid black;
	padding-top: 30px; 
	padding-bottom: 30px; 
	padding-left: 80px; 
	padding-right: 80px; 
}
#bilde4 {
	position: relative;
    top: 10px;
	left: -2px;
	height: 110px;
	width: 240px;
	background-color: white;
	border: 2px solid black;
	padding-top: 40px; 
	padding-bottom: 40px; 
	padding-left: 50px; 
	padding-right: 50px; 
}
#fargeboks {
	position: relative;
	top: -155px;
	left: -140px;
	height: 22px;
	width: 25px;
	border: 1px solid black;
	margin-bottom: 10px;
}
#info1 {
	position: absolute;
	top: 312px;
	left: 50px;
}
#info2 {
	position: absolute;
	top: 346px;
	left: 50px;
}
#info3 {
	position: absolute;
	top: 380px;
	left: 50px;
}
.sektordiagram {
    position: relative;
    top: 8px;
	left: -2px;
	height: 180px;
	width: 184px;
	background-color: white;
	border: 2px solid black;
	padding-left: 129px; 
	padding-right: 29px;
	padding-top: 16px; 
	padding-bottom: 31px; 
}
#BackButton {
	position: absolute;
	top: 10px;
	left: 20px;
	border: 0; 
	height: 50; 
	width: 52;
	z-index: 2;
}
</style>
</head>
<body>
<a href="./../../index.html"><img src="back1.png" id="BackButton"></img></a>

<div id="boks">
<h1 id="title">Sektordiagram</h1>
<div id="fargeboks1" style="background-color: rgb(196, 33, 33);"></div><h2 id="karbo">Karbohydrat</h2>
<div id="fargeboks2" style="background-color: rgb(251, 189, 80);"></div><h2 id="protein">Protein</h2>
<div id="fargeboks3" style="background-color: rgb(0, 102, 34);"></div><h2 id="fett">Fett</h2>
<div id="hzline"></div>

<h2 id="title2"><i>Matrett per 100 gram</i></h2>

	<div id="boks1"><center>
		<h3 id="title3">Melkesjokolade</h3>
		<img src="./melkesjokolade.jpg" id="bilde1"></img>
		<img class="sektordiagram" src="./sektordiagram1.php"></img>
		<div id="fargeboks" style="background-color: rgb(196, 33, 33);"></div>
		<div id="fargeboks" style="background-color: rgb(251, 189, 80);"></div>
		<div id="fargeboks" style="background-color: rgb(0, 102, 34);"></div>
		<h4 id="info1">53g</h4>
		<h4 id="info2">8,30g</h4>
		<h4 id="info3">34g</h4>	
	</center></div>
	<div id="boks2"><center>
		<h3 id="title4">Pizza</h3>
		<img src="./pizza.png" id="bilde2"></img>		
		<img class="sektordiagram" src="./sektordiagram2.php"></img>
		<div id="fargeboks" style="background-color: rgb(196, 33, 33);"></div>
		<div id="fargeboks" style="background-color: rgb(251, 189, 80);"></div>
		<div id="fargeboks" style="background-color: rgb(0, 102, 34);"></div>
		<h4 id="info1">26g</h4>
		<h4 id="info2">11g</h4>
		<h4 id="info3">7,6g</h4>	
	</center></div>
	<div id="boks3"><center>
		<h3 id="title5">Jalapeño</h3>
		<img src="./jalapeno.png" id="bilde3"></img>
		<img class="sektordiagram" src="./sektordiagram3.php"></img>
		<div id="fargeboks" style="background-color: rgb(196, 33, 33);"></div>
		<div id="fargeboks" style="background-color: rgb(251, 189, 80);"></div>
		<div id="fargeboks" style="background-color: rgb(0, 102, 34);"></div>
		<h4 id="info1">7g</h4>
		<h4 id="info2">0,9g</h4>
		<h4 id="info3">0,4g</h4>	
	</center></div>
	<div id="boks4"><center>
		<h3 id="title6">Poteter</h3>
		<img src="./potet.jpg" id="bilde4"></img>
		<img class="sektordiagram" src="./sektordiagram4.php"></img>
		<div id="fargeboks" style="background-color: rgb(196, 33, 33);"></div>
		<div id="fargeboks" style="background-color: rgb(251, 189, 80);"></div>
		<div id="fargeboks" style="background-color: rgb(0, 102, 34);"></div>
		<h4 id="info1">16,6g</h4>
		<h4 id="info2">1,8g</h4>
		<h4 id="info3">0,1g</h4>	
	</center></div>
</div>

</body>
</html>