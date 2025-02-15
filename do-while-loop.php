<?php
$i = 1;

do {
	echo $i . "<br>";
	$i++;
} while($i <= 10);

// Output: 1 2 3 4 5 6 7 8 9 10

$names = ["John", "David", "Amy"];

do {
	echo current($names) . "<br>";
} while(next($names));

$i = 1;

do {
	$i++;
	echo $i != 6  . "<br>";;
} while($i != 6);

?>
