<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // every single route in this class will require authorization
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // Validation
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'], // file must be image type
        ]);

        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();
        // easy way below
        // \App\Models\Post::create($data); // error

        // get authenticated user, call the posts from that user, then create with value
        auth()->user()->posts()->create($data);



        dd(request()->all());
    }
}
