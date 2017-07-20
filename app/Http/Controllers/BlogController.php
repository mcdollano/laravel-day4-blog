<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use App\Tags;

class BlogController extends Controller
{
	    function showBlogs(){
   		$blogs = Blogs::all();
   		$tags = Tags::all();

   		return view('display_blogs', compact('blogs','tags'));
   } 

}
