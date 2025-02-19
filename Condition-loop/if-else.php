<!-- imple example to random int (1,20) using sort if..else -->
<!-- output:hello.  13 -->

<?php
$a = random_int(1,20);

$b = $a < 13
    ? "hy <br>"
    : "hello <br>" ;

echo $b;
?>

<!--  simple example to random age (1,20) using nested if -->
<!-- output:You are a teenager. your age is 13 -->

<?php
$age = random_int(1, 20);

if ($age < 12) {
    echo "You are a child. your age is $age";
} else {
    if ($age >= 13 && $age <= 19) {
        echo "You are a teenager. your age is $age <br>";
    } else {
        echo "You are an adult. your age is $age <br>";
    }
}
?>

<!--  simple example to random time (1,24) using if.elseif.else -->
<!-- output:good morning! time is 12 -->

<?php
$time = random_int(1, 24);

if ($time <= 12) {
    echo " good morning! time is $time";
} elseif ($time > 12 && $time <= 18) {
    echo " good afternoon! time is $time<br>";
} else {
    echo "good evening! time is $time <br>";
}
?>