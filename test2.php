<html>
<head>
<title>High Temperature Array</title>
</head>

<body>
<h2>High Temperature for Spring Month</h2>
<?php
	$hightemps = array(61,62,63,64,65,66,67,68,69,70,71,72,73,74,75);
	
	$count = count($hightemps);
	
	$total = 0;
	foreach($hightemps as $h){
		
		$total += $h;
	}
	$avg = round($total/$count);
	
	echo "<p>The average high temperature for the month was $avg &deg;F.</p>";
	
	rsort($hightemps);
	
	$toptemps = array_slice($hightemps,5,5);
	echo "<p>The warmest five high temperature were:<br>";
	foreach($toptemps as $t){
		echo "$t &deg;F<br>";
		
	}
	echo "</p>";
	?>
</body
</html>