<?php

/**
 * Simple example to print 10 Numbers using do-while loop
 * Output: 1 2 3 4 5 6 7 8 9 10
 */

$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);



/**
 * Simple example to print 3 Names using do-while loop
 * Output: John David Amy
 */

$names = ["John", "David", "Amy"];

do {
    echo current($names) . "<br>";
} while (next($names));


/**
 * Simple example to print 1 for 6 time using do-while loop
 * Output: 1
 */
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i != 6);

// output: 1 1 1 1 1
?>