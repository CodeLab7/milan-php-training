<!DOCTYPE html>
<html>
<body>
<form>
    <form action="postmethod.php" method="POST">
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        <input type="submit">
    </form>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "post"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "Name : $name<br>";
    echo "Email : $email";
}

?>
</body>
</html>
