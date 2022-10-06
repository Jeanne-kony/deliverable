<?php

namespace App\Http\Controllers;

use App\Layout;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function mypage(Layout $layout)
    {
        return view('layout/mypage');
    }
 
 
    public function sun()
    {
        return view('star.sun');
    }
 
 
    public function moon()
    {
        return view('star.moon');
    }
}