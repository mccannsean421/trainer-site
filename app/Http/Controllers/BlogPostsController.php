<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostsController extends Controller
{
    //
    public function create() {
        dd('This is the blog view');
    }
    
    public function store() {
        $attributes = request()->validate([
            'title' => ['required'],
            'author' => ['required'],
            'meta_description' => ['required'],
            'content' => ['required'],
            'published_at' => ['required'],
        ]);

        BlogPost::create($attributes);
    }
}
