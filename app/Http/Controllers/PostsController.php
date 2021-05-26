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
        // dd(request()->all());
        // Validation
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'], // file must be image type
        ]);

        // this case store the image in the local database
        $imagePath = request('image')->store('uploads', 'public'); // store(directory for saving, driver)

        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();
        // easy way below
        // \App\Models\Post::create($data); // error

        // get authenticated user, call the posts from that user, then create with value
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,

        ]);

        // go into authenticated user id profile
        return redirect('/profile/' . auth()->user()->id);
    }
}
