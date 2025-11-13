<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- STYLE CSS LINK -->
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/all.min.css')}}" />

    <!-- STYLE CSS LINK -->

    <!-- BOOTSTRAP CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/  	dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN LINK -->

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- FONT AWESOME CDN -->

    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- GOOGLE FONTS LINK -->
    <style>
            
            *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            scroll-behavior: smooth;
            /* font-family: 'Josefin Sans', sans-serif; */
        }

        html::-webkit-scrollbar-track{
            background: transparent;
        }

        html::-webkit-scrollbar-thumb{
            background: #e53937;
            border-radius: 10px;
        }

        html::-webkit-scrollbar{
            width: 10px;
        }

        /* Navbar Styling */
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

        /* Logo Styling */
        #logo img {
            width: 190px;
            margin-top: 3px;
            margin-left: -30px;
            transition: 0.3s ease;
        }

        /* Hover effect on logo */
        #logo img:hover {
            transform: scale(1.1);
        }
        
        /* Navbar links */
        .nav-item .nav-link {
            color: black;
            font-size: 16px;
            font-weight: 550;
            text-transform: uppercase;
            padding: 5px 15px;
            transition: 0.3s;
        }

        /* Hover effect for nav links */
        .nav-item .nav-link:hover {
            color: #e53937;
            border-bottom: 3px solid #e53937;
            padding-bottom: 5px;
        }

        /* Search input box */
        #navbar input {
            border-radius: 50px;
            border: 2px solid #bdc3c7;
            padding-left: 15px;
            margin-left:30px;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease-in-out;
        }

        /* Search input focus */
        #navbar input:focus {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            border-color: #e53937;
            outline: none;
            /* margin-left:20px; */

            
        }
        /* Search button styling */
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
        .register button a{
            text-decoration: none;
            color: rgb(6, 97, 67);
            text-decoration: none;
            font-weight: bold;
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
            border-radius: 10px;
            border: 2px rgb(6, 97, 67);
            border-radius: 15px;
        }
        .register button:hover{
            background:rgb(6, 97, 67);
            color:#fff;
            border: none;
            border: 2px rgb(6, 97, 67);
        }
        .register button a:hover{
            color:#fff;
        }

        /* Hover effect on search button */
        #btn:hover {
            background: #e53937;
            color: white;
            border: 1px solid transparent;
        }

        /* Navbar Mobile Styling */
        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-color: black;
        }

        /* Smooth transition when scrolling */
        #navbar.scrolled {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

    /* Footer Start */
    #footer{
      padding: 5px 5px;
      margin-top: 60px;
    }
    #footer .f-content{
      text-align: center;
    }
    .f-logo img {
      width: 250px;
      margin-bottom: 10px;
      margin-top: 3px;
      cursor: pointer;
      transition: 0.3s ease;
    }
    /* Hover effect on logo */
    .f-logo img:hover {
      transform: scale(1.1);
    }
    .f-content i{
      font-size: 18px;
      color: black;
      padding: 10px;
      transition: 0.5s;
      cursor: pointer;
    }
    .f-content i:hover{
      background: #e53937;
      color: white;
      border-radius: 5px;
    }
    .c-content{
      text-align: center;
    }
    .c-content span a{
      text-decoration: none;
      color: #e53937;
    
    }
    #footer .f-content .foot{
      background-color: #C7BEBE;
      padding-top: 20px;
    
    }
    /* Footer End */
    
    /* Apply rotation animation to the image */
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

<!-- Navbar Start -->
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
    
    <form class="d-flex" onsubmit="return handleSearch()">
      <input type="text" id="searchQuery" style="margin-top: 5px;" class="form-control me-2" placeholder="Search" required>
      <button type="submit" class="btn btn-primary" id="btn">Search</button>
    </form>
    
    @guest
    <div class="register">
        <button>
            <a href="{{ url('/register') }}"  title="Click to register">Register</a>
        </button>
    </div>
@else
<!-- User Profile Dropdown -->
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

