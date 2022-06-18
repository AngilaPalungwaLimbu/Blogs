<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function singlepost(){
        return view('frontend.pages.singlepost');
    }
}
