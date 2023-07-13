<?php

namespace App\Http\Controllers\Web\Application\User\Page;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.index', [
            'title' => 'All Blogs',
            'blogs' => Blog::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            "title" => "Blog",
            "blog" => $blog
        ]);
    }
}
