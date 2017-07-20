<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    function tags(){
    	return $this->belongsToMany('App\Tags', 'blogs_tags', 'blog_id', 'tag_id');
    }

    function addTag($id){
    	$this->tags()->attach($id);
    }

}