<!-- Search Functionality -->
<script>
    function handleSearch() {
        var query = document.getElementById("searchQuery").value.toLowerCase().trim();

        // Define routes for specific queries
        var pageRoutes = {
            "home": "{{ url('/') }}",
            "menu": "{{ url('/menu') }}",
            "reviews": "{{ url('/review') }}",
            "contact": "{{ url('/contact') }}",
            "register": "{{ url('/register') }}",
            "login": "{{ url('/login') }}"
        };

        // If the query matches a predefined route, navigate to that page
        if (pageRoutes[query]) {
            window.location.href = pageRoutes[query];
            return false;
        }

        // Menu Filtering (for menu items)
        var items = document.querySelectorAll(".menu .col-md-4");
        var found = false;

        items.forEach(function (item) {
            var itemName = item.querySelector("h1").innerText.toLowerCase();
            if (itemName.includes(query)) {
                item.style.display = "block"; // Show matching items
                found = true;
            } else {
                item.style.display = "none"; // Hide non-matching items
            }
        });

        if (!found) {
            alert("No matching food found!");
        }

        return false; // Prevents default form submission
    }
</script>
    </div>
@endguest

  </div>
</nav>


<div class="container mt-5" style="padding-top: 50px;">
    <div class="card shadow p-4">
        <h2 class="text-center text-primary">Order Confirmation</h2>

        @if(empty($items))
            <div class="alert alert-warning text-center">No items in your cart!</div>
        @else
        <form action="{{ route('order.orders_data') }}" method="POST">
    
                @csrf

                <!-- User Details Form -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Full Name:</label>
                    <input type="text" name="name" id="name" class="form-control" 
                           value="{{ Auth::check() ? Auth::user()->name : '' }}" required>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label fw-bold">Phone Number:</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                         <label for="order_date" class="form-label fw-bold">Order Date:</label>
                         <input type="date" name="order_date" id="order_date" 
                                class="form-control" 
                                value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label fw-bold">Delivery Address:</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>

                <!-- Order Summary Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
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
                                    <td><img src="{{ asset($item['image']) }}" name="image" width="50" alt="Product Image" class="rounded"></td>
                                    <td>{{ $item['name'] ?? 'N/A' }}</td>
                                    <td>₹{{ $item['price'] ?? 0 }}</td>
                                    <td>{{ $item['quantity'] ?? 0 }}</td>
                                    <td class="fw-bold text-success">₹{{ $total }}</td>
                                </tr>
                                <input type="hidden" name="items[{{ $id }}][name]" value="{{ $item['name'] }}">
                                <input type="hidden" name="items[{{ $id }}][price]" value="{{ $item['price'] }}">
                                <input type="hidden" name="items[{{ $id }}][quantity]" value="{{ $item['quantity'] }}">
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-warning">
                                <th colspan="4" class="text-end fw-bold">Grand Total:</th>
                                <th class="fw-bold fs-5 text-danger">₹{{ $grandTotal }} <input type="hidden" name="total_price" value="{{ $grandTotal }}"/></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="text-center mt-4">
                    <button class="normal-confirm-btn" type="Submit" onclick="validateAndConfirmOrder()">
                        <i class="bi bi-cart-check"></i> ➜ Confirm Order
                    </button>
                </div>

