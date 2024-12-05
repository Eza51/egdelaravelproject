<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
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
    <h1>Employee List</h1>
    <!-- Created by Nowshin Jerin Eza -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Details</th> <!-- Add a column for the link -->
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->age }}</td>
            <td><a href="{{ url('/employee/'.$employee->id) }}">View Details</a></td> <!-- Link to details page -->
        </tr>
        @endforeach
    </table>
    <footer>
        <p>Created by Nowshin Jerin Eza</p>
    </footer>
</body>
</html>
