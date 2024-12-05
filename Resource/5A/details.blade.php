<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .employee-info {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .employee-info p {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }

        .employee-info p:last-child {
            border-bottom: none;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Employee Details</h1>
    <div class="employee-info">
        <p><strong>ID:</strong> {{ $employee->id }}</p>
        <p><strong>Name:</strong> {{ $employee->name }}</p>
        <p><strong>Email:</strong> {{ $employee->email }}</p>
        <p><strong>Age:</strong> {{ $employee->age }}</p>
    </div>
</div>

<div class="footer">
    <p>Created by Nowshin Jerin Eza</p>
</div>

</body>
</html>
