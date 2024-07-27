<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller {
    public function create() {
        return view('auth.register');
    }

    public function store() {
        // Validate
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', 'confirmed'],
        ]);


        //Create user
        $user = User::Create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}