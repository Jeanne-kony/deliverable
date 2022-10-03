<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);  
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }   
    
    public function study(Post $post)
    {
        return view('posts/study')->with(['post' => $post]);
    }   
    
    public function calendar(Post $post)
    {
        return view('posts/calendar')->with(['post' => $post]);
    }
    
     public function timer(Post $post)
    {
        return view('posts/timer')->with(['post' => $post]);
    }
}