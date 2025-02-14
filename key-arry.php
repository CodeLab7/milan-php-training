<!DOCTYPE html>
<html>
<body>

<-- key array -->
<?php
$number = [
	"milan" => "12",
	"parth" => "13",
	"zeel"  => "14"
];

echo "this name " . $number['milan'] . ".";
?>
<-- index array -->
<?php
$name = [
	"milan",
	"jeel",
	"parth"
];
echo "name" . $name[0] . ".";
?>

<-- simple array -->
<?php
$name = [
	"milan",
	"jeel",
	"parth"
];
var_dump($name);
?>
</html>
</body>
