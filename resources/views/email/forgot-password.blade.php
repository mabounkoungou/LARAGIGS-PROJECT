<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: hsla(172, 80%, 15%, 0.897);
        }
        p {
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            background-color: hsla(172, 80%, 15%, 0.897);
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            background-color: hsla(172, 80%, 15%, 0.897);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello {{ $mailData['user']->name }},</h1>

        <p>Click below to change your password:</p>
        <a href="{{ route("account.resetPassword",$mailData['token']) }}">Reset Password</a>

        <p>Thanks</p>
    </div>
</body>
</html>
