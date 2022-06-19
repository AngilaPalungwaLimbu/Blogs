<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog(){
        $startup=Blog::where('id',2)->first();
        return view('frontend.pages.blog',compact('startup'));
    }
    public function singlepost(){
        return view('frontend.pages.singlepost');
    }
}
