<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $serverIp = $request->server('SERVER_ADDR');
        $posts = Post::orderBy('id', 'desc')->get();

        return view('index', compact('posts', 'serverIp'));
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
