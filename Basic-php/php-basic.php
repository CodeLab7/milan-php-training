<!DOCTYPE html>
<html>
<body>

<!-- php simple example
 output: How are you -->
<?php
    echo "How are oyu!";
?>

<!-- echo sourtcut example
output: Hello, World! This is PHP code -->
<?= "Hello, World! This is PHP code"; ?>

<!-- PHP Synatance  <?php ?> , $ , ;
output: My name is Milan -->
<?php
$name = "Milan";
echo "My name is" . $name;
?>


<h2>Data Type</h2>
<h4>Number</h4>
<!-- output: int(5985) , int(-345) , int(0x8c) , int(047) , float(10.365) -->
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
var_dump($x); // float
?>


<h4>String</h4>
<!-- output: string(12) "Hello world!" -->
<?php
$x = "Hello world!";
var_dump($x);
?>

<h4>Array -> simple arry ,index arry , multidimensional array </h4>
<!-- output: array(3)
{
    [0]=> string(5)"Volvo"
    [1]=> string(3) "BMW"
    [2]=> string(6) "Toyota"
}
 array(3) {
            ["Volvo"]=> string(4) "XC90"
            ["BMW"]=> string(2) "X5"
            ["Toyota"]=> string(10) "Highlander"
 }
 array(3) {
[0]=> array(3) {
             ["name"]=> string(5) "Milan"
             ["age"]=> int(12)
             ["class"]=> string(1) "A"
}
[1]=> array(3) {
            ["name"]=> string(4)"Zeel"
            ["age"]=> int(13)
            ["class"]=> string(1) "B"
}
[2]=> array(3) {
            ["name"]=> string(5) "Parth"
            ["age"]=> int(14)
            ["class"]=> string(1) "C"
}
} -->

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
var_dump($cars) ;

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