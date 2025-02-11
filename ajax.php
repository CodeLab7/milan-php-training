<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Form Submission (GET method)</title>
    <script>
        // Handle the form submission using AJAX with GET method
        function submitForm(event) {
            event.preventDefault();  // Prevent the default form submission

            // Collect form data
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            // Create the query string to send data via GET method
            var queryString = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email);

            // Create an XMLHttpRequest to send the form data asynchronously
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '?' + queryString, true);  // URL with query parameters

            // When the request is successful
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display the server response in the response div
                    document.getElementById('response').innerHTML = 'Response from server: ' + xhr.responseText;
                } else {
                    document.getElementById('response').innerHTML = 'Error: ' + xhr.statusText;
                }
            };

            // When there is an error with the request
            xhr.onerror = function() {
                document.getElementById('response').innerHTML = 'Request failed.';
            };

            // Send the GET request to the server
            xhr.send();
        }
    </script>
</head>
<body>

<h2>AJAX Form Submission (GET Method)</h2>

<!-- The form that will trigger the AJAX submission -->
<form id="myForm" onsubmit="submitForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Submit</button>
</form>

<div id="response"></div> <!-- Area to show the server's response -->

</body>
</html>
