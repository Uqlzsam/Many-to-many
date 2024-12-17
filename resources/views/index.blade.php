<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>customer</th>
        <th>products</th>
        </tr>
        @foreach ($customer as $customers)
        <tr>
            <td>{{ $customers->id }}</td>     
            <td>{{ $customers->name }}</td>
            <td>{{ $customers->product->product_name }}</td>
            <td>{{ $customers->product->product_category }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>