<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('backend.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog= new Blog();
        $blog->title=$request->title;
        $blog->category=$request->category;
        $blog->date=$request->date;
        $blog->description=$request->description;

        if($request->hasFile('image'))
        {
            $file=$request->image;
            $newName=time(). $file->getClientOriginalName() ;
            $file->move("images",$newName);
            $blog->image="images/$newName";
        } else{
            $blog->image="noimage/noimage.jpg";
        }

        $blog->save();
        return redirect('/blog');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog= Blog::find($id);
        $blog->title=$request->title;
        $blog->category=$request->category;
        $blog->date=$request->date;
        $blog->description=$request->description;

        if($request->hasFile('image'))
        {
            $file=$request->image;
            $newName=time(). $file->getClientOriginalName() ;
            $file->move("images",$newName);
            $blog->image="images/$newName";
        } else{
            $blog->image="noimage/noimage.jpg";
        }

        $blog->update();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/blog');
    }
}
