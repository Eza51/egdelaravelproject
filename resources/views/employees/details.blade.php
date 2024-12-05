<!DOCTYPE html>
<html lang="en">
<head>
    {{-- //codeby nowshinjerineza --}}
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
        .details-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .detail-item {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .detail-item strong {
            color: #4CAF50;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    {{-- //codeby nowshinjerineza --}}
    <h1>Employee Details</h1>

    <div class="details-container">
        <div class="detail-item"><strong>ID:</strong> {{ $employee->id }}</div>
        <div class="detail-item"><strong>Name:</strong> {{ $employee->name }}</div>
        <div class="detail-item"><strong>Email:</strong> {{ $employee->email }}</div>
        <div class="detail-item"><strong>Age:</strong> {{ $employee->age }}</div>
    </div>

    <footer>
        <p>Created by Nowshin Jerin Eza</p>
    </footer>

</body>
</html>