<!-- 
@if(session('confirmed_order'))
    <div class="mt-5 p-4 rounded shadow-sm border border-success bg-light">
        <div class="text-center mb-4">
            <h3 class="text-success fw-bold">
                <i class="bi bi-check-circle-fill me-2"></i>Order Successfully Placed!
            </h3>
            <p class="text-muted fst-italic">Thank you for ordering with us. Here's your order summary:</p>
        </div>

        <div class="mb-4">
            <h5 class="text-primary fw-bold">👤 Customer Details</h5>
            <div class="row">
                <div class="col-md-6"><strong>Name:</strong> {{ session('confirmed_order')['name'] }}</div>
                <div class="col-md-6"><strong>Phone:</strong> {{ session('confirmed_order')['phone'] }}</div>
                <div class="col-md-6 mt-2"><strong>Order Date:</strong> {{ session('confirmed_order')['order_date'] }}</div>
                <div class="col-md-6 mt-2"><strong>Address:</strong> {{ session('confirmed_order')['address'] }}</div>
            </div>
        </div>

        <div>
            <h5 class="text-primary fw-bold mb-3">🛒 Order Summary</h5>
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-success">
                        <tr>
                            <th>Item</th>
                            <th>Price (₹)</th>
                            <th>Quantity</th>
                            <th>Total (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach(session('confirmed_order')['items'] as $item)
                            @php
                                $itemTotal = $item['price'] * $item['quantity'];
                                $total += $itemTotal;
                            @endphp
                            <tr>
                                <td class="fw-semibold">{{ $item['name'] }}</td>
                                <td>{{ number_format($item['price'], 2) }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td class="text-success fw-bold">{{ number_format($itemTotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="table-warning">
                            <th colspan="3" class="text-end fs-5">Grand Total:</th>
                            <th class="fs-5 text-danger fw-bold">₹{{ number_format($total, 2) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        <div class="text-center mt-4 d-flex justify-content-center gap-3">
    <form action="{{ route('order.edit1') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-warning btn-lg px-4">
            <i class="bi bi-pencil-square me-1"></i> Edit Order
        </button>
    </form>

    <a href="{{ url('index') }}" class="btn btn-outline-success btn-lg px-4">
        <i class="bi bi-house-door-fill me-1"></i> Back to Home
    </a>
</div>

    </div>
@endif



 -->

                <style>
                    .normal-confirm-btn {
                        background: linear-gradient(135deg, #28a745, #218838);
                        border: none;
                        color: white;
                        padding: 10px 20px;
                        font-size: 16px;
                        font-weight: 500;
                        border-radius: 30px;
                        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                
                    .normal-confirm-btn i {
                        margin-right: 6px;
                    }
                
                    .normal-confirm-btn:hover {
                        background: linear-gradient(135deg, #218838, #1e7e34);
                        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
                        transform: translateY(-1px) scale(1.01);
                    }
                
                    .normal-confirm-btn:active {
                        transform: scale(0.98);
                        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
                    }
                </style>

                <script>
                    function validateAndConfirmOrder() {
                        const name = document.getElementById("name").value.trim();
                        const phone = document.getElementById("phone").value.trim();
                        const date = document.getElementById("order_date").value.trim();
                        const address = document.getElementById("address").value.trim();
                    
                        if (!name || !phone || !date || !address) {
                            alert("⚠️ Please fill in all the fields.");
                            return;
                        }
                    
                        // All fields filled – show popup
                        const popup = document.createElement("div");
                        popup.innerText = "✅ Your order has been confirmed!";
                        popup.style.position = "fixed";
                        popup.style.top = "20%";
                        popup.style.left = "50%";
                        popup.style.transform = "translate(-50%, -50%)";
                        popup.style.backgroundColor = "#28a745";
                        popup.style.color = "#fff";
                        popup.style.padding = "20px 30px";
                        popup.style.borderRadius = "10px";
                        popup.style.boxShadow = "0 4px 12px rgba(0,0,0,0.3)";
                        popup.style.fontSize = "18px";
                        popup.style.zIndex = "9999";
                        popup.style.textAlign = "center";
                        popup.style.opacity = "0";
                        popup.style.transition = "opacity 0.3s ease";
                    
                        document.body.appendChild(popup);
                    
                        setTimeout(() => {
                            popup.style.opacity = "1";
                        }, 10);
                    
                        setTimeout(() => {
                            popup.style.opacity = "0";
                            setTimeout(() => {
                                document.body.removeChild(popup);
                            }, 300);
                        }, 2500);
                    }
                </script>


            </form>
        @endif
    </div>
</div> 

<!-- Footer Start -->
<footer id="footer">
            <div class="f-content">
                <div class="f-logo"><img src="{{asset('images/logo.png')}}" alt=""></div>
                <div class="foot">
                  <p>Fresh food brings out the natural flavors and nutrients in every bite. When you choose fresh, <br>
                  Fresh food is packed with essential nutrients, providing our bodies with the energy we need to thrive <br>
                  you’re opting for quality ingredients that support your health. Fresh produce from local sources is always the best way to nourish your body.</p>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <br><br>
                    <div class="c-content">
                        &copy; Copyright SA Coding. All Rights Reserved <br>
                        <span>Designed By <a href="#">SA Coding</a></span><br><br>
                    </div>
                </div>
            </div>
        </footer>
<!-- Footer End -->

    <!-- BOOTSTRAP CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP CDN LINK -->

    <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="54px"></i></a>

</body>
</html>
