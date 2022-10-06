<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function mypage(Post $post)
    {
        return view('posts/mypage');  
    }
    
    public function ranking(Post $post)
    {
        return view('posts/ranking');
    }   
    
    public function studystart(Post $post)
    {
        return view('posts/study_start');
    }   
    
    public function calendar(Post $post)
    {
        return view('posts/calendar');
    }
    
     public function timer(Post $post)
    {
        return view('posts/timer');
    }
}