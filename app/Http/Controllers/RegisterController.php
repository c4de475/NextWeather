<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/favorites');
    }
}
