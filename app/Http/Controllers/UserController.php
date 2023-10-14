<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id); // Retrieve a user by their ID
        return view('users.show', ['user' => $user]);
    }

    public function index()
    {
        $users = User::all(); // Retrieve all users
        return view('users.index', ['users' => $users]);
    }
}
