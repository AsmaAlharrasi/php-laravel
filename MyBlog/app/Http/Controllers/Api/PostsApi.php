<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\_posts;
use Illuminate\Http\Request;

class PostsApi extends Controller
{
    public function allposts(){
        return _posts::all();
    }

    public function getposts($postid){
        $post = _posts::find($postid);
        return $post;
    }
}


