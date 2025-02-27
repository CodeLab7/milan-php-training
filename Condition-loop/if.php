<!DOCTYPE html>
<html>
<body>

<h3>The == equal Operator</h3>
<!-- output: x = 12
             y = '12'
12 is equal to 12-->

<?php
$x = 12;
$y = '12';
print_r("x = 12 <br>");
print_r("y = '12' <br>");

if ($x == $y) {
    echo "$x is equal to $y";
}

?>

<h3>The === identical operator  </h3>
<!-- output: x = 120
             y = 120
the variables indicate-->
<?php

$x = 120;
$y = 120;
print_r("x = 120 <br>");
print_r("y = 120 <br>");

if ($x === $y){
	echo "the variables indicate ";
}
?>

<h3>The != , <> not equal operator </h3>
<!-- output: x = 50
             y = 25
50 not equal 25-->
<?php
$x = 50;
$y = 25;
print_r("x = $x <br>");
print_r("y = $y <br>");


if ($x != $y){
    echo "$x not equal $y";
}
?>

<h3>The != and !== not identical operator </h3>
<!-- output: x = 120
             y = '120'
120 equal 120-->

<?php
$x = 120;
$y = '120';
print_r("x = 120 <br>");
print_r("y = '120' <br>");

if ($x != $y) {
	echo "$x not equal $y <br><br>";
}else{
	echo "$x equal $y <br><br>";
}
?>

<!-- example 2-->
<!-- output: x = 120
             y = '120'
120 not identical 120 -->
<?php
$var1 = 120;
$var2 = '120';
print_r("x = 120 <br>");
print_r("y = '120' <br>");

if ($var1 !== $var2) {
	echo "$var1 not identical $var2 <br><br>";
}
?>

<h3>The > greater than operator</h3>
<!-- output: x = 51
             y = 50
51 is greater than 50 -->
<?php
$x = 51;
$y = 50;
print_r("x = $x <br>");
print_r("y = $y <br>");

if ($x > $y) {
    echo "$x is greater than $y";
}else{
	echo "$x is less than $y";
}
?>

<h3>The < less than operator </h3>
<!-- output: x = 50
             y = 60
50 is less than 60 -->
<?php
$x = 50;
$y = 60;
print_r("x = $x <br>");
print_r("y = $y <br>");

if ($x < $y) {
    echo "$x is less than $y";
}
?>

<h3>The >= greater than or equal to </h3>
<!-- output: x = 200
             y = 180
200 is greater than or equal to 180 -->
<?php
$x = 200;
$y = 180;
print_r("x = $x <br>");
print_r("y = $y <br>");

if ($x >= $y){
    echo "$x is greater than or equal to $y";
}
?>

<h3>The <= less than or equal to </h3>
<!-- output: x = 150
             y = 200
150 is less than or equal to 200 -->
<?php
$x = 150;
$y = 200;
print_r("x = $x <br>");
print_r("y = $y <br>");

if ($x <= $y){
    echo "$x is less than or equal to $y";
}
?>

</body>
</html>

<h3>The && operator</h3>
<!-- output: x = raj
             y = ramesh
hello word! -->
<?php
$x = 'raj';
$y = 'ramesh';
print_r("x = raj <br>");
print_r("y = ramesh <br>");

if($x == 'raj' && $y == 'ramesh') {
	echo "hello word!";
}else{
	echo "not equal";
}
?>

<h3>The or || operator</h3>
<!-- output: x = 50
             y = 10
hello word! -->
<?php
$x = 50;
$y = 10;
print_r("x = 50 <br>");
print_r("y = 10 <br>");

if($x == 80 or $y == 10 or $x == 50) {
	echo "hello word!";
}
?>

<h3>The xor operator</h3>
<!-- output: x = 50
             y = 10
xor operator -->
<?php
$x = 50;
$y = 10;
print_r("x = 50 <br>");
print_r("y = 10 <br>");

if($x == 50 xor $y == 80) {
	echo "xor operator";
}
?>

<h3>The ! not operator condition in not true</h3>
<!-- output: x = 40
             condition = 30
not operator -->
<?php
$x = 40;
print_r("x = 40 <br>");
print_r("condition = 30 <br>");

if (!($x = 30));
echo "not operator";
?>
