<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=1366, initial-scale=1">
	<link rel="stylesheet" href="./index_animation.css" type="text/css">
	<link rel="stylesheet" href="./navbar.css">
	<link rel="stylesheet" href="./style1.css">
	<link rel="stylesheet" href="./scrollbar.css">
	<title>Danny</title>

<link rel="icon" href="./MSharingan_I.ico" type="image/x-icon">
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-1669764-16', 'auto');
    ga('send', 'pageview');
</script>
<script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {

    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {

        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<style>
#shortcut {
	position: absolute;
	top: 745px;		right: 617px;
	height: 10px;	width: 5px;
	padding: 0;		margin: 0;
	color: white;	background-color: white;
	border: none;	text-decoration: none;	outline: none;
	z-index: 4;
	cursor: help;
}
</style>
</head>
<body id="page-top" class="index">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header page-scroll">
            <a class="navbar-brand" href="#page-top">Danny Thinh Tran</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#page-top">HOME</a>
                </li>
				<li class="page-scroll">
                    <a href="#portfolio">ARBEID</a>
                </li>
                <li class="page-scroll">
					<a href="#about">KONTAKT</a>
				</li>
			</ul>
        </div>
    </div>
</nav>

<header>
	<div id="stars2"></div>
	<div class="container">
        <div class="row">
            <div class="intro-text">
				<br><br><br><br><br>
					<span class="name">Velkommen til nettsiden</span>
					<a href="./Terminer_140IOl.html"><button id="shortcut"></button></a>
				<br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</header>

<?php
$valg = '
<section id="portfolio">
<center>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 id="title" style="text-shadow:3px 2px black;">ARBEID</h2>
        </div>
    </div>
<div class="row">
<h3 id="omarbeid_title">Om arbeidet mitt</h3>
<div id="omarbeid">
<br><br><br>tekst
</div>

<h3 id="admin_title">Admin</h3>
<div id="admin">
<form action="" method="post" name="test">
<h3 style="margin-top:30px;">Brukernavn</h3>
<input type="brukernavn" value="admin" name="brukernavn" autocomplete="off" value="" id="felt"> 
<br><br>
<h3>Passord</h3>
<input type="password" value="admin" name="passordet" autocomplete="off" value="" id="felt"> 
</div>

<input type="reset" name="Reset" value="Reset" class="knapp" id="knapp1">
<input type="submit" name="submit" value="Logg inn" class="knapp" id="knapp2">
</form>
	<br><br><br><br><br><br><br>
    </div>
</div>
</center>
</section>
';

$innskrevet_bruker = "";
$innskrevet_pw = "";
$riktig_bruker1 = "admin";
$riktig_pw1 = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valg = "";

$innskrevet_bruker = $_POST['brukernavn'];
$innskrevet_pw = $_POST['passordet'];

$innskrevet_bruker = str_replace("<"," &#60; ", $innskrevet_bruker);
$innskrevet_bruker = str_replace(">"," &#62; ", $innskrevet_bruker);
$innskrevet_bruker = str_replace("!"," utropstegn ", $innskrevet_bruker);
$innskrevet_bruker = str_replace("$"," &#36; ", $innskrevet_bruker);

$innskrevet_pw = str_replace("<"," &#60; ", $innskrevet_pw);
$innskrevet_pw = str_replace(">"," &#62; ", $innskrevet_pw);
$innskrevet_pw = str_replace("!"," utropstegn ", $innskrevet_pw);
$innskrevet_pw = str_replace("$"," &#36; ", $innskrevet_pw);

if ($innskrevet_bruker == $riktig_bruker1 && $innskrevet_pw == $riktig_pw1 || 
	$innskrevet_bruker == $riktig_bruker2 && $innskrevet_pw == $riktig_pw2) {
innlogget();
}
elseif ($innskrevet_bruker != $riktig_bruker1 && $innskrevet_pw != $riktig_pw1 || 
		$innskrevet_bruker != $riktig_bruker2 && $innskrevet_pw != $riktig_pw2) {
avvist();
}

elseif ($innskrevet_bruker == $riktig_bruker1 && $innskrevet_pw != $riktig_pw1 || 
		$innskrevet_bruker == $riktig_bruker2 && $innskrevet_pw != $riktig_pw2) {
avvist();
}

elseif ($innskrevet_bruker != $riktig_bruker1 && $innskrevet_pw == $riktig_pw1 || 
		$innskrevet_bruker != $riktig_bruker2 && $innskrevet_pw == $riktig_pw2) {
avvist();
}
}
function innlogget() {	print '<html><head><meta http-equiv="refresh" content="0;url=./Terminer_140IOl.html"></head></html>';	} 
function avvist() {;	print '<html><head><meta http-equiv="refresh" content="0;url=./Feil_Passord.html"></head></html>';	}
print '<div id="valg">'.$valg.'</div>';

?>

<section class="success" id="about">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
				<h2 id="title" style="text-shadow:3px 2px black;">KONTAKT</h2>
            </div>
        </div>
		<div class="row">
			<div class="tekst" id="form">
				<center><h3>Ta kontakt med meg</h3></center>
				<br><p>Her kan du ta kontakt med meg, stille meg spørsmål eller 
				gi meg noen kommentarer om arbeidet mitt.</p>
				<br><p>Gjerne rapporter her om du finner noen feil på nettsiden min.</p>
				<br><br><br>
			</div>
			<img src="./contact.png" id="bilde"></img>
			
			<div class="contact">
				<center>
				<form id="contact-form" method="get" action="http://www.informatikk1.net/felles/form_test_php/mail_get.php">
					<input type="text" name="felt1" class="form-control" id="form" placeholder="Navn" required><br>
					<input type="text" name="felt2" class="form-control" id="form" placeholder="Epost" required><br>
					<textarea type="text" name="felt3" class="form-text" id="form" placeholder="Melding" rows="4" required></textarea><br>
					<input type="submit" class="form-submit" value="SEND MELDING">
				</form>
				</center>
			</div>
		</div>
	</div>
</section>

<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3 style="text-shadow:3px 2px black;">E-post</h3>
					<p><i style="position:relative;top:10px;">danny1401@osloskolen.no</i></p>
				</div>
				<div class="footer-col col-md-4">
					<h3 style="text-shadow:3px 2px black;">Sosiale Medier</h3>
					<ul class="list-inline">
						<li><a href="#"><img src="./facebook.png" id="icons"></img></a></li>
						<li><a href="#"><img src="./snapchat.png" id="icons"></img></a></li>
						<li><a href="#"><img src="./instagram.png" id="icons"></img></a></li>
					</ul>
				</div>
				<div class="footer-col col-md-4">
					<h3 style="text-shadow:3px 2px black;">Om nettsiden</h3>
					<p>På denne nettsiden blir det vist<br> alt av arbeidet mitt fra IT 2</p>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					Copyright &copy; Danny Thinh Tran
				</div>
            </div>
        </div>
    </div>
</footer>

<script src="./jQuery.js"></script>
<script src="./Bootstrap.js"></script>
<script src="./Plugin.js"></script>
<script src="./Theme.js"></script>
</body>
</html>