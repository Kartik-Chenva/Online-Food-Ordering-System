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
                    <form method="get" action="/edit_review">
                        @csrf
                        <input type="hidden" name="id" value="{{$info['cust_id']}}"/><br>
                        <fieldset>
                            <legend>Submit Your Review</legend>

                            <label for="rating">Rating:</label>
                            <select id="rating" name="rating" required>
                                <option value="">Select a rating</option>
                                <option value="5 star" @if($info['rating'] == '5 star') selected @endif>5 stars</option>
                                <option value="4 star" @if($info['rating'] == '4 star') selected @endif>4 stars</option>
                                <option value="3 star" @if($info['rating'] == '3 star') selected @endif>3 stars</option>
                                <option value="2 star" @if($info['rating'] == '2 star') selected @endif>2 stars</option>
                                <option value="1 star" @if($info['rating'] == '1 star') selected @endif>1 star</option>
                            </select>

                            <label for="reviewtext">Review:</label>
                            <textarea id="reviewtext" name="reviewtext" rows="5" required>{{$info['reviewtext']}}</textarea>

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" value="{{$info['name']}}" required><br>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{$info['email']}}" required><br>

                            <input type="submit" class="inp" value="Update"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            </main>
        </x-app-layout>
        </body>
    </html>
    
