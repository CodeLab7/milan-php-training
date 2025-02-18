<!-- sort if..else -->
<?php
$a = random_int(1, 20);

$b = $a < 13
    ? "hy <br>"
    : "hello <br>" ;

echo $b;
?>

<!-- nested if -->
<?php
$age = random_int(1, 20);

if ($age < 12) {
    echo "You are a child. your age is $age";
} else {
    if ($age >= 13 && $age <= 19) {
        echo "You are a teenager. your age is $age";
    } else {
        echo "You are an adult. your age is $age";
    }
}
?>
