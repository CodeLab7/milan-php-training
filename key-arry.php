<!DOCTYPE html>
<html>
<body>

<!-- key array -->
<?php
$number = [
	"12" => "milan",
	"13" => "parth",
	"14" => "zeel"
];

echo "this name " . $number['12'] . "<br>";
?>
<!-- index array -->
<?php
$name = [
	"milan",
	"jeel",
	"parth"
];
echo "name" . $name[2] . "<br>";
?>

<!-- simple array -->
<?php
$name = ["milan", "jeel", "parth"];

echo $name[0];
echo $name[1];
echo $name[2];

?>

<!-- multidimensional array -->
<?php
$student = [
	[
		"milan",
		"jeel",
		"parth"
	],
	[
		"12",
		"13",
		"14"
	],
	[
		"A",
		"B",
		"C"
	]
];

?>
</html>
</body>
