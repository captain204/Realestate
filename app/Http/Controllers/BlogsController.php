<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

            //$this->middleware('auth',['only'=>['create','store']]);
            //$this->middleware('auth',['except'=>['index','show']]);

    }



    public function index()
    {
        
        //$blogs = Blog::all();
        $blogs = Blog::latest()->get();
        return view('blogs.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $input = Request::all();
        
        Blog::create($input);

        return redirect('blogs');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $blog = Blog::findOrFail($id);
        return view ('blogs.edit')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect('blogs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blogs');        
    }
}
