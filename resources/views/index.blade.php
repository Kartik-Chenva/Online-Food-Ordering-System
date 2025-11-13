<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website Design</title>

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
            margin-left:150px;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease-in-out;
        }
        /* Search input focus */
        #navbar input{
          margin-left:;
        }
        #navbar input:focus {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            border-color: #e53937;
            outline: none;           
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
            margin-left: 60%;
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


        /* Home Section Start */
        .home{
            width: 100%;
            height: 100vh;
            padding: 5px 11% 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 0;
        }
        .home .img1{
            flex: 1 1 300px;
        }
        .home .img1 img{
            width: 100%;
            margin-left: 60px;
            margin-top: 110px;
        }
        .home-content{
            flex: 1 1 400px;
            margin-top: 30px;
        }
        .home-content h3{
            font-size: 40px;
            font-weight: 700;
        }
        .home-content h3 span{
            color: #e53937;
        }
        #home-btn{
            padding: 10px;
            text-decoration: none;
            background: #e53937;
            color: white;
            border-radius: 5px;
        }
        @media screen and (max-width:873px){
            .home .img1 img{
                margin-left: 0px;
            }
        }
        /* Home Section End */

/* Top Section Styles */ 
.top-section {
    padding: 10px 11% 100px; /* Adds padding to top, left-right, and bottom */
    background-color: #f8f8f8; /* Light background color for the entire section */
    border-radius: 10px; /* Rounded corners for the top section */
}

.top-section h5 {
    color: #e53937; /* Red color for the subheading */
    text-align: center; /* Center-aligns the text */
    font-size: 18px; /* Sets font size for the subheading */
    margin-bottom: 15px; /* Adds spacing below the heading */
}

.top-section h3 {
    color: #333; /* Dark gray color for the main heading */
    text-align: center; /* Centers the main heading */
    font-weight: 600; /* Sets font weight to bold */
    font-size: 32px; /* Increases font size for emphasis */
    margin-bottom: 30px; /* Adds spacing below the heading */
}

.top-section .row {
    margin-top: 30px; /* Adds space above the row */
    display: flex; /* Makes the row a flex container */
    justify-content: space-between; /* Distributes the cards evenly */
    flex-wrap: wrap; /* Allows the cards to wrap on smaller screens */
}

.top-section .row .col-md-4 {
    padding: 0 15px; /* Adds padding to the sides of each card */
    margin-bottom: 30px; /* Adds space between cards */
    width: 100%; /* Ensures full-width on mobile */
    max-width: 25%; /* Ensures 4 items per row on larger screens */
}

.top-section .row .card {
    border: 2px solid #e0e0e0; /* Adds a border to each card */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow for depth */
    border-radius: 10px; /* Adds rounded corners to the cards */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition effect */
    background-color: #fff; /* White background color for each card */
}

.top-section .row .card:hover {
    transform: translateY(-5px); /* Lifts the card on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Increases the shadow on hover */
}

.top-section .row .card img {
    width: 100%; /* Ensures images fill the container */
    max-width: 200px; /* Limits max width of the image */
    margin: 0 auto; /* Centers the image horizontally */
    display: block; /* Ensures the image is a block element */
    object-fit: contain; /* Ensures the image retains its aspect ratio */
    border-radius: 8px; /* Optional: Rounds the image corners */
}

.top-section .card-body {
    text-align: center; /* Centers the card body text */
    padding: 20px; /* Adds padding inside the card body */
}

.top-section .card-body h1 {
    font-size: 24px; /* Sets font size for the heading */
    font-weight: 600; /* Sets font weight to bold */
    color: #333; /* Dark gray color for text */
    margin-bottom: 15px; /* Adds spacing below the heading */
}

.top-section .card-body p {
    font-size: 16px; /* Sets font size for the paragraph */
    color: #666; /* Lighter gray color for text */
    line-height: 1.6; /* Increases line height for readability */
    margin-top: 10px; /* Adds space above the paragraph */
}

/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    .top-section {
        padding: 10px 5% 60px; /* Reduces padding on smaller screens */
    }

    .top-section .row {
        flex-direction: column; /* Stacks the cards vertically */
        align-items: center; /* Centers the cards */
    }

    .top-section .row .col-md-4 {
        width: 100%; /* Makes each card take full width */
        margin-bottom: 20px; /* Adds space between stacked cards */
    }
}

