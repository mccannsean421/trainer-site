<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller {
    public function create() {
        return view('login');
    }

    public function store() {
        // Follow up on RATE LIMITING & PASSWORD RESET

        // validate login attributes
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // attempt to login user
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Sorry, those credentials do not match']);
        }

        //regenerate session token
        request()->session()->regenerate();

        // Redirect
        return redirect('/');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/');
    }
}