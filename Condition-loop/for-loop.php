<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
for ($x = 1; $x <= 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
?>

<!-- foreach loop -->
<?php
$name = array(
    "milan",
    "zeel",
    "mihir"
);
foreach ($name as $x) {
    echo "$x <br>";
}
?>
</body>
</html>
