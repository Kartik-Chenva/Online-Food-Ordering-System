<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            scroll-behavior: smooth;
        }
        #navbar {
            background: transparent;
            padding: 0 9%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
        }
        #logo img {
            width: 190px;
            margin-top: 3px;
            margin-left: -30px;
            transition: 0.3s ease;
        }
        .nav-item .nav-link {
            color: black;
            font-size: 16px;
            font-weight: 550;
            text-transform: uppercase;
            padding: 5px 15px;
            transition: 0.3s;
        }
        .nav-item .nav-link:hover {
            color: #e53937;
            border-bottom: 3px solid #e53937;
            padding-bottom: 5px;
        }
        #navbar input {
            border-radius: 50px;
            border: 2px solid #bdc3c7;
            padding-left: 15px;
            margin-left:30px;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease-in-out;
        }
        .d-flex #btn {
            border-radius: 50px;
            padding: 0px 15px;
            margin-left:20px;
            border: 2px solid #e53937;
            background: transparent;
            color: #e53937;
            transition: 0.3s ease;
            font-weight: 600;
            font-size: 13px;
        }
        .register button{
            margin-left: 30%;
            background: transparent;
            padding: 7px 15px;
            text-align: center;
            font-size: 17px;
            color:#fff;
            transition: 0.5s;
            border: none;
            border-radius: 15px;
            border: 2px rgb(6, 97, 67);
        }
        .register button a{
            text-decoration: none;
            color: rgb(6, 97, 67);
            font-weight: bold;
        }
        .register button:hover{
            background:rgb(6, 97, 67);
            color:#fff;
            border: 2px rgb(6, 97, 67);
        }
        .register button a:hover{
            color:#fff;
        }
        #footer{
            padding: 5px 5px;
            margin-top: 60px;
        }
        .arrow{
            position: fixed;
            background-color: #388b6f;
            border-radius: 60px;
            height: 50px;
            bottom: 40px;
            right: 50px;
            text-decoration: none;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <a href="{{ url('/') }}" class="navbar-brand" id="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('/menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{ url('/review') }}" class="nav-link">Reviews</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
            </ul>

            <form class="d-flex" onsubmit="return false;">
                <input type="text" class="form-control me-2" placeholder="Search" disabled>
                <button type="button" class="btn btn-primary" id="btn" disabled>Search</button>
            </form>

            <div class="user-profile d-flex align-items-center">
                <div class="dropdown" style="margin-left: 30px;">
                    <button class="btn text-dark fw-bold dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; border: none; background: none;">
                        {{ Auth::user()->name }}
                        @if(Auth::user()->profile_image)
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                                alt="Profile" class="rounded-circle ms-2" width="40" height="40">
                        @else
                            <span class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center ms-2"
                                style="width: 40px; height: 40px; font-size: 18px; font-weight: bold;">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                        @endif
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('orders.user') }}">View Order</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="padding-top: 120px;">
        <div class="card shadow-sm p-4">
            <h2 class="text-center text-primary mb-4"><i class="bi bi-list-check"></i> View Order</h2>

            @if($orders->isEmpty())
                <div class="alert alert-info text-center">
                    You have not placed any orders yet.
                </div>
            @else
                <div class="accordion" id="ordersAccordion">
                    @foreach($orders as $index => $order)
                        @php
                            $orderItems = is_string($order->items) ? json_decode($order->items, true) : $order->items;
                        @endphp
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="heading-{{ $order->id }}">
                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $order->id }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $order->id }}">
                                    <div class="w-100 d-flex justify-content-between">
                                        <span><strong>Order Date:</strong> {{ \Carbon\Carbon::parse($order->order_date)->format('d M Y') }}</span>
                                        <span><strong>Total:</strong> ₹{{ number_format($order->total_price, 2) }}</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse-{{ $order->id }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading-{{ $order->id }}" data-bs-parent="#ordersAccordion">
                                <div class="accordion-body">
                                    <p><strong>Name:</strong> {{ $order->name }}</p>
                                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                                    <p><strong>Delivery Address:</strong> {{ $order->address }}</p>

                                    @if(!empty($orderItems))
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered text-center">
                                                <thead class="table-secondary">
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orderItems as $item)
                                                        @php
                                                            $price = $item['price'] ?? 0;
                                                            $quantity = $item['quantity'] ?? 0;
                                                        @endphp
                                                        <tr>
                                                            <td>{{ $item['name'] ?? 'Item' }}</td>
                                                            <td>₹{{ number_format($price, 2) }}</td>
                                                            <td>{{ $quantity }}</td>
                                                            <td>₹{{ number_format($price * $quantity, 2) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted fst-italic">No order item details available.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="text-center mt-4">
                <a href="{{ url('/menu') }}" class="btn btn-success">
                    <i class="bi bi-arrow-repeat"></i> Order Again
                </a>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="f-content text-center">
            <div class="f-logo"><img src="{{ asset('images/logo.png') }}" alt=""></div>
            <div class="foot">
                <p>Fresh food brings out the natural flavors and nutrients in every bite. Fresh food is packed with essential nutrients, providing our bodies with the energy we need to thrive.</p>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-youtube"></i>
                <br><br>
                <div class="c-content">
                    &copy; Copyright SA Coding. All Rights Reserved <br>
                    <span>Designed By <a href="#">SA Coding</a></span><br><br>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <a href="#" class="arrow"><i><img src="{{ asset('images/up-arrow.png') }}" alt="" width="54px"></i></a>
</body>
</html>

