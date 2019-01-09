<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('update') }}">
    <table border="">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>

    </table>
</form>
</body>
</html>