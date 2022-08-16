<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    // Show all blogs
    public function index()
    {
        return view('blog.index', [
            'blogs' => blog::latest()
        ]);
    }

    //Show single listing
    public function show(blog $blog)
    {
        return view('blog.show', [
            'blog' => $blog
        ]);
    }

    //view blog page
    public function create_blog(){
        return view('about');
    }

    //store blog data
    public function store()
    {
        $formFields = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
    }
}
