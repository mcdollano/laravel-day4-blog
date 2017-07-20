<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use App\Tags;

class TagController extends Controller
{
    function addTags(Request $request,$id){
    	$blog = Blogs::find($id);

    	$new_tag = new Tags;
    	$new_tag->tag_name = $request->add_tags;
    	$new_tag->save();
    	$tag_id = $new_tag->id;

    	$blog->addTag($tag_id);
    	return back();
    }
}
