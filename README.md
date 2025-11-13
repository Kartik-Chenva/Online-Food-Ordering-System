<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

<h3>🍕 Online Food Ordering System (Laravel Project) :</h3>
<p>
  A full-featured online food ordering web application built using <b>Laravel</b>.  
  Customers can browse restaurants, view menus, add food items to the cart, and place orders easily.  
  Admins can manage restaurants, menu items, and customer orders through a secure and user-friendly dashboard.
</p>

<h4>✨ Main Features (Updated) :</h4>
<ul>
  <li>👤 <b>User Authentication</b> – Secure user registration, login, and logout with validation and session handling.</li>
  <li>🍽️ <b>Fast Food Menu</b> – Browse all available restaurants and their delicious fast food items.</li>
  <li>🛒 <b>Cart Management</b> – Add, remove, and update food items easily within the shopping cart.</li>
  <li>💳 <b>Order Placement</b> – Place online orders with real-time total price calculation and order summary view.</li>
  <li>📦 <b>Order View</b> – Track placed orders, check order history, and view live order status updates.</li>
  <li>⚙️ <b>Admin Panel</b> – Manage restaurants, menu items, customer orders, and users from a secure admin dashboard.</li>
</ul>

<h4>🛠️ Technologies Used :</h4>
<ul>
  <li><b>Framework:</b> Laravel 11 (PHP 8+)</li>
  <li><b>Frontend:</b> HTML, CSS, Bootstrap, JavaScript</li>
  <li><b>Database:</b> MySQL</li>
  <li><b>Server:</b> Artisan Local Server / XAMPP</li>
</ul>

<h4>🚀 How to Run the Project :</h4>
<ol>
  <li><b>Clone the repository:</b><br>
    <code>git clone https://github.com/Kartik-Chenva/Online-Food-Ordering-System.git</code>
  </li>
  <li><b>Go to the project folder:</b><br>
    <code>cd Online-Food-Ordering-System</code>
  </li>
  <li><b>Install dependencies:</b><br>
    <code>composer install</code>
  </li>
  <li><b>Copy environment file:</b><br>
    <code>cp .env.example .env</code> (or on Windows: <code>copy .env.example .env</code>)
  </li>
  <li><b>Generate application key:</b><br>
    <code>php artisan key:generate</code>
  </li>
  <li><b>Set up database:</b><br>
    Edit the <code>.env</code> file and update your MySQL credentials.
  </li>
  <li><b>Run migrations:</b><br>
    <code>php artisan migrate</code>
  </li>
  <li><b>Start development server:</b><br>
    <code>php artisan serve</code>
  </li>
  <li><b>Open your browser:</b><br>
    Visit → <a href="http://127.0.0.1:8000/" target="_blank">http://127.0.0.1:8000/</a>
  </li>
</ol>

<h4>🔐 User Login :</h4>
<ul>
  <li><b>Email:</b> user@example.com</li>
  <li><b>Password:</b> user@123</li>
</ul>

<h4>🛡️ Admin Login :</h4>
<ul>
  <li><b>Email:</b> kartikravat26@gmail.com</li>
  <li><b>Password:</b> Kartik@123</li>
</ul>

<h4>🎨 UI Design (Custom CSS Preview):</h4>
<p>
  The project features a <b>modern responsive UI</b> built with Bootstrap and custom CSS.  
  Main sections include restaurant listings, menu grids, dynamic shopping cart, and a clean admin dashboard.  
  Every component adjusts beautifully across devices — mobile, tablet, and desktop.
</p>

<h4>📂 Folder Structure Overview:</h4>
<pre>
Online-Food-Ordering-System/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── Providers/
│
├── resources/
│   ├── views/
│   │   ├── home.blade.php
│   │   ├── menu.blade.php
│   │   ├── cart.blade.php
│   │   └── order.blade.php
│   └── css/
│       └── style.css
│
├── routes/
│   └── web.php
│
├── database/
│   └── migrations/
│
├── public/
│   ├── images/
│   ├── css/
│   └── js/
│
├── .env.example
├── composer.json
├── package.json
├── artisan
└── README.md
</pre>

<h4>💬 Feedback & Contributions :</h4>
<p>
  Contributions, ideas, and feedback are always welcome!  
  Feel free to fork this repository, enhance it, and open a pull request.  
  Some potential future improvements include:
</p>
<ul>
  <li>💳 Payment Gateway Integration (Razorpay / Stripe)</li>
  <li>📱 Progressive Web App (PWA) Version</li>
  <li>🚴 Real-time Order Tracking</li>
  <li>⭐ Customer Ratings & Restaurant Reviews</li>
</ul>

<p>
  Found a bug? Open an issue →  
  <a href="https://github.com/Kartik-Chenva/Online-Food-Ordering-System/issues" target="_blank">
    GitHub Issues Page
  </a>
</p>
