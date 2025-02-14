<!DOCTYPE html>
<html>
<body>

<h1>The == equal Operator</h1>

<?php
$x = 12;
$y = 12;

if ($x == $y) {
    echo "$x is equal to $y";
}
?>

<h2>the === identical operator  </h2>\
<?php
$x = 120;
$v = 120;

if ($x === $v){
    echo "the variables indicate ";
}else{
    echo "the variables not indicate";
}
?>

<h3>the != , <> not equal operator </h3>
<?php
$x = 50;
$y = 25;

if ($x != $y){
    echo "$x not equal $y";
}
?>

<h4>the !== not identical operator </h4>
<?php
$var1 = 120;
$var2 = 150;

if ($var1 !== $var2) {
    echo "$var1 not identical $var2";
}
?>

<h5> > greater than operator</h5>
<?php
$x = 100;
$y = 50;

if ($x > $y) {
    echo "$x is greater than $y";
}
?>

<h6> < less than operator </h6>
<?php
$x = 50;
$y = 60;

if ($x < $y) {
    echo "$x is less than $y";
}
?>

<h7> >= greater than or equal to </h7>
<?php
$x = 200;
$y = 180;

if ($x >= $y){
    echo "$x is greater than or equal to $y";
}
?>

<h8> <= less than or equal to </h8>
<?php
$x = 150;
$y = 200;

if ($x <= $y){
    echo "$x is less than or equal to $y";
}
?>

</body>
</html>

<h9>&& operator</h9>
<?php
$x = 100;
$y = 50;

if($x == 100 && $y == 50) {
	echo "helo word!";
}
?>

<h10>or || operator</h10>
<?php
$x = 50;
$y = 10;

if($x == 50 or $y == 10) {
	echo "helo word!";
}
?>

<h11>xor operator</h11>
<?php
$x = 50;
$y = 10;

if($x == 50 xor $y == 5) {
	echo "helo word!";
}
?>

<h12>! not operator condition in not true</h12>
<?php
$x = 40;

if (!($x = 30));
echo "hello word";
?>
