<!DOCTYPE html>
<html>

<head>
    <title>Validation</title>
    <style>
        {
            font-size: 18px;
            padding: 5px 8px;
            margin: 10px;
        }
        .error {
            color: red;
            font-size: 18px;

        }
    </style>
</head>

<body>
    <form method="post" action="/larvel-api-sanctum/login">
        @csrf
        <input type="text" name="username"
            placeholder="Enter username">
        <br>
        <input type="text" name="password"
               placeholder="Enter password">
        <br>
        <input type="submit" name="submit"
               value="submit">
    </form>
    <ul class="error">
        @foreach($error->all() as error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</body>
</html>