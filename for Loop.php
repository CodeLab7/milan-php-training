<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
for ($x = 1; $x <= 10; $x++) {
    if ($x == 4){
        continue;
    }
    echo "The number is: $x <br>";
}
?>
</body>
</html>
