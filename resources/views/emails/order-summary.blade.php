<!-- resources/views/emails/order-summary.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-md-6 {
            width: 48%;
        }

        p {
            margin: 0;
        }

        .bill-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff; /* White background for better readability */
        }

        .bill-table th, .bill-table td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        .bill-table th {
            background-color: #343a40;
            color: #fff;
        }

        .order-details {
            margin-top: 20px;
        }

        .order-details th, .order-details td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        .order-details th {
            background-color: #343a40;
            color: #fff;
        }

        .btn-back {
            text-align: center;
            margin-top: 20px;
        }

        .btn-back a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Order Summary</h1>

    <div class="container">
    <h1>Order Summary</h1>

    <div class="row">
        <div class="col-md-6">
            <p><strong>Name:</strong> {{ $order->fname }} &nbsp; {{$order->lname}}</p><br>
            <p><strong>Street Address:</strong> {{ $order->street_add }} &nbsp; {{$order->street_add2}}</p><br>
            <p><strong>Phone:</strong> {{ $order->phone }}</p><br>
        </div>
        <div class="col-md-6">
            <p><strong>City:</strong> {{ $order->city }}</p><br>
            <p><strong>Zip:</strong> {{ $order->zip }}</p><br>
            <p><strong>Email:</strong> {{ $order->email }}</p><br>
        </div>
    </div>

    <!-- Cart Items -->
    <table class="bill-table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <!-- Replace the following with a loop to display cart items -->
        @foreach($cart as $item)
            <tr style="color:black;">
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    {{ session("cart.$item->price.quantity") ?? $item->quantity }}
                </td>
                <td>{{ $item->price * session("cart.$item->price.quantity") ?? $item->quantity}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Order Details -->
    <div class="order-details">
        <h2>Order Details</h2>

        <table>
            <tr>
                <th>Subtotal</th>
                <td>{{ $order->subtotal }}</td>
            </tr>
            <tr>
                <th>Delivery</th>
                <td>Free</td>
            </tr>
            <tr>
                <th>GST (18%)</th>
                <td>{{ $order->gst }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ $order->garndtotal }}</td>
            </tr>
        </table>
    </div>

    <div class="btn-back">
        <a href="{{ route('backToHome') }}">Back to Home</a>
    </div>
</div>

</div>
<script src="{{ asset('js/sendEmail.js') }}"></script>
</body>
</html>
