<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;


class PostController extends Controller
{
     public function posts(){
        $posts = Post::all();

        return view('folder.posts', ['posts'=> $posts]); 


    }
    public function store(PostRequest $request){

   

       $title = $request->title;
       $content = $request->content;
       $author = $request->author;
       if ($img = $request->file('img')) {$img = $request->file('img')->store('img','public');}

        Post::create([
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'img' => $img,

        ]);

        return redirect()->back()->with('message', 'Post creato con successo!');

    }

}

