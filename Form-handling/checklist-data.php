<h1>Checklist data</h1>
<!-- output: Reading
            Traveling
            cooking
            Gaming
select hobby: Reading
select hobby: Traveling --!>

<!DOCTYPE html>
<html lang="en">
<body>

<form action="checklist-data.php" method="post">
    <label><input type="checkbox" name="hobby[]" value="Reading"> Reading</label><br><br>
    <label><input type="checkbox" name="hobby[]" value="Traveling"> Traveling</label><br><br>
    <label><input type="checkbox" name="hobby[]" value="Cooking"> cooking</label><br><br>
    <label><input type="checkbox" name="hobby[]" value="Gaming"> Gaming</label><br><br>

    <input type="submit" value="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['hobby'])){
        foreach ($_POST['hobby'] as $hobby) {
            echo "select hobby: " .($hobby). "<br>";
        }
    }else{
        echo "no hobby select:";
    }
}
?>


</body>
</html>

