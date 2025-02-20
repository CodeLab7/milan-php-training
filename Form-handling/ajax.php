<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo $name . "<br>";
    echo $email;
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

            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;

            // Create the query string to send data via GET method
            let queryString = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);

            // Create an XMLHttpRequest to send the form data asynchronously
            let xhr = new XMLHttpRequest();
            xhr.open('GET', '?' + queryString, true);

            xhr.send();

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('response').innerHTML = 'Form submitted successfully.';
                }
            }
        }
    </script>
</head>
<body>


<h2>AJAX Form Submission</h2>


<form id="myForm" onsubmit="submitForm(event)">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Submit</button>
</form>
<div id="response"></div>

</body>
</html>
