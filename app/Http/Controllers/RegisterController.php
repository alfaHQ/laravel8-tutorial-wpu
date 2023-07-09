<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
    //

    public function index() {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(request $request) {
        
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        // $request->session()->flash('success', 'Registration success');

        return redirect('/login')->with('success', 'Registration success');
    }
}
