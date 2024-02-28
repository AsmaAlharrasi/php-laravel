<?php

namespace App\Http\Controllers;

use App\Models\_posts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // public function IndexAction()
    // {
    //     return view('blog');

    // }

    public function index()
    {
        $dbposts= _posts::all();

        // $globalpost = [
        //     ['id' => 1 , 'name' => 'hello world' , 'postedby' => 'Asma'],
        //     ['id' => 2 , 'name' => 'hello world' , 'postedby' => 'Sara'],
        //     ['id' => 3 , 'name' => 'hello world' , 'postedby' => 'Ahmed'],

        // ];
        return view('Posts.index', ['posts' => $dbposts]);

    }

    public function create(){
        return view('Posts.create');
    }

    public function show($postId){
        $getpost = _posts::find($postId);
        return view('Posts.show' , ['post' => $getpost]);
    }

    public function store()
     {

        $title = Request() -> title;
        $Descreption = Request()->Descreption;
        _posts::create([
            'title' => $title ,
            'Descreption' => $Descreption
        ]);

        
        return to_route('index');
    }

    public function update($postID){
        
        $getpost = _posts::find($postID);
        if(is_null($getpost)){
            return to_route('Posts.index');
        }
        return view('Posts.update',['post' => $getpost]);
    }

    public function updateID(Request $request, $postID){
        $post = _posts::find($postID);

        // Check if post exists
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found.');
        }
       
        $post ->title = $request->input('title');
        $post ->Descreption= $request->input("Descreption");
        $post ->save();
      

        return to_route('index');
    }

    public function delete($postID){
        
        $getpost = _posts::find($postID);
        $getpost->delete();

        //for delete all rows
        //$getpost::truncate();
        
        return to_route('index');
    }

   

}
