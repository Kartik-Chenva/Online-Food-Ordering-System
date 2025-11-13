<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    public function processOrder(Request $request)
    {
        // Process the order data
        $items = $request->input('items', []);
        
        if (empty($items)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        return view('order_confirmation', compact('items'))->with('order_success', 'Your order has been placed successfully!');
    }

    public function create(Request $request)
{
    // Fetch cart data from session
    $items = session('cart', []);

    if (empty($items)) {
        return redirect('/cart')->with('error', 'Your cart is empty.');
    }

    session()->forget('cart');
    return view('order', compact('items'))->with('success', 'Order placed successfully. Your cart has been cleared.');

}



    public function submit(Request $request)
{
    $items = $request->input('items', []);
    
    // Here you can save the order in the database
    // Example:
    // Order::create([...]);

    // Clear the cart after placing the order
    session()->forget('cart');

    return redirect('/')->with('success', 'Your order has been placed successfully!');
}




    public function orders_data(Request $req)
    {
        // echo $req->total_price;
        // die;
        $orders = new Orders;
        $orders->user_id = Auth::id();
        $orders->name = $req->name;
        $orders->phone = $req->phone;
        $orders->order_date = $req->order_date;
        $orders->address = $req->address;
        $orders->total_price = $req->total_price; // Storing total price
        $orders->items = json_encode($req->items); // Storing items as JSON

        // Handle image upload
        if ($req->hasFile('image')) {
            $imagePath = $req->file('image')->store('order_images', 'public');
            $orders->image = $imagePath;
        }

        $orders->save();

        // Redirect with a success message
        return redirect('/')->with('success', 'Your order has been placed successfully!');
    }

    public function userOrders()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        $orders = orders::query()
            ->where(function ($query) use ($user) {
                $query->where('user_id', $user->id);

                if (!empty($user->name)) {
                    $query->orWhere(function ($nested) use ($user) {
                        $nested->whereNull('user_id')
                               ->where('name', $user->name);
                    });
                }
            })
            ->orderByDesc('created_at')
            ->get();

        return view('user_orders', compact('orders'));
    }

    
//     public function search(Request $request)
// {
//     $query = orders::query();

//     if ($request->has('name')) {
//         $query->where('name', 'like', '%' . $request->name . '%');
//     }

//     $orders = $query->paginate(2); // Paginate results

//     return view('order_tabel', compact('orders'));
// }

public function search(Request $request)
{
    $query = orders::query();

    // If 'order_date' is provided, filter by it
    if ($request->has('order_date') && !empty($request->order_date)) {
        $query->whereDate('order_date', $request->order_date);
    }

    $orders = $query->paginate(2); // Adjust pagination as needed

    return view('order_tabel', compact('orders'));
}


    public function delete_order_data($id)
    {
        $orders=orders::find($id);
        $orders->delete();
        return redirect("order_tabel");
    }

        // Show all orders
        public function index()
        {
            // Retrieve all orders with related items
            $orders = orders::with('items')->get();
            return view('order_table', compact('orders'));
        }
    
        // Show order edit form
        public function edit($id)
        {
            // Retrieve the order
            $order = orders::findOrFail($id);
    
            // Decode items if they are stored as JSON
            $items = is_string($order->items) ? json_decode($order->items, true) : $order->items;
    
            return view('edit_order', [
                'orders' => $order,
                'items' => $items
            ]);
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'order_date' => 'required|date',
                'address' => 'required|string',
                'items' => 'required|array',
                'total_price' => 'required|numeric',
            ]);
        
            // Find the order
            $order = Orders::findOrFail($id);
        
            // Update order details
            $order->update([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'order_date' => $request->input('order_date'),
                'address' => $request->input('address'),
                'total_price' => $request->input('total_price'),
            ]);
        
            // Update order items
            foreach ($request->input('items') as $itemId => $itemData) {
                $orderItem = OrderItem::find($itemId);
                
                if ($orderItem) {
                    $orderItem->update([
                        'quantity' => $itemData['quantity'],
                        'price' => $itemData['price'],
                    ]);
                }
            }
        
            // ✅ Redirect to order table after successful update
            return redirect()->route('search_order')->with('success', 'Order updated successfully.');
        }


        public function submit1(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'order_date' => 'required|date',
                'address' => 'required|string',
                'items' => 'required|array',
                'total_price' => 'required|numeric',
            ]);
        
            // Example: You could store it in DB here if needed
        
            // Redirect back with confirmation
            return back()->with('confirmed_order', $validated);
        }
        
        public function edit1(Request $request)
        {
            if (session()->has('confirmed_order')) {
                return redirect()->route('order.form')->withInput(session('confirmed_order'));
            }
        
            return redirect()->route('order.form')->with('error', 'No order found to edit.');
        }

    
}

