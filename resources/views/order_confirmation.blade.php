@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Order Confirmation</h2>
    @if(session('order_success'))
        <div class="alert alert-success">{{ session('order_success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach($items as $id => $item)
                @php $total = $item['price'] * $item['quantity']; @endphp
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>₹{{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>₹{{ $total }}</td>
                </tr>
                @php $grandTotal += $total; @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-end">Grand Total:</th>
                <th>₹{{ $grandTotal }}</th>
            </tr>
        </tfoot>
    </table>

    <div class="text-center mt-4">
        <a href="/" class="btn btn-primary">Back to Home</a>
    </div>
</div>
@endsection
