<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'title' => 'Blog',
            'blogs' => Blog::all()
        ]);
    }

    // Halaman single post
    public function show(Blog $blog)
    {
        return view('blog', [
            "title" => "Blog",
            "blog" => $blog
        ]);
    }
}
