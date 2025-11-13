<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\controller2;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

use Illuminate\Support\Facades\Auth;





Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/index',[HomeController::class,'index']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('dashboard', [adminController::class, 'index'])->name('dashboard');
Route::get('index', [userController::class, 'index'])->name('index');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Contoller File Connect for Control1.php and Control01.php
Route::get('control_ex',[control1::class,'display_msg']);


Route::view('/index','index');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Route (For Testing After Login)
Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure this view exists
})->name('dashboard')->middleware('auth');

Route::get('/registration_tabel',[controller2::class,'registration_tabel_data']);

Route::get('/delete_registration/{id}',[controller2::class,'delete_registration_data']);

Route::get('/edit_registration/{id}',[controller2::class,'edit_registration_data']);

Route::get('/edit_registration',[controller2::class,'update_registration_data']); 

Route::get('/search_registration',[controller2::class,'search_registration_name'])->name('search_registration'); 

// Route::get('/search_registration', [paginate_controller::class, 'paginate_register_search'])->name('search_registration');




Route::get('/login_tabel',[controller2::class,'login_tabel_data']);

Route::get('/delete_login/{id}',[controller2::class,'delete_login_data']);

Route::get('/edit_login/{id}',[controller2::class,'edit_login_data']);

Route::get('/edit_login',[controller2::class,'update_login_data']); 

Route::get('/search_login', [controller2::class, 'search_login_name'])->name('search_login');

// Route::get('/search_login', [paginate_controller::class, 'paginate_login_search'])->name('search_login');



// review with Contoller File review  and controller2.php
Route::view('/review','review');
Route::post('/review',[controller2::class,'review_data']);

Route::get('/review_tabel',[controller2::class,'review_tabel_data']);

Route::get('/delete_review/{id}',[controller2::class,'delete_review_data']);

Route::get('/edit_review/{id}',[controller2::class,'edit_review_data']);

Route::get('/edit_review',[controller2::class,'update_review_data']); 


Route::get('/search_review',[controller2::class,'search_review_name'])->name('search_review');; 



// Route to show the contact form
use App\Http\Controllers\ContactController;

Route::view('/contact', 'contact');
Route::post('/contact', [controller2::class, 'contact_data']);

Route::get('/contact_tabel', [controller2::class, 'contact_tabel_data']);

Route::get('/delete_contact/{id}', [controller2::class, 'delete_contact_data']);

Route::get('/search_contact',[controller2::class,'search_contact_name']); 



// Admin with 
Route::view('/admin','admin');

Route::view('/order','order');

Route::view('/menu','menu');




// Cart
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
// Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');


Route::view('/order_tabel', 'order_tabel'); 

Route::post('/order', [OrderController::class, 'processOrder'])->name('order.process');

Route::get('/order/create', [OrderController::class, 'create'])->name('order.create'); // Show order form

Route::post('/order/submit', [OrderController::class, 'orders_data'])->name('order.orders_data');
Route::match(['get', 'post'], '/order/submit', [OrderController::class, 'orders_data']);

Route::middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'userOrders'])->name('orders.user');
});




Route::get('/order_tabel', [OrderController::class, 'search']);

Route::get('/search_order',[OrderController::class,'search'])->name('search_order');; 

Route::get('/delete_order/{id}',[OrderController::class,'delete_order_data']);

// Route::delete('/delete_order/{id}', [OrderController::class, 'destroy'])->name('order.delete');


Route::get('/edit_order/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/edit_order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::get('/order_table', [OrderController::class, 'index'])->name('order.table');




// Route::post('/order/submit1', [OrderController::class, 'submit1'])->name('order.orders_data');
// Route::post('/order/edit1', [OrderController::class, 'edit1'])->name('order.edit1');
// Route::get('/edit_order',[controller2::class,'update_review_data']); 
// Route::get('/order_tabel', [OrderController::class, 'search']);
// Route::post('/order', [OrderController::class, 'orders_data']);
// Route::get('/order', [OrderController::class, 'order_table_data']);




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin_login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin_login', [AdminController::class, 'adminLogin']);

// Route::get('registration_table', [userController::class, 'index1'])->name('registration_table');
// // Edit user route
// Route::get('/users/{user}/edit', [userController::class, 'edit'])->name('users.edit');
// // Update user route
// Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
// // Delete user route
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

 

Route::view('/add_admin','add_admin');
