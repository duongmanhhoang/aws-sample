<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('index', compact('posts'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'image' => 'test',
        ]);

        return redirect()->back();
    }
}
