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
        <style></style>

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
                        <h2 class="section--title">Registration Overview</h2>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard">Dashboard</a>
                            <i class='bx bx-chevron-right'></i>
                            <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                        </li>
                    </ul>
                    <span class="icon icon-register" style="margin-top:-20px;"><i class='bx bxs-user-plus'></i><h5>Update Registration Data</h5></span><br>
                </div>
               <div class="wrapper">
                 <h2>Registration</h2>
                
                   <form action="/edit_registration" method="get">
                         @csrf
                         <!-- Hidden field for ID if needed -->
                         <input type="hidden" name="id" value="{{$info['id']}}"/><br>
                         
                    
                         <div class="input-box">
                           <input type="text" name="name" value="{{$info['name']}}" required>
                         </div>
                         <div class="input-box">
                           <input type="email" name="email" value="{{$info['email']}}" required>
                         </div>
                         <div class="input-box">
                           <input type="password" name="password" value="{{$info['password']}}" required>
                         </div>
                    
                         <div class="policy">
                           <input type="checkbox" required>
                           <h3>I accept all terms & conditions</h3>
                         </div>
                         <div class="input-box button">
                           <input type="submit"  value="Update"/>
                         </div>
                         <div class="text">
                           <h3>Already have an account? <a href="login">Login now</a></h3>
                           <h3><a href="index">Go home</a></h3>
                         </div>
                   </form>
               </div>
            </div>
            </main>
        </x-app-layout>
        </body>
    </html>
    
