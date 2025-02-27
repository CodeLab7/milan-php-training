<!--
* Simple example to print random (1,10) number using whilw loop
* Output:i = 3

3
4
5
6
7
8
9
-->


<?php
$i = random_int(1, 10);
print_r("i = $i <br><br>");

while ($i < 10) {
    echo $i ."<br>";
    $i++;
}
?>

