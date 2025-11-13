<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register; // ✅ Fix model name (capitalized)
use App\Models\User; // ✅ Keep this if needed

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role != 2) {
            return redirect('dashboard')->with('error', 'Unauthorized Access');
        }
        return view('index');
    }

public function index1()
{
    $users = Register::all();  // ✅ Fetch all users from the database
    return view('registration_table', compact('users'));
}

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id, 
            'role' => 'required|in:1,2', 
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('registration_table')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('registration_table')->with('success', 'User deleted successfully!');
    }
}
