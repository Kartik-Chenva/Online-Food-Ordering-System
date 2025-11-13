
    public function orders_data(Request $req)
    {
        $orders = new orders;
        $orders->name = $req->name;
        $orders->phone = $req->phone;
        $orders->order_date = $req->order_date;
        $orders->address = $req->address;
        $orders->save();
        // Redirect with a success message
        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
    
    public function search()
    {
        $orders = orders::all(); // Fetch orders from the database
        return view('orders.search', compact('orders')); 
    } 

    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date('order_date');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};



php artisan make:migration create_orders_table



<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\controller2;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::view('/order_tabel','order_tabel');



// Cart
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
// Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/order', [OrderController::class, 'processOrder'])->name('order.process');

Route::get('/order/create', [OrderController::class, 'create'])->name('order.create'); // Show order form
Route::post('/order/submit', [OrderController::class, 'orders_data'])->name('order.orders_data'); // Submit order



Route::get('/orders/search', [OrderController::class, 'search'])->name('orders.search');



Route::post('//order/create', [OrderController::class, 'orders_data'])->name('order.create');
Route::get('/order_tabel', [OrderController::class, 'search']);


Route::post('/order/submit', [OrderController::class, 'submit']);
Route::get('/order/submit', [OrderController::class, 'submit']); // Change to post if needed




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin_login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin_login', [AdminController::class, 'adminLogin']);
