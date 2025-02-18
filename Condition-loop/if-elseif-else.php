 <?php
$time = random_int(1, 24);

if ($time <= 12) {
    echo " good morning! time is $time";
} elseif ($time > 12 && $time <= 18) {
    echo " good afternoon! time is $time";
} else {
    echo "good evening! time is $time";
}
?>
