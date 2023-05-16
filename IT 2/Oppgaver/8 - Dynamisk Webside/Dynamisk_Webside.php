<html>
<head>
	<meta http-equiv="refresh" content="3600">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=1366, initial-scale=1">
	<link rel="stylesheet" href="./style_slideshow.css">
    <title>Dynamisk Webside</title>
	
<script>
/* KOBLING */
function script(){
	dato_og_tid();
	startTime();
}
/* JS CLOCK - TIME */
function startTime() {
	var today = new Date();
	var hour = today.getHours();
	var minute = today.getMinutes();
	var second = today.getSeconds();
	minute = checkTime(minute);
	second = checkTime(second);
	
	document.getElementById('tid').innerHTML = hour + ":" + minute + ":" + second;
	var time = setTimeout(startTime, 500);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i};
	return i;
}

/* JS DATE & TIME */
function dato_og_tid() {
	var today = new Date();
	var hour = today.getHours();
	var day = today.getDay();

/* DATE - DAY */
	if (day === 1) {	
			day = "Mandag";
			info_day = "I dag er det en arbeidsdag. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 2) {	
			day = "Tirsdag";
			info_day = "I dag er det en arbeidsdag. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 3) {	
			day = "Onsdag";
			info_day = "I dag er det en arbeidsdag. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 4) {	
			day = "Torsdag";
			info_day = "I dag er det en arbeidsdag. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 5) {	
			day = "Fredag";
			info_day = "I dag er det en arbeidsdag. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 6) {	
			day = "Lørdag";
			info_day = "I dag er det helg. På neste side kan du sjekke ut dagens nyheter.";
	}
	if (day === 7) {	
			day = "Søndag";
			info_day = "I dag er det helg. På neste side kan du sjekke ut dagens nyheter.";
	}

/* BACKGROUND CHANGE - TIME */
	var morning = '<img src="./morning.png"></img>';
	var daytime = '<img src="./day.jpg"></img>';
	var afternoon = '<img src="./afternoon.jpg"></img>';
	var night = '<img src="./night.jpg"></img>';

	if (hour > 6 && hour <= 12) {
		document.getElementById('background').innerHTML = morning;
		document.getElementById('dag').innerHTML = day;
		document.getElementById('info_dag').innerHTML = info_day;
		document.getElementById('hilsen').innerHTML = "God morgen!";
	} 
	if (hour > 12 && hour <= 18) {
		document.getElementById('background').innerHTML = daytime;
		document.getElementById('dag').innerHTML = day;
		document.getElementById('info_dag').innerHTML = info_day; 
		document.getElementById('hilsen').innerHTML = "God dag!";
	} 
	if (hour > 18 && hour <= 22) {
		document.getElementById('background').innerHTML = afternoon;
		document.getElementById('dag').innerHTML = day;
		document.getElementById('info_dag').innerHTML = info_day; 
		document.getElementById('hilsen').innerHTML = "God ettermiddag!";
	} 
	if (hour > 22 && hour <= 6) {
		document.getElementById('background').innerHTML = night;
		document.getElementById('dag').innerHTML = day;
		document.getElementById('info_dag').innerHTML = info_day; 
		document.getElementById('hilsen').innerHTML = "God natt!";
	} 
}
</script>
</head>
<body onload="script()">
<a href="./../../assignmentsT1_140IOl.html"><img src="./../backbuttonW.png" id="BackButton"></img></a>

<div id="tid"></div>
<div id="dag"></div>
<div id="hilsen"></div>

<div class="slideshow">
	<div class="slides">
		<div id="background"></div>
		<div id="info_dag"></div>
		<div class="number">1 / 3</div>
	</div>
	<div class="slides">
		<iframe src="https://www.vg.no/" width="100%" height="100%"></iframe>
		<div class="number">2 / 3</div>
	</div>
	<div class="slides">
		<iframe src="https://www.aftenposten.no/" width="100%" height="100%"></iframe>
		<div class="number">3 / 3</div>
	</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
/* SLIDESHOW */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>