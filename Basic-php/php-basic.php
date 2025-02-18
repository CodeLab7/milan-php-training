<!DOCTYPE html>
<html>
<body>

<?= "Hello, World! This is PHP code"; ?>


<h2>Data Type</h2>
<h4>Number</h4>
<?php
$x = 5985;
var_dump($x);

$x = -345; // negative number
var_dump($x);

$x = 0x8C; // hexadecimal number
var_dump($x);

$x = 047; // octal number
var_dump($x);

$x = 10.365;
var_dump($x);
?>

<h4>String</h4>
<?php
$x = "Hello world!";
var_dump($x);
?>

<h4>Array</h4>
<?php
$cars = [
	"Volvo",
	"BMW",
	"Toyota"
];
var_dump($cars);

$cars = [
	"Volvo"  => "XC90",
	"BMW"    => "X5",
	"Toyota" => "Highlander"
];
var_dump($cars);

$students = [
	[
		'name'  => 'Milan',
		'age'   => 12,
		'class' => 'A'
	],
	[
		'name'  => 'Zeel',
		'age'   => 13,
		'class' => 'B'
	],
	[
		'name'  => 'Parth',
		'age'   => 14,
		'class' => 'C'
	]
];
var_dump($students);
?>


</body>
</html>