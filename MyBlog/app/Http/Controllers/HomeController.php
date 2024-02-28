<?php

namespace App\Http\Controllers;

// use App\Models\Post;
use App\Models\_posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function IndexAction()
    {
        $psts = _posts::all();
        return view('home', ['posts'=>$psts]);

    }
}

