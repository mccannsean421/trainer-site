<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Models\Message;

class ContactController extends Controller {
    public function create() {
        dd('welp');
    }

    public function store()
    {
        // Validate the incoming request data
        $attributes = request()->validate([
            'full_name' => 'required|string',
            'email' => 'required',
            'message' => 'required|string',
        ]);

        // Create a new post using the validated data
        Message::create($attributes);

        // Redirect to a page or display a success message
        return redirect('/');
    }
}