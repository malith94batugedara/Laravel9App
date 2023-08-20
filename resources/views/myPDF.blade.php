<!DOCTYPE html>
<html>
<head>
    <title>Invoice PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>MOTOR COMPANY</p>
  
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Count</th>
            <th>Price</th>
        </tr>
        <?php $sum_tot_Price = 0 ?>
        @foreach($inventories as $inventory)
        <tr>
            <td>{{ $inventory->name }}</td>
            <td>{{ $inventory->count }}</td>
            <td>{{ $inventory->count * $inventory->price }}</td>
        </tr>
        <?php $sum_tot_Price += $inventory->count * $inventory->price ?>
        @endforeach
        <tr>
            <td>Total</td>
            <td></td>
            <td>{{ $sum_tot_Price }}</td>
         </tr>
    </table>
  
</body>
</html>