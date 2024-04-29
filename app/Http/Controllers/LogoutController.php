<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function create() {
        return view('login.create');
    }

    public function store() { 
        $attributes = request()->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:7',
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/favorites');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
