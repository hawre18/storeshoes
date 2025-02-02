<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showList()
    {
        $blogs=Blog::with('image')->get();
        return view('index.user.v1.blogs-list',compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog=Blog::with('image')->findOrFail($id)->first();
        $blogs=Blog::with('image')->inRandomOrder()->take(8)->get();
        return view('index.user.v1.blog-detail',compact('blog','blogs'));
    }
}
