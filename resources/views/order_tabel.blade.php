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
        <style>table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 12px; /* Smaller font size */
}

th, td {
    padding: 6px; /* Reduce padding for a compact design */
    text-align: center;
    border: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
    color: white;
    padding: 4px 8px;
    border-radius: 3px;
    font-size: 11px; /* Smaller buttons */
}

a:hover {
    opacity: 0.8;
}
/* General Button Styling */
td a {
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
td a[href^="delete_order"] {
    background-color: #dc3545;
    border: 1px solid #c82333;
}

td a[href^="delete_order"]:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 6px rgba(220, 53, 69, 0.3);
}

/* Edit Button - Business Green */
td a[href^="edit_order"] {
    background-color: #28a745;
    border: 1px solid #218838;
}

td a[href^="edit_order"]:hover {
    background-color: #218838;
    box-shadow: 0px 4px 6px rgba(40, 167, 69, 0.3);
}

/* Click Effect */
td a:active {
    transform: scale(0.98);
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
                <div class="main_mrg">
                    <div class="overview" >
                        <div class="title">
                            <h2 class="section--title">Order Overview</h2>
                        </div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="dashboard">Dashboard</a>
                                <i class='bx bx-chevron-right'></i>
                                <a href="index" class="active" style=" color: #5073fb;">Home</a><br>
                            </li>
                        </ul>
                        <span class="icon icon-register"><i class='bx bxs-user-plus'></i><h5>Order Data</h5></span>
                    </div>
                    <div class="search mb-3">
                        <form action="{{ route('search_order') }}" method="get" class="d-flex">
                            <input type="text" name="order_date" class="form-control me-2" placeholder="(YYYY-MM-DD)">
                            <button type="submit" class="btn btn-primary">Go</button>
                        </form>
                    </div>


                        <table border="1">
                            <tr>
                                <th>Cust_id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Order Date</th>        
                                <th>Address</th>
                                <th>total_price</th>
                                <th>items</th>
                                <th>Delete</th>
                                <!-- <th>Edit</th> -->
                                <th>Delivery</th>
                            </tr>
                            @foreach($orders as $i)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $i->name }}</td>
                                <td>{{ $i->phone }}</td>
                                <td>{{ $i->order_date }}</td>
                                <td>{{ $i->address }}</td>
                                <td>{{ $i->total_price }}</td>
                                <td>{{ $i->items }}</td>
                                <td>
                                    <a href="delete_order/{{$i['id']}}" onclick="return confirm('Are you sure you want to delete this registration?')">Delete</a>
                                </td>
                                <!-- <td><a href="edit_order/{{$i['id']}}" onclick="return confirm('Are you sure you want to Edit this registration?')">Edit</td> -->
                                <td>
                                    <select name="delivery_status" class="delivery-status" data-id="{{ $i->id }}">
                                        <option value="confirmed">Confirmed</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </td>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const deliveryStatusElement = document.querySelector('.delivery-status');

                            // Check if the server has selected a delivery status (if it's set by Laravel)
                            const defaultStatus = '{{ $i->delivery_status ?? "" }}'; // Using server-side value

                            if (defaultStatus) {
                                // If a delivery status exists from the server, set it as selected
                                const defaultOption = deliveryStatusElement.querySelector(`option[value="${defaultStatus}"]`);
                                if (defaultOption) {
                                    defaultOption.selected = true;
                                }
                            } else {
                                // If no default value from server, randomly select an option
                                const options = deliveryStatusElement.querySelectorAll('option');
                                const randomIndex = Math.floor(Math.random() * options.length); // Randomly select
                                options[randomIndex].selected = true;
                            }
                        
                            // Event listener for change (to update the status via AJAX without page reload)
                            deliveryStatusElement.addEventListener('change', function() {
                                const status = this.value;
                                const id = this.getAttribute('data-id');
                            
                                // Send updated status to the server without page reload (AJAX)
                                fetch('/update-delivery-status', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token for Laravel security
                                    },
                                    body: JSON.stringify({ id, status })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        console.log('Status updated!');
                                    } else {
                                        console.error('Error:', data.message);
                                    }
                                })
                                .catch(console.error);
                            });
                        });
                    </script>

                            </tr>
                            @endforeach

                        </table>
                    <div class="pagination">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
            </main>
        </x-app-layout>
        </body>
    </html>

<style>
    table{
        margin-left:-60px;
    }
    .delivery-status {
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #f4f4f4;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    select.delivery-status option[value="pending"] {
    background-color: #fff3cd;
    color: #856404;
}

select.delivery-status option[value="confirmed"] {
    background-color: #d4edda;
    color: #155724;
}

/* Hide default select arrow for most browsers */
select.delivery-status {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    background-color: #fff;
    /* Optional: add custom icon or leave blank */
}

/* Remove IE/Edge default arrow */
select.delivery-status::-ms-expand {
    display: none;
}

.delivery-status-label {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f4f4f4;
}

</style>

