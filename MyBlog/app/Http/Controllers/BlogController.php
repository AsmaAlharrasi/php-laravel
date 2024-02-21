<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function IndexAction()
    {
        return view('blog');

    }

    public function BlogsList()
    {

        $globalpost = [
            ['id' => 1 , 'name' => 'hello world' , 'postedby' => 'Asma'],
            ['id' => 2 , 'name' => 'hello world' , 'postedby' => 'Sara'],
            ['id' => 3 , 'name' => 'hello world' , 'postedby' => 'Ahmed'],

        ];
        return view('blog', ['posts' => $globalpost]);

    }
}
