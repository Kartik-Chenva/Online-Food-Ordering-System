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

        
        <title>Contact_tabel</title>
        <style>
 .delete-link {
    display: inline-block;
    padding: 5px 11px;
    font-size: 12px;
    font-weight: 600;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    text-align: center;
}

/* Delete Button - Professional Red */
.delete-link{
    background-color: #dc3545;
    border: 1px solid #c82333;
}

.delete-link:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 6px rgba(220, 53, 69, 0.3);
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
    <!-- <i class="ri-menu-line icon icon-0 menu" aria-label="Toggle menu"></i> -->
            <x-slot name="header">

            
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
                <span class="icon icon-4"><i class="fa fa-sign-out-alt"></i></span>
                <span class="sidebar--item">Logout</span>
            </a>
        </li>
    </ul>
</nav>

            <div class="main--content">
                <div class="main_mrg">
                    <div class="overview" >
                        <div class="title">
                            <h2 class="section--title">Contact Overview</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="dashboard">Dashboard</a>
                                <i class='bx bx-chevron-right'></i>
                                <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                            </li>
                        </ul>
                        <span class="icon icon-register"><i class='bx bxs-user-plus'></i><h5>Contact Data</h5></span>
                    </div>
                    <div class="search">
                        <form action="search_contact" method="get">
                            @csrf
                            <input type="text" name="email" placeholder="Enter the email : " />
                            <input type="submit" value="Go" id="btn"/>
                        </form>
                    </div>
                    <table border="1">
                         <tr>
                             <th>Cust id</th>
                             <th>Full Name</th>
                             <th>Email</th>
                             <th>Your number</th>
                             <th>Message</th>
                             <th>Delete</th>
                         </tr>
                         @foreach($info as $i)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $i['fullname'] }}</td>
                             <td>{{ $i['email'] }}</td>
                             <td>{{ $i['yournumber'] }}</td>
                             <td>{{ $i['message'] }}</td>
                             <td>
                                 <!-- Corrected delete link -->
                                 <a class="delete-link"  href="{{url('delete_contact/'.$i['cust_id']) }}" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
                             </td>
                             <!-- <td><a href="edit_login/{{$i['cust_id']}}">Edit</a></td> -->
                         </tr>
                         @endforeach
                    </table>
                    <div class="pagination">
                        {{ $info->links() }}
                    </div>
                </div>
            </div>
            </main>
        </x-app-layout>
        </body>
    </html>