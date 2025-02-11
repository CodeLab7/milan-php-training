<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
} else {
    echo "Please provide both name and email.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJAX Form Submission</title>
    <script>

        function submitForm(event) {
            event.preventDefault();
            // Collect form data
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            // Create the query string to send data via GET method
            var queryString = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);

            // Create an XMLHttpRequest to send the form data asynchronously
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '?' + queryString, true);

            xhr.send();
        }
    </script>
</head>
<body>


<h2>AJAX Form Submission</h2>


<form id="myForm" onsubmit="submitForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Submit</button>
</form>
<div id="response"></div>

</body>
</html>