@media (min-width: 768px) {
    .top-section .row .col-md-4 {
        width: 25%; /* Makes each card take up 1/4 of the row width on larger screens */
    }
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


/* User Profile Dropdown - Official Design */
.user-profile {
    position: relative;
}

/* Dropdown Toggle Button */
.user-profile .dropdown-toggle {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    background: #f8f9fa;
    border: 1px solid #ddd;
    padding: 8px 16px;
    border-radius: 6px;
    transition: all 0.3s ease-in-out;
}

.user-profile .dropdown-toggle:hover,
.user-profile .dropdown-toggle:focus {
    background: #e9ecef;
    border-color: #bbb;
    color: #000;
}

/* Dropdown Menu */
.user-profile .dropdown-menu {
    background: #ffffff;
    border-radius: 8px;
    border: 1px solid #ddd;
    min-width: 180px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.2s ease-in-out;
}

/* Dropdown Items */
.user-profile .dropdown-item {
    font-size: 14px;
    color: #333;
    padding: 10px 15px;
    transition: all 0.3s ease-in-out;
}

.user-profile .dropdown-item:hover {
    background: #f1f1f1;
    color: #000;
}

/* Logout Button */
.user-profile .dropdown-item.text-danger {
    color: #d9534f;
    font-weight: 600;
}

.user-profile .dropdown-item.text-danger:hover {
    color: #c9302c;
}

/* Dropdown Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-5px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



</style>
</head>
<script>
  // Add 'scrolled' class when user scrolls down
  window.onscroll = function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
</script>

<body>

@if(session('login_success'))
            <script>
                alert("✅ {{ session('login_success') }}");
            </script>
@endif
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
            <a href="{{ url('/register') }}" title="Click to register">Register</a>
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



<!-- Home Section Start -->
<section class="home" id="home">
  <div class="home-content">
    <h3>Claim Best Offer <br> On Fast <span>Food</span> & <span>Restaurant</span></h3>
    <p><b>"Indulge in the Best Deals on Delicious Fast Food & Gourmet Dining! 🥳"</b>

"Craving something amazing? Grab the best offers now and treat yourself to mouth-watering food from your favorite restaurants. Don’t miss out on the unbeatable deals – your tastebuds will thank you!"

</p><br>
    <a href="menu" id="home-btn">Our Menu</a>
  </div>
  <div class="img1">
    <img src="{{asset('images/image 46.png')}}"/>
  </div>
</section>
<!-- Home Section End -->

<!-- Top Section Start -->
<section>
    <div class="top-section">
      <h5>WHAT WE SERVE</h5>
      <h3>Your Favourite Food <br> Delivery Partner</h3>
      <div class="row">

        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/img1.png')}}" alt="">
            <div class="card-body">
            <h1>Easy To Order</h1>
            <p>You only need a few steps in ordering food</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/img2.png')}}" alt="">
            <div class="card-body">
            <h1>Fastest Delivery</h1>
            <p>Delivery that is always ontime even faster</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/img3.png')}}" alt="">
            <div class="card-body">
            <h1>Best Quality</h1>
            <p>Not only fast for us quality is also number one</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card" >
            <img src="{{asset('images/free.png')}}" alt="" style="margin-top:36px;">
            <div class="card-body" style="margin-top:35px;">
            <h1>Free Delivery</h1>
            <p>Enjoy free delivery on all orders! No extra charges.</p>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
<!-- Top Section End -->

<!-- Top Section Start -->
<section>
    <div class="top-section">
      <h5>WHAT WE SERVE</h5>
      <h3>Your Favourite Food <br> Delivery Partner</h3>
      <div class="row">

        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/all_food.jpg')}}" alt="" style="margin-top:36px;">
            <div class="card-body">
            <h1>Easy To Order</h1>
            <p>You only need a few steps in ordering food</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/images.jpg')}}" alt="" style="margin-top:36px; margin-bottom:30px;">
            <div class="card-body">
            <h1>Fastest Delivery</h1>
            <p>Delivery that is always ontime even faster</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="{{asset('images/burger_and.jpg')}}" alt="" style="margin-top:36px; margin-bottom:10px;">
            <div class="card-body">
            <h1>Best Quality</h1>
            <p>Not only fast for us quality is also number one</p>
          </div>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card" >
            <img src="{{asset('images/pizz1.jpg')}}" alt="" style="margin-top:35px;">
            <div class="card-body" style="margin-top:35px;">
            <h1>Free Delivery</h1>
            <p>Enjoy free delivery on all orders! No extra charges.</p>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
<!-- Top Section End -->


<!-- Top Section Start -->
<section>
    <div  style="padding: 12px; margin-top:50px;">
          <center>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="{{asset('images/review-img.png')}}" alt="" style="margin:30px 60px 30px 40px;">
                <div class="card-body">
                  <h1>Hey Order Now</h1>
                  <p>You only need a few steps in ordering food</p>
                </div>
              </div>
            </div>
          </center>
    </div>
</section>
<!-- Top Section End -->


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