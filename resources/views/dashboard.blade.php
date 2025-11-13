<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cd  n.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('CSS/admin.css')}}" />  
        
        <title>Dashboard</title>
        <style>
            .adm {
    display: flex;
    justify-content: center;
    margin-top:40px;
    margin-right:40px;
    align-items: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.btn-success {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 500;
    color: white;
    background: #28a745;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.2s ease-in-out;
}

.btn-success:hover {
    background: #218838;
}

.btn-success:active {
    background: #1e7e34;
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
    <body>
        <x-app-layout>
            <x-slot name="header">
            
        </x-slot>
        @if(session('login_success'))
            <script>
                alert("✅ {{ session('login_success') }}");
            </script>
        @endif
                
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
                            <span class="icon icon-4"><i class="fa fa-sign-out-alt"></i></span>
                            <span class="sidebar--item">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
                <div class="main--content">
                    <div class="overview" >
                        <div class="title">
                            <h2 class="section--title">User Overview</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="dashboard">Dashboard</a>
                                <i class='bx bx-chevron-right'></i>
                                <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                            </li>
                        </ul>
                        <span class="icon icon-register"><i class='bx bxs-user-plus'></i><h5>Admin Data</h5></span>
                    </div>
                    <div class="adm">
                        <button type="submit" class="btn btn-success"><a href="add_admin">Create Admin</a></button>
                    </div>


                </div>
        </main>
        </x-app-layout>
        </body>
    </html>