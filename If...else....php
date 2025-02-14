<?php
$time = 1;
if ($time < "12") {
    echo "good morning!";
} else {
    echo "good evening!";
}

?>

<-- sort if..else -->
<?php
$a = 10;
$b = $a < 13 ? "hy" : "hello" ;

echo $b;
?>

<-- nsted if -->
<?php
$age = 13;

if ($age < 12) {
    echo "You are a child.";
} else {
    if ($age >= 13 && $age <= 19) {
        echo "You are a teenager.";
    } else {
        echo "You are an adult.";
    }
}
?>

?>
