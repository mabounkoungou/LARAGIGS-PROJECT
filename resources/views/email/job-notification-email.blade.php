<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Notification Email</title>
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
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello {{ $mailData['employer']->name }},</h1>

        <p>We are pleased to inform you about a new job opportunity:</p>

        <p>Job Title: {{ $mailData['job']->title }}</p>

        <p>Employee Details:</p>

        <p>Name: {{ $mailData['user']->name }}</p>
        <p>Email: {{ $mailData['user']->email }}</p>
        <p>Mobile No: {{ $mailData['user']->mobile }}</p>

        <p>We hope this notification finds you well.</p>

        <p>Best Regards,</p>
        <p>Your Company</p>
    </div>
</body>
</html>
