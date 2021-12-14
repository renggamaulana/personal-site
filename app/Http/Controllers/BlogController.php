<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'title' => 'Blogs',
            'blogs' => Blog::all()
        ]);
    }

    public function show()
    {
        return view('blog', [
            'title' => 'Blog',
            'blogs' => Blog::all()
        ]);
    }
}
