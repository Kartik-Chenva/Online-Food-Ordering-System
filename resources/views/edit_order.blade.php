   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="{{asset('CSS/admin.css')}}" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        
        <title>Dashboard</title>

        <style>
            /* General Reset */
            * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
            }
            body{
                background-color: #f4f7fc;
            }
            .pen1 form {
                background: linear-gradient(145deg, #ffffff, #f1f1f1);
                padding: 40px;
                border-radius: 12px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                margin: 10px 0px 0px 15%;
                transition: 0.3s ease;
            }

            .pen1 form:hover {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            }
            .breadcrumb a {
                text-decoration: none;
            }
            .breadcrumb{
                background-color:rgba(252, 252, 252, 0.82);
            }

            .sidebar a {
                text-decoration: none;
            }
            .pen1 form legend {
                font-size: 26px;
                font-weight: bold;
                color: #333;
                margin-bottom: 30px;
            }

            .pen1 label {
                display: block;
                font-size: 14px;
                color: #555;
                margin-bottom: 8px;
            }

            input[type="text"]#name,
            input[type="email"]#email,
            select,
            textarea {
                width: 100%;
                padding: 12px;
                margin-bottom: 18px;
                border-radius: 8px;
                border: 1px solid #ccc;
                font-size: 16px;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
                transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            input[type="text"]#name:focus,
            input[type="email"]#email:focus,
            select:focus,
            textarea:focus {
                border-color: #e53937;
                box-shadow: 0 0 8px rgba(229, 57, 55, 0.8);  /* Slightly stronger box-shadow */
                outline: none;
            }

            input [type="text"]#name:focus,
            input [type="email"]#email:focus,
            select:focus,
            textarea:focus {
                border-color: #e53937;
                box-shadow: 0 0 8px rgba(229, 57, 55, 0.6);
                outline: none;
            }

            .inp {
                background-color: #e53937;
                color: #fff;
                border: none;
                padding: 12px;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.3s ease;
                width: 100%;
            }

            .inp:hover {
                background-color: #c62828;
                transform: scale(1.05);
            }

            .inp:active {
                background-color: #b71c1c;
            }

            textarea {
                height: 150px;
            }

            .text-center {
    text-align: center;
}

.mt-4 {
    margin-top: 1.5rem; /* 24px */
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, transform 0.2s;
}

.btn-success {
    background-color: #28a745;
    color: white;
}

.btn-success:hover {
    background-color: #218838;
    transform: scale(1.05);
}

.btn-success:active {
    background-color: #1e7e34;
    transform: scale(0.98);
}

        </style>


</head>
<script src="{{asset('JS/all.js')}}"></script>
<script>
            document.addEventListener('DOMContentLoaded', () => {
                const menu = document.querySelector('.menu');
                const sidebar = document.querySelector('.sidebar');
                const mainContent = document.querySelector('.main--content');

                menu.onclick = function() {
                    sidebar.classList.toggle('active');
                    mainContent.classList.toggle('active');
                }
            });
        </script>
<body>
        <x-app-layout>
            <x-slot name="header" >
            <!-- <i class="ri-menu-line icon icon-0 menu" aria-label="Toggle menu"></i> -->
        </x-slot>
        <main class="main">
            <nav class="sidebar">
                <ul class="sidebar--items">
                <li>
                     <a href="dashboard">
                         <span class="icon icon-5"><i class="fa fa-home"></i></span>
                         <span class="sidebar--item">Admin</span>
                     </a>
                 </li>
                 <li>
                     <a href="registration_tabel">
                         <span class="icon icon-2"><i class="fa fa-comment"></i></span>
                         <span class="sidebar--item">Register</span>
                     </a>
                 </li>
                 <li>
                     <a href="review_tabel">
                         <span class="icon icon-3"><i class="fa fa-smile"></i></span>
                         <span class="sidebar--item">Review</span>
                     </a>
                 </li>
                 
                 <li>
                     <a href="contact_tabel">
                         <span class="icon icon-3"><i class="fa fa-envelope"></i></span>
                         <span class="sidebar--item">Contact</span>
                     </a>
                 </li>
                 <li>
                     <a href="order_tabel">
                         <span class="icon icon-3"><i class="fa fa-cart-plus"></i></span>
                         <span class="sidebar--item">Order</span>
                     </a>
                 </li>
                </ul>
                <ul class="sidebar--bottom-items">
                    <li>
                        <a href="login">
                            <span class="icon icon-4"><i class="ri-logout-box-r-line"></i></span>
                            <span class="sidebar--item">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
           <div class="main--content">
                <div class="overview" >
                    <div class="title">
                        <h2 class="section--title">Review Overview</h2>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard">Dashboard</a>
                            <i class='bx bx-chevron-right'></i>
                            <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                        </li>
                    </ul>
                    <span class="icon icon-register"><i class='bx bxs-user-plus'></i><h5>Update Review Data</h5></span>
                </div>
                <div class="pen1">
                <div class="container">
    <h2>Edit Order</h2>

    <form action="{{ route('order.update', $orders->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Full Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $orders->name) }}" required>
    </div>

    <div class="mb-3 row">
        <div class="col-md-6">
            <label for="phone" class="form-label fw-bold">Phone Number:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $orders->phone) }}" required>
        </div>
        <div class="col-md-6">
            <label for="order_date" class="form-label fw-bold">Order Date:</label>
            <input type="date" name="order_date" id="order_date" class="form-control" value="{{ old('order_date', $orders->order_date) }}" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label fw-bold">Delivery Address:</label>
        <textarea name="address" id="address" class="form-control" rows="3" required>{{ old('address', $orders->address) }}</textarea>
    </div>

    <h4 class="text-center mt-3">Order Items</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <!-- <th>Total</th> -->
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach($items as $id => $item)
                @php 
                    $total = ($item['price'] ?? 0) * ($item['quantity'] ?? 0);
                    $grandTotal += $total;
                @endphp
                <tr>
                    <td>{{ $item['name'] ?? 'N/A' }}</td>
                    <!-- <td>₹{{ $item['price'] ?? 0 }}</td> -->
                    <td>{{ $item['quantity'] ?? 0 }}</td>
                    <td class="fw-bold text-success">₹{{ $total }}</td>
                </tr>
                <!-- Hidden Inputs for Item Data -->
                <input type="hidden" name="items[{{ $id }}][name]" value="{{ $item['name'] }}">
                <input type="hidden" name="items[{{ $id }}][price]" value="{{ $item['price'] }}">
                <input type="hidden" name="items[{{ $id }}][quantity]" value="{{ $item['quantity'] }}">
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-warning">
                <th colspan="4" class="text-end fw-bold"  class="fw-bold fs-5 text-danger">Grand Total : ₹{{ $grandTotal }}</th>
                
                <!-- <th class="fw-bold fs-5 text-danger">₹{{ $grandTotal }}</th> -->
                <input type="hidden" name="total_price" value="{{ $grandTotal }}">
            </tr>
        </tfoot>
    </table>

    <div class="text-center mt-4">
        <input type="submit" class="btn btn-success" value="Update Order">
    </div>
</form>

</div>
                </div>
            </div>
            </main>
        </x-app-layout>
        </body>
    </html>
    
