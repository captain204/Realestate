<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController1 extends Controller
{
     public function index()
    {
    	
    	$blogs = Blog::all();
    	return view('blogs.index')->with('blogs',$blogs);
    }

    public function show($id){

    	$blog = Blog::findOrFail($id);
    	return view('blogs.show')->with('blog',$blog);
    }
}
