<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

<div class="container mt-4" style="padding-top: 70px;">
    <div class="card shadow p-4">
        <h3 class="text-center text-primary mb-3"><i class="bi bi-cart"></i> Shopping Cart</h3>

        @if(session('success'))
            <div class="alert alert-success text-center py-2">{{ session('success') }}</div>
        @endif

        @if(session('cart') && count(session('cart')) > 0)
            <form action="{{ route('order.create') }}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session('cart') as $id => $item)
                            <tr>
                                
                                <td>
                                    <img src="{{ asset($item['image']) }}" width="45" alt="Product Image" class="rounded">
                                </td>
                                <td>{{ $item['name'] }}</td>
                                <td>₹{{ $item['price'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <input type="hidden" name="items[{{ $id }}][name]" value="{{ $item['name'] }}">
                            <input type="hidden" name="items[{{ $id }}][price]" value="{{ $item['price'] }}">
                            <input type="hidden" name="items[{{ $id }}][quantity]" value="{{ $item['quantity'] }}">
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('order.create') }}" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Order Now
                    </a>
                </div>
            </form>

            <!-- Remove All Items from Cart -->
            <div class="text-center mt-3">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-x-circle"></i> Clear Cart
                    </button>
                </form>
            </div>

        @else
            <div class="alert alert-warning text-center py-2">Your cart is empty. Start adding items!</div>
        @endif
    </div>

    <div class="text-center mt-3">
        <a href="menu" class="btn btn-success">
            <i class="bi bi-arrow-left"></i> Continue Shopping
        </a>
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
