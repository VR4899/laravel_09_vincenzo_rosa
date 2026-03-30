<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
       $title = $request->title;
       $content = $request->content;
       $author = $request->author;

       $post = new Post();

       $post->title = $title;
       $post->content = $content;
       $post->author = $author;

       $post->save();

        return redirect()->back();

    }

    public function posts(){
        $posts = Post::all();

        return view('folder.posts', ['posts'=> $posts]); 


    }

}
