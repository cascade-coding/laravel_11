<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>

<body>
    <h1>You've requested for a password reset email</h1>

    <p>click the following link to reset your password</p>
    <a href="http://127.0.0.1:3000/api/user/reset/{{ $token }}">click here</a>
</body>

</html>
