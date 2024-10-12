<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {

        $validationSuccess = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255',
        ]);

        $validationSuccess['password'] = Hash::make($validationSuccess['password']);

        User::create($validationSuccess);

        return redirect('/login')->with('status', 'The new account is ready, please log in');
    }
}
