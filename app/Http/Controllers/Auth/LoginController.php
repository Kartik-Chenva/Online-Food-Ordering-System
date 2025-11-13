<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login'); // Ensure resources/views/login.blade.php exists
    }

    // Handle login attempt
    // public function login(Request $request)
    // {
    //     // Validate input
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     // Attempt login
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return redirect()->route('dashboard')->with('success', 'Login successful!');
    //     }

    //     // If login fails
    //     return back()->with('error', 'Invalid email or password.');
    // }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // ✅ Flash success message
        session()->flash('login_success', 'Login successful!');

        // Redirect based on role
        if ($user->role == 1) {
            return redirect('dashboard');
        } else {
            return redirect('index');
        }
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}


    // Logout function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
