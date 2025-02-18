<?php
$favcolor = random_int(1, 5);

switch ($favcolor) {
    case 1:
        echo "Your favorite color is red!";
        break;
    case 2:
        echo "Your favorite color is blue!";
        break;
    case 3:
        echo "Your favorite color is green! ";
        break;
    default:
        echo "Not favorite colour color is $favcolor";
}
?>
