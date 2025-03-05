
<!DOCTYPE html>
<html>
<body>
<form action="file-data.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="Gender">Gender:</label>
    <input type="radio" name="gender" value="Male">male
    <input type="radio" name="gender" value="Female">female
    <input type="radio" name="gender" value="Other">other <br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>

