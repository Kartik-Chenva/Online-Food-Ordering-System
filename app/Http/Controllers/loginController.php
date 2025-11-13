<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect based on role
            if ($user->role == 1) {
                return redirect('dashboard');
            } else {
                return redirect('index');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
