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
        .main--content form {
            margin-left: 23%;
        }
        .main--content form {
            background-color: #222121;
            border-radius: 50px 6px 50px 6px;
            margin-right: 26%;
        }
    </style>
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
</head>
<script src="{{asset('JS/all.js')}}"></script>

<body>
<header class="header">
    <div class="logo">
        <i class="ri-menu-line icon icon-0 menu" aria-label="Toggle menu"></i>
        <h2>Frash<span>Food</span></h2>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search..." aria-label="Search">
        <button type="submit" aria-label="Search">
            <i class="ri-search-line"></i>
        </button>
    </div>
</header>

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
                    <span class="icon icon-4"><i class="fa fa-sign-out-alt"></i></span> <!-- Logout icon -->
                    <span class="sidebar--item">Logout</span>
                </a>
            </li>
        </ul>
    </nav>


           <div class="main--content">
                <div class="overview" >
                    <div class="title">
                        <h2 class="section--title">Login Overview</h2>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard">Dashboard</a>
                            <i class='bx bx-chevron-right'></i>
                            <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                        </li>
                    </ul>
                    <span class="icon icon-register"><i class='bx bxs-user-plus'></i><h5>Update Login Data</h5></span>
                </div>
                <form action="/edit_login" method="get">
                     @csrf
                     <!-- Hidden field for ID if needed -->
                     <input type="hidden" name="id" value="{{$info['cust_id']}}"/><br>
                           <div class="pen">
                               <center>
                                       <h3>Sign in</h3>
                               </center>
                                   <label> Email Id: </label>
                                   <input type="text" id="txtUser" name="email" value="{{$info['email']}}" required><br>
                                   <label> Password: </label>
                                   <input type="password" id="txtPass" name="password" value="{{$info['password']}}" required><br>

                                       <div class="Rem">
                                           <input type="checkbox" required>
                                           <label>Remember me</label> 
                                     </div>

                                     <div class="bto">
                                     <input type="submit"  value="Update"/>
                                   </div>

                                   <div class="Register">
                                        <p>Don't have to account?
                                            <i class='bx bx-chevron-right'></i>
                                            <a href="review">Home, </a>
                                            <!-- <a href="dashboard">Admin</a> -->
                                        </p>
                                   </div>

                                </div>
                </form>
            </div>
            </main>
        </body>
    </html>
    
