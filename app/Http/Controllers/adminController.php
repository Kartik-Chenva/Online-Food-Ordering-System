<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role != 1) {
            return redirect('index')->with('error', 'Unauthorized Access');
        }
        return view('dashboard');
    }
}
