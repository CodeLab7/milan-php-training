<!DOCTYPE html>
<html>
<body>
<!-- simple example 10 number print , number 4 continue in for loop -->
<!--  output:The number is: 1
             The number is: 2
             The number is: 3
             The number is: 5
             The number is: 6
             The number is: 7
             The number is: 8
             The number is: 9
             The number is: 10 -->
<?php
$x = 10;
for ($x = 1; $x <= 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
?>

<!-- simplw example array print foreach loop -->
<!-- output:Milan
            Zeel,
            Mihir -->
<?php
$name = array(
    "Milan",
    "Zeel",
    "Mihir"
);
foreach ($name as $x) {
    echo "$x <br>";
}
?>
</body>
</html>
