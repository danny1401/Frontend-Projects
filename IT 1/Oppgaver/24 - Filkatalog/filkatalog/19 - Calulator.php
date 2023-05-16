<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nummer_1 = $_POST['nummer1'];
$nummer_2 = $_POST['nummer2'];

$regnefunksjon = $_POST['regnefunksjon'];

$nummer_1_justert = str_replace(",",".",$nummer_1);
$nummer_2_justert = str_replace(",",".",$nummer_2);

	if ($regnefunksjon == "+")
		{
		$sum = $nummer_1_justert + $nummer_2_justert;
		}
	elseif ($regnefunksjon == "-") 
		{
		$sum = $nummer_1_justert - $nummer_2_justert;
		}
	elseif ($regnefunksjon == "*") 
		{
		$sum = $nummer_1_justert * $nummer_2_justert;
		}
	elseif ($regnefunksjon == "÷") 
		{
		$sum = $nummer_1_justert / $nummer_2_justert;
		}
		
print "<h1 id='plassering2'>".$nummer_1_justert." " .$regnefunksjon. " ".$nummer_2_justert." = " .$sum."</h1>";

}

print '

<html>
<head>
<title>Calculator</title>
<style>
#plassering {
	position: relative;
	top: 200px;
}
#plassering2 {
	position: absolute;
	top: 340px;
	left: 590px;
	font-size: 50px;
}
.boks {
	width: 150px;
	height: 50px;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 25px;
	margin-right: 20px; 
	text-align: center;
}
#tegn {
	width: 50px;
	height: 50px;
	border: 2px solid black;
	border-radius: 8px;
	font-size: 25px;
	margin-right: 20px; 
	text-align: center;
}
#submit {
	background-color: #809fff;
}
</style>
</head>
<body>

<center id="plassering">
	<form method="POST" action="">
		<input name="nummer1" class="boks">
		
		<select name="regnefunksjon" id="tegn">
		    <option value="+">+</option>
		    <option value="-">-</option>
		    <option value="*">*</option>
		    <option value="÷">÷</option>
		</select>
		
		<input name="nummer2" class="boks">
		
		<input type="submit" name="submit"  value="Calculate" class="boks" id="submit">
	</form>
</center>

</body>
</html>

';
?>