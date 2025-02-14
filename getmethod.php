<!DOCTYPE html>
<html>
<body>
<form>
    <form action="getmethod.php" method="GET">
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        <input type="submit">
    </form>

</form>
<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    echo "Name: $name<br>";
    echo "Email: $email";
} else {
    echo "Please provide both name and email.";
}
?>
</body>
</html>


