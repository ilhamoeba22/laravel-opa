<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Register</h1><br>
    <form action="{{ url('register') }}" method="POST">
        @csrf 
        <label for="fname">name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="fname">email:</label>
        <input type="email" id="femail" name="femail"><br><br>
        <label for="fname">password:</label>
        <input type="password" id="fpassword" name="fpassword"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>